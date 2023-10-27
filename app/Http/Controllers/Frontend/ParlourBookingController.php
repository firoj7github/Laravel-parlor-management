<?php

namespace App\Http\Controllers\Frontend;

use Exception;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ParlourBooking;
use App\Models\UserNotification;
use App\Models\Admin\ParlourList;
use App\Models\Admin\ServiceType;
use App\Models\Admin\UsefullLink;
use App\Models\Admin\SiteSections;
use App\Constants\SiteSectionConst;
use App\Http\Controllers\Controller;
use App\Constants\PaymentGatewayConst;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin\ParlourListHasSchedule;
use App\Models\Admin\PaymentGatewayCurrency;
use App\Http\Helpers\PaymentGateway as PaymentGatewayHelper;

class ParlourBookingController extends Controller
{
    /**
     * Method for show parlour booking page
     * @param $slug
     * @param \Illuminate\Http\Request $request
     */
    public function getService(Request $request,$slug){
        $page_title         = "| Parlour Booking";
        $parlour            = ParlourList::with(['schedules'])->where('slug',$slug)->first();
        $service_types      = ServiceType::where('status',true)->get();
        $validated_user     = auth()->user();
        $footer_slug        = Str::slug(SiteSectionConst::FOOTER_SECTION);
        $footer             = SiteSections::getData($footer_slug)->first();
        $usefull_links      = UsefullLink::where('status',true)->get();
        $contact_slug       = Str::slug(SiteSectionConst::CONTACT_SECTION);
        $contact            = SiteSections::getData($contact_slug)->first();
        

        return view('frontend.pages.parlour-booking.index',compact(
            'page_title',
            'parlour',
            'service_types',
            'validated_user',
            'footer',
            'usefull_links',
            'contact'
        ));
    }
    /**
     * Method for store appointment booking information and passed it to preview page
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request){
        $validated_user         = auth()->user();
        if(!$validated_user) return back()->with(['error' => ['Please Login First.']]);
        $validator              = Validator::make($request->all(),[
            'parlour'           => 'required',
            'schedule'          => 'required',
            'price'             => 'required',
            'service'           => "required|array",
            'service.*'         => "required|string|max:255",
            'message'           => "nullable"
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput($request->all());
        }
        $validated                  = $validator->validate();
        $validated['slug']          = Str::uuid();
        $slug                       = $validated['parlour'];
        $parlour                    = ParlourList::where('slug',$slug)->first();
        if(!$parlour) return back()->with(['error'=> ['Parlour Not Found!']]);
        if(auth()->check()){
            $validated['user_id']   = auth()->user()->id;
        }
        else{
            $validated['user_id']   = null;
        }

        $validated['parlour_id']   = $parlour->id;

        $schedule = ParlourListHasSchedule::where('id',$validated['schedule'])->whereHas('parlour',function($q) use ($parlour) {
            $q->where('id',$parlour->id);
        })->first();

        if(!$schedule) {
            return back()->with(['error' => ['Schedule Not Found!']]);
        }
        $validated['schedule_id'] = $validated['schedule'];
        
        $alrady_appointed = ParlourBooking::where('parlour_id',$parlour->id)->where('schedule_id',$validated['schedule_id'])->count();

        if($alrady_appointed >= $schedule->max_client) {
            return back()->with(['error' => ['Appiontment Limit is over!']]);
        }

        $next_appointment_no = $alrady_appointed + 1;
        $validated['serial_number'] = $next_appointment_no;
        try{
            $booking = ParlourBooking::create($validated);
        }catch(Exception $e){
            return back()->with(['error' => ['Something went wrong! Please try again.']]);
        }
        return redirect()->route('parlour.booking.preview',$booking->slug);
    }
    /**
     * Method for show the preview page 
     * @param $slug
     * @param \Illuminate\Http\Request $request
     */
    public function preview(Request $request,$slug){
        $page_title         = "Appointment Preview";
        $booking            = ParlourBooking::with(['parlour','schedule','payment_gateway'])->where('slug',$slug)->first();
        $payment_gateway   = PaymentGatewayCurrency::whereHas('gateway', function ($gateway) {
            $gateway->where('slug', PaymentGatewayConst::payment_method_slug());
            $gateway->where('status', 1);
        })->get();
        $footer_slug        = Str::slug(SiteSectionConst::FOOTER_SECTION);
        $footer             = SiteSections::getData($footer_slug)->first();
        $usefull_links      = UsefullLink::where('status',true)->get();
        $contact_slug       = Str::slug(SiteSectionConst::CONTACT_SECTION);
        $contact            = SiteSections::getData($contact_slug)->first();

        return view('frontend.pages.parlour-booking.preview',compact(
            'page_title',
            'booking',
            'payment_gateway',
            'footer',
            'usefull_links',
            'contact'
        )); 
    }
    /**
     * Method for confirm the booking
     * @param $slug
     * @param \Illuminate\Http\Request $request
     */
    public function confirm(Request $request,$slug){

        $data       = ParlourBooking::with(['payment_gateway','parlour','schedule','user'])->where('slug',$slug)->first();
        $validator  = Validator::make($request->all(),[
            'payment_method'    => 'required',
        ]);
        $validated  = $validator->validate();
        $from_time        = $data->schedule->from_time ?? '';
        $parsed_from_time = Carbon::createFromFormat('H:i', $from_time)->format('h A');

        $to_time          = $data->schedule->to_time ?? '';
        $parsed_to_time   = Carbon::createFromFormat('H:i', $to_time)->format('h A');
        if($validated['payment_method'] == global_const()::CASH_PAYMENT){
            try{
                $data->update([
                    'payment_method'    => $validated['payment_method'],
                    'status'            => true,
                ]);
                UserNotification::create([
                    'user_id'  => auth()->user()->id,
                    'message'  => "Your Booking (Parlour: ".$data->parlour->name.",
                    Day: ".$data->schedule->week->day.", Time: ".$parsed_from_time."-".$parsed_to_time.", Serial Number: ".$data->serial_number.") Successfully Booked.", 
                ]);
            }catch(Exception $e){
                return back()->with(['error' => ['Something went wrong! Please try again.']]);
            }
            return redirect()->route('find.parlour')->with(['success' => ['Congratulations! Parlour Booking Confirmed Successfully.']]);
        }else{
            try{
                $instance = PaymentGatewayHelper::init($data)->gateway()->render();
            }catch(Exception $e){
                return back()->with(['error' => [$e->getMessage()]]);
            }
            return $instance;
        }
    }
}
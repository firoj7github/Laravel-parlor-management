<?php

namespace Database\Seeders\Admin;

use App\Models\Admin\UsefullLink;
use Illuminate\Database\Seeder;

class UsefulLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useful_links = array(
            array('type' => 'PRIVACY_POLICY','title' => '{"language":{"en":{"title":"Privacy Policy"},"es":{"title":"pol\\u00edtica de privacidad"},"ar":{"title":"\\u0633\\u064a\\u0627\\u0633\\u0629 \\u0627\\u0644\\u062e\\u0635\\u0648\\u0635\\u064a\\u0629"}}}','slug' => 'privacy-policy','url' => 'privacy-policy','content' => '{"language":{"en":{"content":"<h2><strong>Privacy Policy for eSalon<\\/strong><\\/h2><p>At eSalon, we understand the importance of privacy and are committed to protecting the personal information of our users. We believe in being transparent about our data collection and usage practices, and this privacy policy outlines what information we collect, how we use it, and who we share it with.<\\/p><h3><strong>Information Collection:<\\/strong><\\/h3><p>eSalon collects the following types of personal information from its users:<\\/p><ul><li>Name<\\/li><li>Phone Number<\\/li><li>Profile image<\\/li><\\/ul><p>The information is collected when the user creates an account with eSalon or updates their profile information. The profile image is optional, and the user has the choice of whether or not to upload it.<\\/p><h3><strong>Information Use:<\\/strong><\\/h3><p>eSalon uses the personal information collected from its users for the following purposes:<\\/p><ul><li>To provide a personalized experience for the user<\\/li><li>To send notifications and updates about the app<\\/li><li>To improve the app and its features based on user feedback and usage patterns<\\/li><li>To comply with legal obligations and to resolve disputes<\\/li><\\/ul><h3><strong>Information Sharing:<\\/strong><\\/h3><p>eSalon does not share any of the personal information collected from its users with third parties, except in the following cases:<\\/p><ul><li>When required by law<\\/li><li>To protect the rights and safety of eSalon and its users<\\/li><li>To enforce our terms of service<\\/li><\\/ul><h3><strong>Data Security:<\\/strong><\\/h3><p>eSalon takes the security of its users\' personal information seriously and has implemented appropriate technical and organizational measures to protect it. However, please note that no data transmission or storage can be guaranteed to be 100% secure.<\\/p><h3><strong>Contact Information:<\\/strong><\\/h3><p>If you have any questions or concerns regarding eSalon privacy policy or the information we collect, you can contact us at:<\\/p><ul><li>Email: support@eSalon.com<\\/li><\\/ul><h3><strong>Changes to Privacy Policy:<\\/strong><\\/h3><p>eSalon reserves the right to modify this privacy policy at any time. We will notify our users of any significant changes by posting a notice on our app or website and by updating the \\"Last Updated\\" date at the top of this policy. We encourage our users to regularly review this privacy policy to stay informed about how we are protecting their personal information.<\\/p>"},"es":{"content":"<p>Pol\\u00edtica de privacidad para eSalon<\\/p><p>En eSalon, entendemos la importancia de la privacidad y estamos comprometidos a proteger la informaci\\u00f3n personal de nuestros usuarios. Creemos en ser transparentes sobre nuestras pr\\u00e1cticas de recopilaci\\u00f3n y uso de datos, y esta pol\\u00edtica de privacidad describe qu\\u00e9 informaci\\u00f3n recopilamos, c\\u00f3mo la usamos y con qui\\u00e9n la compartimos.<\\/p><p>Recopilaci\\u00f3n de informaci\\u00f3n:<\\/p><p>eSalon recopila los siguientes tipos de informaci\\u00f3n personal de sus usuarios:<\\/p><p>Nombre<br>N\\u00famero de tel\\u00e9fono<br>Imagen de perfil<\\/p><p>La informaci\\u00f3n se recopila cuando el usuario crea una cuenta con eSalon o actualiza la informaci\\u00f3n de su perfil. La imagen de perfil es opcional y el usuario tiene la opci\\u00f3n de cargarla o no.<\\/p><p>Uso de la informaci\\u00f3n:<\\/p><p>eSalon utiliza la informaci\\u00f3n personal recopilada de sus usuarios para los siguientes fines:<\\/p><p>Proporcionar una experiencia personalizada al usuario.<br>Para enviar notificaciones y actualizaciones sobre la aplicaci\\u00f3n<br>Mejorar la aplicaci\\u00f3n y sus funciones en funci\\u00f3n de los comentarios de los usuarios y los patrones de uso.<br>Para cumplir con obligaciones legales y resolver disputas<\\/p><p>El intercambio de informaci\\u00f3n:<\\/p><p>eSalon no comparte ninguna informaci\\u00f3n personal recopilada de sus usuarios con terceros, excepto en los siguientes casos:<\\/p><p>Cuando lo exige la ley<br>Para proteger los derechos y la seguridad de eSalon y sus usuarios<br>Para hacer cumplir nuestros t\\u00e9rminos de servicio<\\/p><p>Seguridad de datos:<\\/p><p>eSalon se toma en serio la seguridad de la informaci\\u00f3n personal de sus usuarios y ha implementado medidas t\\u00e9cnicas y organizativas apropiadas para protegerla. Sin embargo, tenga en cuenta que no se puede garantizar que ninguna transmisi\\u00f3n o almacenamiento de datos sea 100% seguro.<\\/p><p>Informaci\\u00f3n del contacto:<\\/p><p>Si tiene alguna pregunta o inquietud sobre la pol\\u00edtica de privacidad de eSalon o la informaci\\u00f3n que recopilamos, puede contactarnos en:<\\/p><p>Correo electr\\u00f3nico: support@eSalon.com<\\/p><p>Cambios a la Pol\\u00edtica de Privacidad:<\\/p><p>eSalon se reserva el derecho de modificar esta pol\\u00edtica de privacidad en cualquier momento. Notificaremos a nuestros usuarios sobre cualquier cambio significativo publicando un aviso en nuestra aplicaci\\u00f3n o sitio web y actualizando la fecha de \\"\\u00daltima actualizaci\\u00f3n\\" en la parte superior de esta pol\\u00edtica. Alentamos a nuestros usuarios a revisar peri\\u00f3dicamente esta pol\\u00edtica de privacidad para mantenerse informados sobre c\\u00f3mo protegemos su informaci\\u00f3n personal.<\\/p>"},"ar":{"content":"<p>\\u0633\\u064a\\u0627\\u0633\\u0629 \\u0627\\u0644\\u062e\\u0635\\u0648\\u0635\\u064a\\u0629 \\u0644eSalon<\\/p><p>\\u0641\\u064a eSalon\\u060c \\u0646\\u062a\\u0641\\u0647\\u0645 \\u0623\\u0647\\u0645\\u064a\\u0629 \\u0627\\u0644\\u062e\\u0635\\u0648\\u0635\\u064a\\u0629 \\u0648\\u0646\\u0644\\u062a\\u0632\\u0645 \\u0628\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629 \\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645\\u064a\\u0646\\u0627. \\u0646\\u062d\\u0646 \\u0646\\u0624\\u0645\\u0646 \\u0628\\u0623\\u0647\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0634\\u0641\\u0627\\u0641\\u064a\\u0629 \\u0641\\u064a\\u0645\\u0627 \\u064a\\u062a\\u0639\\u0644\\u0642 \\u0628\\u0645\\u0645\\u0627\\u0631\\u0633\\u0627\\u062a \\u062c\\u0645\\u0639 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0648\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645\\u0647\\u0627\\u060c \\u0648\\u062a\\u062d\\u062f\\u062f \\u0633\\u064a\\u0627\\u0633\\u0629 \\u0627\\u0644\\u062e\\u0635\\u0648\\u0635\\u064a\\u0629 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u062a\\u064a \\u0646\\u062c\\u0645\\u0639\\u0647\\u0627\\u060c \\u0648\\u0643\\u064a\\u0641 \\u0646\\u0633\\u062a\\u062e\\u062f\\u0645\\u0647\\u0627\\u060c \\u0648\\u0645\\u0639 \\u0645\\u0646 \\u0646\\u0634\\u0627\\u0631\\u0643\\u0647\\u0627.<\\/p><p>\\u062c\\u0645\\u0639 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a:<\\/p><p>\\u062a\\u0642\\u0648\\u0645 eSalon \\u0628\\u062c\\u0645\\u0639 \\u0627\\u0644\\u0623\\u0646\\u0648\\u0627\\u0639 \\u0627\\u0644\\u062a\\u0627\\u0644\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629 \\u0645\\u0646 \\u0645\\u0633\\u062a\\u062e\\u062f\\u0645\\u064a\\u0647\\u0627:<\\/p><p>\\u0627\\u0633\\u0645<br>\\u0631\\u0642\\u0645 \\u0627\\u0644\\u062a\\u0644\\u064a\\u0641\\u0648\\u0646<br>\\u0635\\u0648\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0644\\u0641 \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a<\\/p><p>\\u064a\\u062a\\u0645 \\u062c\\u0645\\u0639 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0639\\u0646\\u062f\\u0645\\u0627 \\u064a\\u0642\\u0648\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 \\u0628\\u0625\\u0646\\u0634\\u0627\\u0621 \\u062d\\u0633\\u0627\\u0628 \\u0644\\u062f\\u0649 eSalon Pro \\u0623\\u0648 \\u064a\\u0642\\u0648\\u0645 \\u0628\\u062a\\u062d\\u062f\\u064a\\u062b \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0645\\u0644\\u0641\\u0647 \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a. \\u0635\\u0648\\u0631\\u0629 \\u0627\\u0644\\u0645\\u0644\\u0641 \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631\\u064a\\u0629\\u060c \\u0648\\u0644\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 \\u062d\\u0631\\u064a\\u0629 \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u062a\\u062d\\u0645\\u064a\\u0644\\u0647\\u0627 \\u0623\\u0645 \\u0644\\u0627.<\\/p><p>\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a:<\\/p><p>\\u064a\\u0633\\u062a\\u062e\\u062f\\u0645 eSalon Pro \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629 \\u0627\\u0644\\u062a\\u064a \\u062a\\u0645 \\u062c\\u0645\\u0639\\u0647\\u0627 \\u0645\\u0646 \\u0645\\u0633\\u062a\\u062e\\u062f\\u0645\\u064a\\u0647 \\u0644\\u0644\\u0623\\u063a\\u0631\\u0627\\u0636 \\u0627\\u0644\\u062a\\u0627\\u0644\\u064a\\u0629:<\\/p><p>\\u0644\\u062a\\u0648\\u0641\\u064a\\u0631 \\u062a\\u062c\\u0631\\u0628\\u0629 \\u0634\\u062e\\u0635\\u064a\\u0629 \\u0644\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645<br>\\u0644\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0627\\u0644\\u0625\\u0634\\u0639\\u0627\\u0631\\u0627\\u062a \\u0648\\u0627\\u0644\\u062a\\u062d\\u062f\\u064a\\u062b\\u0627\\u062a \\u062d\\u0648\\u0644 \\u0627\\u0644\\u062a\\u0637\\u0628\\u064a\\u0642<br>\\u0644\\u062a\\u062d\\u0633\\u064a\\u0646 \\u0627\\u0644\\u062a\\u0637\\u0628\\u064a\\u0642 \\u0648\\u0645\\u064a\\u0632\\u0627\\u062a\\u0647 \\u0628\\u0646\\u0627\\u0621\\u064b \\u0639\\u0644\\u0649 \\u062a\\u0639\\u0644\\u064a\\u0642\\u0627\\u062a \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645\\u064a\\u0646 \\u0648\\u0623\\u0646\\u0645\\u0627\\u0637 \\u0627\\u0644\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645<br>\\u0644\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0644\\u0644\\u0627\\u0644\\u062a\\u0632\\u0627\\u0645\\u0627\\u062a \\u0627\\u0644\\u0642\\u0627\\u0646\\u0648\\u0646\\u064a\\u0629 \\u0648\\u062d\\u0644 \\u0627\\u0644\\u0646\\u0632\\u0627\\u0639\\u0627\\u062a<\\/p><p>\\u0645\\u0634\\u0627\\u0631\\u0643\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a:<\\/p><p>\\u0644\\u0627 \\u062a\\u0634\\u0627\\u0631\\u0643 eSalon Pro \\u0623\\u064a\\u064b\\u0627 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629 \\u0627\\u0644\\u062a\\u064a \\u062a\\u0645 \\u062c\\u0645\\u0639\\u0647\\u0627 \\u0645\\u0646 \\u0645\\u0633\\u062a\\u062e\\u062f\\u0645\\u064a\\u0647\\u0627 \\u0645\\u0639 \\u0623\\u0637\\u0631\\u0627\\u0641 \\u062b\\u0627\\u0644\\u062b\\u0629\\u060c \\u0625\\u0644\\u0627 \\u0641\\u064a \\u0627\\u0644\\u062d\\u0627\\u0644\\u0627\\u062a \\u0627\\u0644\\u062a\\u0627\\u0644\\u064a\\u0629:<\\/p><p>\\u0639\\u0646\\u062f\\u0645\\u0627 \\u064a\\u0642\\u062a\\u0636\\u064a \\u0627\\u0644\\u0642\\u0627\\u0646\\u0648\\u0646 \\u0630\\u0644\\u0643<br>\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u062d\\u0642\\u0648\\u0642 \\u0648\\u0633\\u0644\\u0627\\u0645\\u0629 eSalon Pro \\u0648\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645\\u064a\\u0647\\u0627<br>\\u0644\\u0641\\u0631\\u0636 \\u0634\\u0631\\u0648\\u0637 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0629 \\u0644\\u062f\\u064a\\u0646\\u0627<\\/p><p>\\u0623\\u0645\\u0646 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a:<\\/p><p>\\u062a\\u0623\\u062e\\u0630 \\u0634\\u0631\\u0643\\u0629 eSalon Pro \\u0645\\u0633\\u0623\\u0644\\u0629 \\u0623\\u0645\\u0646 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629 \\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645\\u064a\\u0647\\u0627 \\u0639\\u0644\\u0649 \\u0645\\u062d\\u0645\\u0644 \\u0627\\u0644\\u062c\\u062f\\u060c \\u0648\\u0642\\u062f \\u0646\\u0641\\u0630\\u062a \\u0627\\u0644\\u062a\\u062f\\u0627\\u0628\\u064a\\u0631 \\u0627\\u0644\\u0641\\u0646\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0646\\u0638\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0646\\u0627\\u0633\\u0628\\u0629 \\u0644\\u062d\\u0645\\u0627\\u064a\\u062a\\u0647\\u0627. \\u0648\\u0645\\u0639 \\u0630\\u0644\\u0643\\u060c \\u064a\\u0631\\u062c\\u0649 \\u0645\\u0644\\u0627\\u062d\\u0638\\u0629 \\u0623\\u0646\\u0647 \\u0644\\u0627 \\u064a\\u0645\\u0643\\u0646 \\u0636\\u0645\\u0627\\u0646 \\u0623\\u0646 \\u064a\\u0643\\u0648\\u0646 \\u0646\\u0642\\u0644 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0623\\u0648 \\u062a\\u062e\\u0632\\u064a\\u0646\\u0647\\u0627 \\u0622\\u0645\\u0646\\u064b\\u0627 \\u0628\\u0646\\u0633\\u0628\\u0629 100%.<\\/p><p>\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u0627\\u062a\\u0635\\u0627\\u0644:<\\/p><p>\\u0625\\u0630\\u0627 \\u0643\\u0627\\u0646\\u062a \\u0644\\u062f\\u064a\\u0643 \\u0623\\u064a \\u0623\\u0633\\u0626\\u0644\\u0629 \\u0623\\u0648 \\u0627\\u0633\\u062a\\u0641\\u0633\\u0627\\u0631\\u0627\\u062a \\u0628\\u062e\\u0635\\u0648\\u0635 \\u0633\\u064a\\u0627\\u0633\\u0629 \\u062e\\u0635\\u0648\\u0635\\u064a\\u0629 eSalon Pro \\u0623\\u0648 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u062a\\u064a \\u0646\\u062c\\u0645\\u0639\\u0647\\u0627\\u060c \\u064a\\u0645\\u0643\\u0646\\u0643 \\u0627\\u0644\\u0627\\u062a\\u0635\\u0627\\u0644 \\u0628\\u0646\\u0627 \\u0639\\u0644\\u0649:<\\/p><p>\\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a: support@eSalon.com<\\/p><p>\\u0627\\u0644\\u062a\\u063a\\u064a\\u064a\\u0631\\u0627\\u062a \\u0641\\u064a \\u0633\\u064a\\u0627\\u0633\\u0629 \\u0627\\u0644\\u062e\\u0635\\u0648\\u0635\\u064a\\u0629:<\\/p><p>\\u062a\\u062d\\u062a\\u0641\\u0638 eSalon Pro \\u0628\\u0627\\u0644\\u062d\\u0642 \\u0641\\u064a \\u062a\\u0639\\u062f\\u064a\\u0644 \\u0633\\u064a\\u0627\\u0633\\u0629 \\u0627\\u0644\\u062e\\u0635\\u0648\\u0635\\u064a\\u0629 \\u0647\\u0630\\u0647 \\u0641\\u064a \\u0623\\u064a \\u0648\\u0642\\u062a. \\u0633\\u0646\\u0642\\u0648\\u0645 \\u0628\\u0625\\u062e\\u0637\\u0627\\u0631 \\u0645\\u0633\\u062a\\u062e\\u062f\\u0645\\u064a\\u0646\\u0627 \\u0628\\u0623\\u064a \\u062a\\u063a\\u064a\\u064a\\u0631\\u0627\\u062a \\u0645\\u0647\\u0645\\u0629 \\u0639\\u0646 \\u0637\\u0631\\u064a\\u0642 \\u0646\\u0634\\u0631 \\u0625\\u0634\\u0639\\u0627\\u0631 \\u0639\\u0644\\u0649 \\u062a\\u0637\\u0628\\u064a\\u0642\\u0646\\u0627 \\u0623\\u0648 \\u0645\\u0648\\u0642\\u0639\\u0646\\u0627 \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a \\u0648\\u0639\\u0646 \\u0637\\u0631\\u064a\\u0642 \\u062a\\u062d\\u062f\\u064a\\u062b \\u062a\\u0627\\u0631\\u064a\\u062e \\"\\u0622\\u062e\\u0631 \\u062a\\u062d\\u062f\\u064a\\u062b\\" \\u0641\\u064a \\u0627\\u0644\\u062c\\u0632\\u0621 \\u0627\\u0644\\u0639\\u0644\\u0648\\u064a \\u0645\\u0646 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0633\\u064a\\u0627\\u0633\\u0629. \\u0646\\u062d\\u0646 \\u0646\\u0634\\u062c\\u0639 \\u0645\\u0633\\u062a\\u062e\\u062f\\u0645\\u064a\\u0646\\u0627 \\u0639\\u0644\\u0649 \\u0645\\u0631\\u0627\\u062c\\u0639\\u0629 \\u0633\\u064a\\u0627\\u0633\\u0629 \\u0627\\u0644\\u062e\\u0635\\u0648\\u0635\\u064a\\u0629 \\u0647\\u0630\\u0647 \\u0628\\u0627\\u0646\\u062a\\u0638\\u0627\\u0645 \\u0644\\u0644\\u0628\\u0642\\u0627\\u0621 \\u0639\\u0644\\u0649 \\u0627\\u0637\\u0644\\u0627\\u0639 \\u062d\\u0648\\u0644 \\u0643\\u064a\\u0641\\u064a\\u0629 \\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a\\u0647\\u0645 \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629.<\\/p>"}}}','status' => '1','editable' => '0','created_at' => '2023-10-22 11:00:07','updated_at' => '2023-10-22 11:02:59')
        );
        UsefullLink::insert($useful_links);
    }
}
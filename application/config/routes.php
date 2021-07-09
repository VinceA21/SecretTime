<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
  my-controller/my-method	-> my_controller/my_method
*/


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

 
// ===================  User Frontend =================================


$route['login']='login/auth/my_login';

// ---------------------------- Female routes -------------------------

$route['female-login']='login/auth/female_login';
$route['female-signup']='login/auth/female_signup';
$route['validate-female-signup']='login/auth/validate_female_signup';
$route['female-register']='login/auth/female_register';
$route['validate-female-registration']='login/auth/validate_female_registration';

$route['validate-username']='login/auth/validate_username';

// ------------------------------ male routes -------------------------

$route['male-login']='login/auth/male_login';
$route['male-signup']='login/auth/male_signup';
$route['male-register']='login/auth/male_register';
$route['validate-male-registration']='login/auth/validate_male_registration';


$route['user-login']='login/auth/user_login';

$route['forgot-password']='login/auth/forgot_password';
$route['send-mail-forgot-password']='login/auth/send_mail_forgot_password';
$route['resend-mail-forgot-password']='login/auth/resend_mail_forgot_password';
$route['reset-password']='login/auth/reset_password';
$route['change-user-password']='login/auth/change_user_password';


$route['logout-refresh']='login/auth/user_refresh_logout';
$route['logout']='login/auth/user_logout';


$route['upload-profile-photos']='home/home/upload_profile_photos';
$route['save-upload-profile-photos']='home/home/save_upload_profile_photos';

$route['complete-my-profile']='home/home/complete_my_profile';

// =================== Admin =================================


$route['admin'] = 'admin/admin';

$route['admin/login'] = 'login/auth/login';
$route['admin/login-admin'] = 'login/auth/login_admin';
$route['admin/logout'] = 'login/auth/logout';
$route['admin/dashboard'] = 'admin/admin/dashboard';

$route['admin/users'] = 'admin/admin/users';
$route['admin/user-profile/(:any)/(:any)'] = 'admin/admin/user_profile/$1/$2';

$route['admin/users-enable'] = 'admin/admin/users_enabled';
$route['admin/users-status'] = 'admin/admin/users_status';
$route['admin/edit-profile/(:any)/(:any)'] = 'admin/admin/edit_users_profile/$1/$2';
$route['admin/save-profile'] = 'admin/admin/save_users_profile';
$route['admin/users-delete-account'] = 'admin/admin/users_delete_account';
$route['admin/users-approve-account'] = 'admin/admin/users_approve_account';
$route['admin/profile'] = 'login/auth/admin_profile';
$route['admin/update-profile'] = 'login/auth/update_profile';
$route['admin/change-password'] = 'login/auth/admin_change_password';
$route['admin/update-password'] = 'login/auth/admin_update_password';



$route['(:any)'] = 'pages/view/$1'; 



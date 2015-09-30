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
|	http://codeigniter.com/user_guide/general/routing.html
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
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Login/login_page';
$route['login/login-check']='Login/login_check';
$route['login']='Login/login_page';

$route['user-profile/profile-page']='User_profile/profile_page';
$route['user-profile/edit-page']='User_profile/edit_page';
$route['user-profile/show-user']='User_profile/show_user';
$route['user-profile/edit-user']='User_profile/edit_user';
$route['user-profile/view-page']='User_profile/view_page';
$route['user-profile/show-all-user']='User_profile/show_all_user';
$route['user-profile/show-all-users-details']='User_profile/show_all_users_details';

$route['appointment/book-appointment']='Appointment/book_appointment';
$route['appointment/book-my-appointment']='Appointment/book_my_appointment';
$route['appointment/view-appointment']='Appointment/view_appointment';
$route['appointment/show-all-appointment']='Appointment/show_all_appointment';
$route['appointment/view-all-appointment']='Appointment/view_all_appointment';
$route['appointment/show-all-employees-appointment']='Appointment/show_all_employees_appointment';
$route['appointment/appointment-status-update-call']='Appointment/appointment_status_update_call';

$route['registration']='Registration/registration_page';
$route['registration/user-registration']='Registration/user_registration';


$route['employee-registration/registration-page']='Employee_registration/registration_page';
$route['employee-registration/add-employee']='Employee_registration/add_employee';
$route['employee-registration/view-employee']='Employee_registration/view_employee';
$route['employee-registration/show-all-employees']='Employee_registration/show_all_employees';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

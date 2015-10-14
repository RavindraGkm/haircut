<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['home']='Home/index';

$route['about-us']='About/index';
$route['gallery']='Gallery/index';
$route['contact']='Contact/index';
$route['login']='Login/index';

$route['contact/contact_details']='Contact/contact_details';

$route['login/login-page'] = 'Login/login_page';
$route['login/login-check']='Login/login_check';
$route['login/login-with-fb']='Login/login_with_fb';
$route['login']='Login/login_page';

$route['profile/view-profile']='Profile/view_profile';
$route['profile/edit-profile']='Profile/edit_profile';
$route['profile/show-user']='Profile/show_user';
$route['profile/edit-user']='Profile/edit_user';
$route['profile/view-page']='Profile/profile_view';
$route['profile/show-all-user']='Profile/show_all_user';
$route['profile/show-all-users-details']='Profile/show_all_users_details';

$route['appointment/book-appointment']='Appointment/book_appointment';
$route['appointment/book-my-appointment']='Appointment/book_my_appointment';
$route['appointment/view-appointment']='Appointment/view_appointment';
$route['appointment/show-all-appointment']='Appointment/show_all_appointment';
$route['appointment/view-all-appointment']='Appointment/view_all_appointment';
$route['appointment/show-all-employees-appointment']='Appointment/show_all_employees_appointment';
$route['appointment/appointment-status-update-call']='Appointment/appointment_status_update_call';

$route['registration']='Registration/registration_page';
$route['registration/user-registration']='Registration/user_registration';

$route['employee/employee-registration']='Employee/employee_registration';
$route['employee/add-employee']='Employee/add_employee';
$route['employee/view-employee-details']='Employee/view_employee_details';
$route['employee/show-all-employees']='Employee/show_all_employees';
$route['employee/get-employees-name']='Employee/get_employees_name';
$route['employee/employee-status-update-call']='Employee/employee_status_update_call';

$route['hair-style/try-hair-style']='Hair_style/try_hair_style';
$route['hair-style/add-hair-style']='Hair_style/add_hair_style_details';
$route['hair-style/add-hair-action']='Hair_style/add_hair_style_action';
$route['hair-style/upload-user-image']='Hair_style/upload_user_image';

$route['logout/logout-panel']='Logout/logout_panel';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

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

$route['user-profile/profile-page']='User_profile/profile_page';
$route['user-profile/edit-page']='User_profile/edit_page';
$route['user-profile/show-user']='User_profile/show_user';
$route['user-profile/edit-user']='User_profile/edit_user';
$route['user-profile/view-page']='User_profile/view_page';

$route['appointment/book-appointment']='Appointment/book_appointment';
$route['appointment/book-my-appointment']='Appointment/book_my_appointment';
$route['appointment/view-appointment']='Appointment/view_appointment';
$route['appointment/show-all-appointment']='Appointment/show_all_appointment';

$route['registration']='Registration/registration_page';
$route['registration/user-registration']='Registration/user_registration';

$route['items/add-item'] = 'Items/add_item';
$route['items/add-new-item'] = 'Items/add_new_item';

$route['items/show-items'] = 'Items/show_items';
$route['items/show-all-item']='Items/show_all_item';

$route['items/edit-items/(:num)'] = 'Items/edit_items/$1';
$route['items/get-item-by-id']='Items/get_item_by_id';
$route['items/update-item'] = 'Items/update_item';
$route['items/get-all-items-by-name'] = 'Items/get_all_items_by_name';

$route['clients/edit-clients/(:num)'] = 'Clients/edit_clients/$1';
$route['clients/get-client-by-id']='Clients/get_client_by_id';
$route['clients/update-client'] = 'Clients/update_client';
$route['clients/get-all-clients-by-name'] = 'Clients/get_all_clients_by_name';

$route['clients/add-client']='Clients/add_client';
$route['clients/add-new-client'] = 'Clients/add_new_client';

$route['clients/show-clients'] = 'Clients/show_clients';
$route['clients/show-all-client']='Clients/show_all_client';

$route['logins/logins']='Logins/login_page';
$route['logins/login-check']='Logins/login_check';

$route['quotation/add-quotation'] = 'Quotation/add_quotation';
$route['quotation/quotation-details'] = 'Quotation/quotation_details';
$route['quotation/create-quotation'] = 'Quotation/create_quotation';
$route['quotation/print-quotation/(:num)'] = 'Quotation/print_quotation/$1';
$route['quotation/all-quotations'] = 'Quotation/view_all_quotations';
$route['quotation/get-all-quotations'] = 'Quotation/get_all_quotations';

$route['billing/new-bill']='Billing/new_bill';
//$route['billing/print-bill']='Billing/print_bill';
$route['billing/create-bill']='Billing/create_bill';
$route['billing/all-bills'] = 'Billing/view_all_bills';
$route['billing/print-bill/(:num)'] = 'Billing/print_bill/$1';
$route['billing/get-all-bills'] = 'Billing/get_all_bills';

$route['admin/admin-panel']='Admin/admin_panel';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

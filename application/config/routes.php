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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'HomeCtrl';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['home/store']['post'] = 'HomeCtrl/store';
// user route
$route['dashboard'] = 'DashboardCtrl';
$route['home'] = 'HomeCtrl';
$route['pdashboard'] = 'PDashboardCtrl/index';

// Donor
$route['donor']= 'DonorCtrl/index';
$route['donor/add']['get'] = 'DonorCtrl/create';
$route['donor/store']['post'] = 'DonorCtrl/store';
$route['donor/edit/(:num)'] = 'DonorCtrl/update/$1';
$route['donor/delete/(:num)'] = 'DonorCtrl/destroy/$1';


// Patient
$route['patient']= 'PatientCtrl/index';
$route['patient/add']['get'] = 'PatientCtrl/create';
$route['patient/store']['post'] = 'PatientCtrl/store';
$route['patient/edit/(:num)'] = 'PatientCtrl/update/$1';
$route['patient/delete/(:num)'] = 'PatientCtrl/destroy/$1';
$route['patient/request/(:num)/(:num)/(:any)'] = 'PatientCtrl/request/$1/$2/$3';

// Blood Stock
$route['stock']= 'StockCtrl/index';
$route['stock/add']['get'] = 'StockCtrl/create';
$route['stock/store']['post'] = 'StockCtrl/store';
$route['stock/edit/(:num)'] = 'StockCtrl/update/$1';


/* Auth route */
$route['register']['get'] = 'AuthCtrl/register';
$route['register']['post'] = 'AuthCtrl/store';

$route['login']['get'] = 'AuthCtrl/login';
$route['login']['post'] = 'AuthCtrl/login_check';

$route['logout']['get'] = 'AuthCtrl/logout';



/* user profile */
$route['profile']['get'] = 'Profile/index';
$route['profile']['post'] = 'Profile/store';

// $route['change_password']['get'] = 'Profile/cp';
// $route['change_password']['post'] = 'Profile/cp_store';


/* block magic route */
$route['(.+)']="Error_page/page_missing";
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
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller']				= 'dashboard';

// URL Security

// Dashboard
$route['home']								= 'dashboard';
$route['manage']							= 'dashboard/manage';

// Network POP
$route['manage/pop']						= 'network_pop';
$route['manage/pop/tambah']					= 'network_pop/tambah';
$route['manage/pop/detail']					= 'network_pop/detail';
$route['manage/pop/detail/(:any)']			= 'network_pop/detail/$1';
$route['manage/pop/ubah']					= 'network_pop/ubah';
$route['manage/pop/ubah/(:any)']			= 'network_pop/ubah/$1';
$route['manage/pop/hapus']					= 'network_pop/hapus';
$route['manage/pop/hapus/(:any)']			= 'network_pop/hapus/$1';

// Network Backbone
$route['manage/backbone']					= 'network_backbone';
$route['manage/backbone/tambah']			= 'network_backbone/tambah';
$route['manage/backbone/detail']			= 'network_backbone/detail';
$route['manage/backbone/detail/(:any)']		= 'network_backbone/detail/$1';
$route['manage/backbone/ubah']				= 'network_backbone/ubah';
$route['manage/backbone/ubah/(:any)']		= 'network_backbone/ubah/$1';
$route['manage/backbone/hapus']				= 'network_backbone/hapus';
$route['manage/backbone/hapus/(:any)']		= 'network_backbone/hapus/$1';

// Network Vlan
$route['manage/vlan']						= 'network_vlan';
$route['manage/vlan/tambah']				= 'network_vlan/tambah';
$route['manage/vlan/detail/(:any)']			= 'network_vlan/detail/$1';
$route['manage/vlan/ubah/(:any)']			= 'network_vlan/ubah/$1';
$route['manage/vlan/hapus/(:any)']			= 'network_vlan/hapus/$1';

// Network Switch
$route['manage/switch']						= 'network_switch';
$route['manage/switch/tambah']				= 'network_switch/tambah';
$route['manage/switch/detail/(:any)']		= 'network_switch/detail/$1';
$route['manage/switch/ubah/(:any)']			= 'network_switch/ubah/$1';
$route['manage/switch/hapus/(:any)']		= 'network_switch/hapus/$1';

// Network Router
$route['manage/router']						= 'network_router';
$route['manage/router/tambah']				= 'network_router/tambah';
$route['manage/router/detail/(:any)']		= 'network_router/detail/$1';
$route['manage/router/ubah/(:any)']			= 'network_router/ubah/$1';
$route['manage/router/hapus/(:any)']		= 'network_router/hapus/$1';

// System_Log
$route['systemlog']							= 'system_log';

$route['404_override'] 						= '';


$route['translate_uri_dashes'] 				= FALSE;

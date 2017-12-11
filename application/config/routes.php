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
$route['manage/pop']						= 'Network_POP';
$route['manage/pop/tambah']					= 'Network_POP/tambah';
$route['manage/pop/detail']					= 'Network_POP/detail';
$route['manage/pop/detail/(:any)']			= 'Network_POP/detail/$1';
$route['manage/pop/ubah']					= 'Network_POP/ubah';
$route['manage/pop/ubah/(:any)']			= 'Network_POP/ubah/$1';
$route['manage/pop/hapus']					= 'Network_POP/hapus';
$route['manage/pop/hapus/(:any)']			= 'Network_POP/hapus/$1';

// Network Backbone
$route['manage/backbone']					= 'Network_Backbone';
$route['manage/backbone/ping']				= 'Network_Backbone/pingCheck';
$route['manage/backbone/ping/(:any)']		= 'Network_Backbone/pingCheck/$1';
$route['manage/backbone/tambah']			= 'Network_Backbone/tambah';
$route['manage/backbone/detail']			= 'Network_Backbone/detail';
$route['manage/backbone/detail/(:any)']		= 'Network_Backbone/detail/$1';
$route['manage/backbone/ubah']				= 'Network_Backbone/ubah';
$route['manage/backbone/ubah/(:any)']		= 'Network_Backbone/ubah/$1';
$route['manage/backbone/hapus']				= 'Network_Backbone/hapus';
$route['manage/backbone/hapus/(:any)']		= 'Network_Backbone/hapus/$1';

// Network Vlan
$route['manage/vlan']						= 'Network_Vlan';
$route['manage/vlan/tambah']				= 'Network_Vlan/tambah';
$route['manage/vlan/detail/(:any)']			= 'Network_Vlan/detail/$1';
$route['manage/vlan/ubah/(:any)']			= 'Network_Vlan/ubah/$1';
$route['manage/vlan/hapus/(:any)']			= 'Network_Vlan/hapus/$1';

// Network Switch
$route['manage/switch']						= 'Network_Switch';
$route['manage/switch/tambah']				= 'Network_Switch/tambah';
$route['manage/switch/detail/(:any)']		= 'Network_Switch/detail/$1';
$route['manage/switch/ubah/(:any)']			= 'Network_Switch/ubah/$1';
$route['manage/switch/hapus/(:any)']		= 'Network_Switch/hapus/$1';

// Network Router
$route['manage/router']						= 'Network_Router';
$route['manage/router/tambah']				= 'Network_Router/tambah';
$route['manage/router/detail/(:any)']		= 'Network_Router/detail/$1';
$route['manage/router/ubah/(:any)']			= 'Network_Router/ubah/$1';
$route['manage/router/hapus/(:any)']		= 'Network_Router/hapus/$1';

// System_Log
$route['systemlog']							= 'System_Log';

$route['404_override'] 						= '';


$route['translate_uri_dashes'] 				= FALSE;

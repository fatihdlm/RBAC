<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['posts/(:any)'] = 'frontend/posts/view/$1';
$route['posts'] = 'frontend/posts/index';
$route['admin/pages/(:any)'] = 'backend/dashboard/pages/$1';
$route['migrate'] = 'migrate/index';
$route['default_controller'] = 'frontend/pages/view/$1';
$route['(:any)'] = 'frontend/pages/view/$1';
$route['404_override'] = 'denemem';
$route['translate_uri_dashes'] = FALSE;


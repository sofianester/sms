<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'authentication';
$route['pages/(:any)'] = 'pages/view/$1';
$route['dashboard'] = 'pages/view';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

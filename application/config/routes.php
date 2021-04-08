<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['stat_vaccin'] = 'stat_vaccin';
$route['stat_covid'] = 'stat_covid';
$route['inscription'] = 'inscription';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'web';
$route['about-us'] = 'web/about';
$route['academics'] = 'web/academics';
$route['faculties'] = 'web/faculties';
$route['industry-exposure'] = 'web/industryExposure';
$route['gallery'] = 'web/gallery';
$route['gallery/(:num)'] = 'web/gallery/$1';
$route['contact-us'] = 'web/contact';
$route['form-success'] = 'web/formsuccess';
$route['principal-message'] = 'web/principal';
$route['chairman-message'] = 'web/chairman';
$route['bachelor-in-pharmacy'] = 'web/bpharm';
$route['diploma-in-pharmacy'] = 'web/dpharm';
$route['notice-news'] = 'web/notice';
$route['academic-syllabus'] = 'web/syllabus';
$route['academic-calendar'] = 'web/academicCalendar';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

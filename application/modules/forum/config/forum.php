<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Forum config
|--------------------------------------------------------------------------
|
| This determines the basic forum config
|
*/
$config['site_title'] = 'mon forum';
$config['site_slogan'] = 'on cause';
$config['site_email'] = 'gbobard@gmail.com';

/*
|--------------------------------------------------------------------------
| codeigniter forum2  Version
|--------------------------------------------------------------------------
|
*/
$config['version'] = array (
  // Manual numbering
  "major" => '18',
  "minor" => '04',
  "patch" => '0',
  
  "build" => '2f', // build date 2019/05/12  20:00
);


/*
|--------------------------------------------------------------------------
| Image path and url for language flags
|--------------------------------------------------------------------------
*/
$config['forum2_img_path'] = 'assets/images/';  // relative to BASEPATH
$config['forum2_img_url'] = 'assets/images/';  // relative to base_url

/*
|--------------------------------------------------------------------------
| show or hidden session value into  footer view
|--------------------------------------------------------------------------
|
*/
$config['show_session_footer'] = true;

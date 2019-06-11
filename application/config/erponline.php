<?php
/**
 * Created by BYOOS.
 * ERPonline – A Free E.R.P powered by CodeIgniter
 *  This free software comes from the fusion of several sources including NodCMS_v2, InvoicePlane, Stock_master_v2 and bian others in the future....
 * 	Good use
 * User: Gabriel
 * Date: 2016/06/10
 * Time: 10:00 PM
 * Project: ERPonline
 * Website: http://www.byoos.net
 * modifications  2019/04/23  update PHP7.3  codeignter 3.1.10  BCRYPT and sessions helpers, test on DEBAIN 9.x
 * BYOOS solutions ltd.  France - Cameroun  gbobard@gmail.com  http://byoos.net   http://byoos.eu
 */
$config['NodCMS_general_templateFolderName'] = 'nodcms_general';
$config['NodCMS_general_admin_templateFolderName'] = 'nodcms_general_admin';
$config['max_upload_size'] = 20000; // KG
$config['backend_models'] = array('NodCMS_general_admin_model', 'NodCMS_general_model');
$config['backend_helpers'] = array('admin_page_type','nodcms_form');
$config['frontend_models'] = array('NodCMS_general_model');
$config['frontend_helpers'] = array();


/*
|--------------------------------------------------------------------------
| codeigniter 3.1.10  nodCMS  Version  1904b2a
|--------------------------------------------------------------------------
|
*/
$config['version'] = array (
  // Manual numbering
  "major" => '19',
  "minor" => '05',
  "patch" => '0',
  
  "build" => '2j', // build "j" date 2019/06/10  12:00  gbobard@gmail.com
);

/*
|--------------------------------------------------------------------------
| show or hidden session value into  footer view
|--------------------------------------------------------------------------
|
*/
$config['show_session_footer'] = false;

$config['enable_health_activity'] = false;

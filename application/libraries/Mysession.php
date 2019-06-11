<?php
/**
 * Created by Geany
 * User: gbobard@gmail.com
 * Date: 2019/04/24
 * Time: 10:00 PM
 * Project: NodCMS
 * Website: http://www.nodcms.com
 */

class Mysession {

    function __construct() {
        log_message('debug', "Mysession Class Initialized - BYOOS_info");
    }
		
	/**
	 * helpers session function.
	 * 
	 * @access public
	 * @param string code session
	 * @return array on success, or bool false on failure
	 * added BYOOS 2019
	 */
	function userdata($mycle='user')
	{
		$CI =& get_instance();
		$CI =& get_instance();
		$mysession = array();
		if(!null ==$CI->session->has_userdata($mycle) ){
			$mysession=$CI->session->userdata($mycle);
		}
		return $mysession;
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Xyz extends MY_Controller {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct('frontend');
		$this->load->library(array('counter'));
		$this->lang->load('mx');
	}

	public function index() {
		var_dump('toto a atterrit sur xyz');
		$this->load->view('mymodule/xyz_message');
		$this->load->view('footer');
	}
	
	public function apropos() {

	}
	
	/**
	 * switch current language.
	 * 
	 * @access public
	 * @param string $str
	 * @return bool
	 */
    public function switch_language()
    {

		$language = $this->session->userdata('site_lang');

		switch ($language)
		{
			case 'english';
				$language = 'french';
			break;			
			case 'french';
				$language = 'english';
			break;			
			default;
				$language = 'english';
			break;			
		}
 
        $this->session->set_userdata('site_lang', $language);
        $this->config->set_item('language', $language);

        redirect(base_url());
    }
}

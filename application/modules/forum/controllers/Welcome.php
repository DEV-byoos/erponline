<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();

		$this->load->helper('download');		

	}

	public function index()
	{
		// load views and send data
		$this->load->view('header');
		$this->load->view('welcome/Welcome_message');
		$this->load->view('footer');


	}
	
	public function demo($appli = '')
	{
		/* script routeur en fonction du nom de domaine BYOOS sarl   gbobard@gmail.com */
			
		$domain = $_SERVER['HTTP_HOST'];

		$url = 'http://'.$domain.'/';
		$slug = '';

		// Uso do parâmetro count está disponível no PHP 5.0.0
		$_domain = str_replace(".", "_", $domain, $count);
		switch ( $appli ){
			case 'medlines':
				$slug = 'medlinesplusv1804b554/';
				break;
			case 'fladsclassifieds2':
				$slug = 'fladsclassifieds2_v1804b2a';
				break;
			case 'forum2':
				$slug = 'boottrap2/';
				break; 
			case 'www_leboncamer_com':
				$slug = 'fladsclassifieds2_v1804b2a/';
				break; 
			case 'localhost':
				$url = 'localhost';
				$slug = '';
				break;
			case 'gocart233a':
				$slug = 'gocart233a/';
				break;
			case 'codeigniter_mx2a':
				$slug = 'codeigniter_mx2a/';
				break;
			case 'www_byoos_fr':
				$slug = 'ERPonline_demo_2019/';
				break;
			case 'mediboard_xyz':
				$slug = 'nodcmsv1904b2b/';
				break; 
			default:
				$url = 'http://byoos.net/';
				$slug = '';
				break;
		}
		//var_dump( $url,$slug, $domain, $appli);die;//BYOOS_tag

		header('Status: 301 Moved Permanently', false, 301); 
		header('Location: '.$url.$slug); 

		exit();
		
	}
	
	public function download_medlines()
	{

		$filename = "public/download/download_medlines.txt";
		$compteur = file_exists($filename) ? file_get_contents($filename) + 1 : 1;
		file_put_contents($filename, $compteur, LOCK_EX);
		force_download('public/download/mediboard20180211b581.zip', NULL);
		redirect('/');
	}
	
	public function download_forum2()
	{

		$filename = "public/download/download_forum2.txt";
		$compteur = file_exists($filename) ? file_get_contents($filename) + 1 : 1;
		file_put_contents($filename, $compteur, LOCK_EX);
		force_download('public/download/Codeigniter-Forum2_v1804b2a.zip', NULL);
		redirect('/');
	}

	public function download_fladsclassifieds2()
	{

		$filename = "public/download/download_fladsclassifieds2.txt";
		$compteur = file_exists($filename) ? file_get_contents($filename) + 1 : 1;
		file_put_contents($filename, $compteur, LOCK_EX);
		force_download('public/download/fladsclassifieds2_v1804b2a.zip', NULL);
		redirect('/');
	}
	
	public function download_gocart233a()
	{

		$filename = "public/download/download_gocart233a.txt";
		$compteur = file_exists($filename) ? file_get_contents($filename) + 1 : 1;
		file_put_contents($filename, $compteur, LOCK_EX);
		force_download('public/download/gocart_v1804b233a_community.zip', NULL);
		redirect('/');
	}
	
	public function download_codeigniter_mx2a()
	{

		$filename = "public/download/download_codeigniter_mx2a.txt";
		$compteur = file_exists($filename) ? file_get_contents($filename) + 1 : 1;
		file_put_contents($filename, $compteur, LOCK_EX);
		force_download('public/download/CodeIgniter2018_mx2a.zip', NULL);
		redirect('/');
	}
}

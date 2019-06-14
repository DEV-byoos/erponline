<?php
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 9/16/2015
 * Time: 1:03 AM
 * Project: NodCMS
 * Website: http://www.nodcms.com
 */

defined('BASEPATH') OR exit('No direct script access allowed');
class Nodcms_admin_sign extends MY_Controller {
    function __construct()
    {
        parent::__construct();

        $this->load->model("NodCMS_general_admin_model");
        $this->load->model("NodCMS_admin_sign_model");
        $banner = @reset($this->NodCMS_general_admin_model->get_website_info());
        $_SESSION['language'] = $language = $this->NodCMS_general_admin_model->get_language_detail($banner["language_id"]);
        $this->lang->load($language["code"], $language["language_name"]);
    }

    function index()
    {

        if (null !==$this->session->userdata('logged_in') && $this->session->userdata('user_id')==1)//'logged_in_status'
        {
            redirect('/admin/');
        }
        else
        {
            $this->load->view('login');
        }
    }
	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
	*/
	public function login()
	{

		$this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            // true case
           	$email_exists = $this->NodCMS_admin_sign_model->check_email($this->input->post('email'));

           	if($email_exists == TRUE) {
           		$login = $this->NodCMS_admin_sign_model->resolve_email_login($this->input->post('email'), $this->input->post('password'));
           		if($login) {

           			$logged_in_sess = array(
           				'user_id' 	=> $login['user_id'],
           				'group' 	=> $login['group_id'],
				        'username'  => $login['username'],
				        'email'     => $login['email'],
				        'logged_in' => TRUE
					);

					$this->session->set_userdata($logged_in_sess);
           			redirect('/admin/', 'refresh');
           		}
           		else {
           			$this->data['errors'] = 'Incorrect username/password combination';
           			$this->load->view('login', $this->data);
           		}
           	}
           	else {
           		$this->data['errors'] = 'Email does not exists';

           		$this->load->view('login', $this->data);
           	}	
        }
        else {
            // false case
            $this->load->view('login');
        }	
		
	}
	/*
		clears the session and redirects to login page
	*/
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin', 'refresh');
	}
	
	// deprecated for ERPonline
    function __login()
    {
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->input->post('password');
        $result= $this->NodCMS_admin_sign_model->resolve_user_login($username, $password);
        if($result){
			$tam=$result->result_array(); // modif BYOOS_modify
		}
        if($result && ($tam[0]['group_id']==1 || $tam[0]['group_id']==2))
        {
            foreach ($result->result_array() as $row)
            {
                $data = array(
                    'fullname'  => $row['firstname']." ".$row['lastname'],
                    'username'  => $row['username'],
                    'user_id' => $row['user_id'],
                    'group'   => $row['group_id'],
                    'avatar'   => $row['avatar'],
                    'email'   => $row['email'],
                    'logged_in_status'   => true,

                );
            }
            $this->session->set_userdata($data);
            $this->session->set_userdata('Session_Admin', $data['user_id']);
            redirect(base_url().'admin/');

        }
        else
        {
            $this->session->set_flashdata('message', _l('Oopsie, Username or password is incorrect',$this));
            redirect(base_url().'admin-sign');
        }
    }
// deprecated for ERPonline
    function __logout()
    {
        //$this->session->sess_destroy();
        $this->session->unset_userdata('logged_in_status');
        redirect(base_url().'admin-sign');
    }
}

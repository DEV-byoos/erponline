<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Admin class.
 * 
 * @extends CI_Controller
 */
class Admin extends MY_Controller {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();

		$this->load->model('forum_model');
		$this->load->model('user_model');
		$this->load->model('admin_model');
		
		//$this->output->enable_profiler(TRUE);
		
	}
	
	public function index() {
		
		// if the user is not admin, redirect to base url
		if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
			redirect(base_url());
			return;
		}
		
		// create the data object
		$data = new stdClass();
		
		$this->load->view('header');
		$this->load->view('admin/home/index', $data);
		$this->load->view('footer');
		
	}
	
	public function users() {
		
		// if the user is not admin, redirect to base url
		if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
			redirect(base_url());
			return;
		}
		
		// create the data object
		$data = new stdClass();
		
		$data->users = $this->user_model->get_users();
		
		$this->load->view('header');
		$this->load->view('admin/users/users', $data);
		$this->load->view('footer');
		
	}
	
	/**
	 * edit_user function.
	 * 
	 * @access public
	 * @param mixed $username (default: false)
	 * @return void
	 */
	public function edit_user($username = false) {
		
		// if the user is not admin, redirect to base url
		if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
			redirect(base_url());
			return;
		}
		
		if ($username === false) {
			
			redirect(base_url('admin/users'));
			return;
			
		}
		
		// create the data object
		$data = new stdClass();
		
		// create the user object
		$user_id = $this->user_model->get_user_id_from_username($username);
		$user    = $this->user_model->get_user($user_id);
		
		// set options
		if ($user->is_admin === '1') {
			$options  = '<option value="administrator" selected>'.lang('administrator').'</option>';
			$options .= '<option value="moderator">'.lang('moderator').'</option>';
			$options .= '<option value="user">'.lang('users').'</option>';
		} elseif ($user->is_moderator === '1') {
			$options  = '<option value="administrator">'.lang('administrator').'</option>';
			$options .= '<option value="moderator" selected>'.lang('moderator').'</option>';
			$options .= '<option value="user">'.lang('users').'</option>';
		} else {
			$options  = '<option value="administrator">'.lang('administrator').'</option>';
			$options .= '<option value="moderator">'.lang('moderator').'</option>';
			$options .= '<option value="user" selected>'.lang('users').'</option>';
		}
		
		// assign values to the data object
		$data->user    = $user;
		$data->options = $options;
		if ($user->updated_by !== null) {
			$data->user->updated_by = $this->user_model->get_username_from_user_id($user->updated_by);
		}
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// set form validations rules
		$this->form_validation->set_rules('user_rights', 'User Rights', 'required|in_list[administrator,moderator,user]', array('in_list' => lang('dont_hack_form')));
		
		if ($this->form_validation->run() == false) {
			
			$this->load->view('header');
			$this->load->view('admin/users/edit_user', $data);
			$this->load->view('footer');
			
		} else {
			
			// assign rights to variables
			if ($this->input->post('user_rights') === 'administrator') {
				$is_admin     = '1';
				$is_moderator = '0';
			} elseif ($this->input->post('user_rights') === 'moderator') {
				$is_admin     = '0';
				$is_moderator = '1';
			} else {
				$is_admin     = '0';
				$is_moderator = '0';
			}
			
			if ($this->admin_model->update_user_rights($user_id, $is_admin, $is_moderator)) {
				// update user success
				$data->success = $user->username . lang('successfully_updated');
			} else {
				// error while updating user rights, this should never happen
				$data->error = lang('error_to_update');
			}
			
			$this->load->view('header');
			$this->load->view('admin/users/edit_user', $data);
			$this->load->view('footer');
			
		}
		
	}

	public function listform($title = false){

		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data = new stdClass();
		
		// create the user object
		$forum_id = $this->forum_model->get_forum($title);
		$topics   = $this->forum_model->get_topics($title);
		$user = $this->user_model->get_username_from_user_id($forum_id->user_id);
		$posts = $this->forum_model->get_poost();
		$users = $this->user_model->get_users();
		
		//$data->user = $user;
		$data->user_id = $forum_id;
		$data->posts = $posts;
		$data->topics = $topics;
		$data->user = $user;
		$data->users = $users;


		$this->load->view('header');
		$this->load->view('admin/forums_and_topics/liste_forum', $data);
		$this->load->view('footer');
	}

	public function delete_user($username = false){

		// if the user is not admin, redirect to base url
		if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
			redirect(base_url());
			return;
		}
		
		if ($username === false) {
			
			redirect(base_url('admin/users'));
			return;
			
		}
		
		// create the data object
		$data = new stdClass();
		
		// create the user object
		$user_id = $this->user_model->get_user_id_from_username($username);
		$user    = $this->user_model->get_user($user_id);
    
    	$this->user_model->did_delete_row($user_id);

		$data->users = $this->user_model->get_users();
    	
    	$this->load->view('header');
		$this->load->view('admin/users/users', $data);
		$this->load->view('footer');
    	

	}

	public function forums_and_topics() {
		
		// if the user is not admin, redirect to base url
		if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
			redirect(base_url());
			return;
		}
		
		// create the data object
		$data = new stdClass();
		
		$forums = $this->forum_model->get_forums();
		
		foreach ($forums as $forum) {
				
				//$forum->permalink    = base_url($forum->slug);
				$forum->topics       = $this->forum_model->get_forum_topics($forum->id);
				$forum->count_topics = count($forum->topics);
				$forum->count_posts  = $this->forum_model->count_forum_posts($forum->id);
				
				if ($forum->count_topics > 0) {
					
					// $forum has topics
					$forum->latest_topic = $this->forum_model->get_forum_latest_topic($forum->id);			//$forum->latest_topic->permalink = $forum->slug . '/' . $forum->latest_topic->slug;
					$forum->latest_topic->author    = $this->user_model->get_username_from_user_id($forum->latest_topic->user_id);
					
				} else {
					
					// $forum doesn't have topics yet
					$forum->latest_topic = new stdClass();
					$forum->latest_topic->permalink = null;
					$forum->latest_topic->title = null;
					$forum->latest_topic->author = null;
					$forum->latest_topic->created_at = null;
					
				}
	
			}

		$data->forums = $forums;
		//$data->topics = $this->forum_model->get_top();
		
		
		$this->load->view('header');
		$this->load->view('admin/forums_and_topics/forums_and_topics', $data);
		$this->load->view('footer');
		
	}
	
	public function options() {
		
		// if the user is not admin, redirect to base url
		if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
			redirect(base_url());
			return;
		}
		
		// create the data object
		$data = new stdClass();
		
		$this->load->view('header');
		$this->load->view('admin/options/options', $data);
		$this->load->view('footer');
		
	}


	
	public function emails() {
		
		// if the user is not admin, redirect to base url
		if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
			redirect(base_url());
			return;
		}
		
		// create the data object
		$data = new stdClass();

		$data->emails = $this->user_model->get_users();
		
		$this->load->view('header');
		$this->load->view('admin/emails/emails', $data);
		$this->load->view('footer');
		
	}

	// added BYOOS solutions
	public function delete_topic($topic_id = false){

		// if the user is not admin, redirect to base url
		if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
			redirect(base_url());
			return;
		}
		
		if ($topic_id === false) {
			
			redirect(base_url('admin/forums_and_topics'));
			return;			
		}
		
		// create the data object
		$data = new stdClass();

		$del = $this->forum_model->get_delete_topic($topic_id);

		redirect(base_url('/admin/forums_and_topics/'));

	}


	public function block_post($topid = false){

		// if the user is not admin, redirect to base url
		if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
			redirect(base_url());
			return;
		}
		
		if ($topid === false) {
			redirect(base_url('/admin/forums_and_topics/'));
		}
		
		// create the data object
		$data = new stdClass();
		
		$block = $this->forum_model->get_block_post($topid);
		
		redirect('/admin/forums_and_topics/');

	}

	public function deblock_post($topid = false){

		// if the user is not admin, redirect to base url
		if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
			redirect(base_url());
			return;
		}
		
		if ($topid === false) {
			
			redirect(base_url('/admin/forums_and_topics/'));

		}
		
		// create the data object
		$data = new stdClass();
		
		$block = $this->forum_model->get_deblock_post($topid);

		redirect(base_url('/admin/forums_and_topics/'));

	}
}

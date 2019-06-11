<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class User_model extends CI_Model {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		
	}
	
	/**
	 * get_user_id_from_username function.
	 * 
	 * @access public
	 * @param string $username
	 * @return int the user id
	 */
	public function get_user_id_from_username($username) {
		
		$this->db->select('id');
		$this->db->from('users');
		$this->db->where('username', $username);

		return $this->db->get()->row('id');
		
	}
	
	/**
	 * get_username_from_user_id function.
	 * 
	 * @access public
	 * @param int $user_id
	 * @return string
	 */
	public function get_username_from_user_id($user_id) {
		
		$this->db->select('username');
		$this->db->from('users');
		$this->db->where('user_id', $user_id);

		return $this->db->get()->row('username');
		
	}

	 public function did_delete_row($id){
	 
	  $this->db->where('id', $id);
	  $this->db->delete('users');
	  return;
	
	}

	
	/**
	 * get_user function.
	 * 
	 * @access public
	 * @param int $user_id
	 * @return object the user object
	 */
	public function get_user($user_id) {
		
		$this->db->from('users');
		$this->db->where('user_idid', $user_id);
		return $this->db->get()->row();
		
	}
	
	/**
	 * get_users function.
	 * 
	 * @access public
	 * @return object
	 */
	public function get_users() {
		
		$this->db->from('users');
		return $this->db->get()->result();
		
	}
	
	/**
	 * count_user_posts function.
	 * 
	 * @access public
	 * @param int $user_id
	 * @return int
	 */
	public function count_user_posts($user_id) {
		
		$this->db->select('user_idid');
		$this->db->from('fo_posts');
		$this->db->where('user_id', $user_id);
		return $this->db->get()->num_rows();
		
	}
	
	/**
	 * count_user_topics function.
	 * 
	 * @access public
	 * @param int $user_id
	 * @return int
	 */
	public function count_user_topics($user_id) {
		
		$this->db->select('user_idid');
		$this->db->from('fo_topics');
		$this->db->where('user_id', $user_id);
		return $this->db->get()->num_rows();
		
	}
	
	/**
	 * get_user_last_post function.
	 * 
	 * @access public
	 * @param int $user_id
	 * @return mixed object or false if no post
	 */
	public function get_user_last_post($user_id) {
		
		$this->db->from('fo_posts');
		$this->db->where('user_id', $user_id);
		$this->db->order_by('created_at', 'DESC');
		$this->db->limit(1);
		return $this->db->get()->row();
		
	}
	
	/**
	 * get_user_last_topic function.
	 * 
	 * @access public
	 * @param int $user_id
	 * @return object or false if no topic
	 */
	public function get_user_last_topic($user_id) {
		
		$this->db->from('fo_topics');
		$this->db->where('user_id', $user_id);
		$this->db->order_by('created_at', 'DESC');
		$this->db->limit(1);
		return $this->db->get()->row();
		
	}
	
	/**
	 * confirm_account function.
	 * 
	 * @access public
	 * @param string $username
	 * @param string $hash
	 * @return bool
	 */
	public function confirm_account($username, $hash) {
		
		// find the email for the given user
		$email = $this->db->select('email')
			->from('users')
			->where('username', $username)
			->get()
			->row('email');
		
		// find the registration date for the given user
		$registration_date = $this->db->select('created_at')
			->from('users')
			->where('username', $username)
			->get()
			->row('created_at');

		// if the user from the url exists
		if ($email && $registration_date) {
			
			if (sha1($email . $registration_date) === $hash) {
				
				// values from the url are good, we can validate the account
				$data = array('is_confirmed' => '1');
				$this->db->where('username', $username);
				return $this->db->update('users', $data);
				
			}
			return false;
			
		}
		return false;
		
	}
	
	/**
	 * update_user function.
	 * 
	 * @access public
	 * @param int $user_id
	 * @param array $update_data
	 * @return bool
	 */
	public function update_user($user_id, $update_data) {
		
		// if user wants to update its password, hash the given password
		if (array_key_exists('password', $update_data)) {
			$update_data['password'] = $this->hash_password($update_data['password']);
		}
		
		if (!empty($update_data)) {
			
			$this->db->where('id', $user_id);
			return $this->db->update('users', $update_data);
			
		}
		return false;
		
	}
}

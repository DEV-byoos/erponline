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
class NodCMS_admin_sign_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

	/* 
		This function checks if the email exists in the database
	*/
	public function check_email($email) 
	{
		if($email) {
			$sql = 'SELECT * FROM users WHERE email = ?';
			$query = $this->db->query($sql, array($email));
			return ($query) ? $query->num_rows() : false;
		}
		return false;
	}

	/* 
		This function checks if the email and password matches with the database
	*/
	public function resolve_email_login($email, $password) {
		if($email && $password) {
			$sql = "SELECT * FROM users WHERE email = ?";
			$query = $this->db->query($sql, array($email));

			if($query->num_rows() == 1) {
				$result = $query->row_array();
				$hash_password = password_verify($password, $result['password']);
				if($hash_password === true) {
					return $result;	
				}
				else {
					return false;
				}
			}
			else {
				return false;
			}
		}
	}
	
    function check_login($username,$pass)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $pass);
        $query = $this->db->get('users');
        return $query;
    }
	
	/**
	 * resolve_user_login function.
	 * 
	 * @access public
	 * @param string $username
	 * @param string $password
	 * @return bool true on success, false on failure
	 */
	public function resolve_user_login($username, $password) {

		$this->db->select('password');
		$this->db->from('users');
		$this->db->where('username', $username);
		$hash = $this->db->get()->row('password');
		if ( $this->verify_password_hash($password, $hash) ){//Modif BYOOS_modify 
			$this->db->where('username', $username);
			$query = $this->db->get('users');
			return $query;
		}
		//return  0;
	}
	
	/**
	 * hash_password function.
	 * 
	 * @access private
	 * @param string $password
	 * @return string|bool could be a string on success, or bool false on failure
	 */
	private function hash_password($password) {
		
		return password_hash($password, PASSWORD_BCRYPT);
		
	}
	
	/**
	 * verify_password_hash function.
	 * 
	 * @access private
	 * @param string $password
	 * @param string $hash
	 * @return bool
	 */
	private function verify_password_hash($password, $hash) {
		
		return password_verify($password, $hash);
		
	}
}

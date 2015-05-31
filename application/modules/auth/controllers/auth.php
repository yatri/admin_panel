<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->load->helper('url');

		// Load MongoDB library instead of native db driver if required
		$this->config->item('use_mongodb', 'ion_auth') ?
		$this->load->library('mongo_db') :

		$this->lang->load('auth');
		$this->load->helper('language');
		
	}	
	
	/**********************************************************
		function to check whether user is logged in or not
	**********************************************************/
	public function _checkLogin(){
		if (!$this->ion_auth->logged_in()){
			return FALSE;
		}
		return TRUE;
	}
	
	/**********************************************************
		function to check whether user is admin or not
	**********************************************************/
	public function _isAdmin($id = '') {
		return ($id != '') ? $this->ion_auth->is_admin($id) : $this->ion_auth->is_admin();
	}
	
	/**********************************************************
		function to login user/admin
	**********************************************************/
	public function _login($username, $password, $rememberme) {
		$returnArray = array(
					'status' => false,
					'msg' => ''
					);
		
		if($username and $password) {
			//echo $username. ' ' .$password;exit;
			if($this->ion_auth->login($username, $password, $rememberme)) {
				// login is successful
				$returnArray['status'] = true;
				$returnArray['msg'] = 'Logged in successfully!!!';
			} else {
				// login failed
				$returnArray['status'] = false;
				$returnArray['msg'] = $this->ion_auth->errors();
			}
		} else {
			$returnArray['status'] = false;
			$returnArray['msg'] = 'Credential required!';
		}
		
		return $returnArray;
		//return array('asdjf'=>'hello', 'asjdhf'=>'hi');
	}
	
	/**********************************************************
		function to logout the admin
	**********************************************************/
	public function _adminLogout() {
		return $this->ion_auth->logout();
	}
	
	/**********************************************************
		function to get user info
	**********************************************************/
	public function _getUser($id = NULL) {
		if($id == NULL) {
			return $this->ion_auth->user()->row();
		} else {
			//$this->db->where('id', $id);
			return $this->ion_auth->user($id)->row();
		}
	}
	
	/**********************************************************
		function to unlock admin panel
	**********************************************************/
	public function _unlockAdmin() {
		$this->session->unset_userdata('info_admin_locked');
		$this->session->unset_userdata('info_admin_locked_prev_url');
	}
	
	
	public function change() {
		$id = 1;
		$data = array(
					'password' => 'admin12345',
					 );
		$this->ion_auth->update($id, $data);
	}
	public function unlock() {
		$this->session->unset_userdata('info_admin_locked');
	}
	public function getuser() {
		echo '<pre>';
		print_r($this->ion_auth->user()->row());
	}
}

<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
 *	Authentication Controller
 */
class Auth extends CI_Controller {

	/*
	 *	variable to hold data for view
	 */
	private static $viewData = array();

	/*
	 *	Constructor
	 */
	public function __construct() {
		parent::__construct();

		// load admin model
		//$this->load->model('admin_model');
		$this->load->helper(array('language'));

		$this->lang->load('auth');
	}

	/*
	 *	Index Page
	 */
	public function index() {
		if (!$this->ion_auth->logged_in()) {
			//redirect them to the login page
			redirect('login', 'refresh');
		} else if (!$this->ion_auth->is_admin()) {
			//redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		} else {
			redirect('dashboard', 'refresh');
		}
	}

	/*
	 *	Login Page
	 */
	public function login() {
		// check for logged in or not
		if ($this->ion_auth->logged_in()) {
			//redirect them to the login page
			redirect('dashboard', 'refresh');
		} 

		//validate form input
		$this->form_validation->set_rules('identity', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if (!$this->form_validation->run()) {
			// display the form
			self::$viewData['page_info'] = array(
											'title' => 'Login || Admin Panel',
											'meta_keywords' => 'admin panel',
											'meta_description' => 'Nepal\'s One and Only Url Shortner.'
										);

			$this->load->view('templates/admin/index_login',self::$viewData);
		} else {
			// check for "remember me"
			$remember = (bool) $this->input->post('rememberme');
			$identity = $this->input->post('identity');
			$password = $this->input->post('password');

			// check to see if the user is logging in
			if ($this->ion_auth->login($identity, $password, $remember)) {
				// login is successful
				// redirect them back to the dashboard
				$this->session->set_flashdata('success_msg', $this->ion_auth->messages());
				redirect('dashboard', 'refresh');
			} else {
				// login was un-successful
				// redirect them back to the login page
				$this->session->set_flashdata('error_msg', $this->ion_auth->errors());
				redirect('login', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
	}

	/*
	 *	Log the user out
	 */
	public function logout() {
		// check for logged in or not
		if (!$this->ion_auth->logged_in()) {
			//redirect them to the login page
			redirect('login', 'refresh');
		}

		//log the user out
		$logout = $this->ion_auth->logout();

		//redirect them to the login page
		$this->session->set_flashdata('success_msg', $this->ion_auth->messages());
		redirect('login', 'refresh');
	}

} // end of Authentication Class Controller
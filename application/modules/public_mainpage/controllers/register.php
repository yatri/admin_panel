<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 *	Store data for view
	**/
	var $viewData = array();

	function __construct() {
		parent::__construct();		
	}
        
	public function index() {
		$this->viewData['site_title'] = 'Registration || Android App/Game Challenge - Khudkila';
		$this->viewData['module_view'] = 'register';

		$this->load->view('templates/public/index_page', $this->viewData);
	}
}
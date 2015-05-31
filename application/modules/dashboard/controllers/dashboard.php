<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 *	Store data for view
	**/
	var $viewData = array();

	function __construct() {
		parent::__construct();		
	}
        
	public function index() {
		$this->load->view('templates/admin/index_page');
	}
}
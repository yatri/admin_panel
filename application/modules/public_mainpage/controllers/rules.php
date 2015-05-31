<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rules extends CI_Controller {

	/**
	 *	Store data for view
	**/
	var $viewData = array();

	function __construct() {
		parent::__construct();		
	}
        
	public function index() {
		$this->viewData['site_title'] = 'Rules and Criteria || Android App/Game Challenge - Khudkila';
		$this->viewData['module_view'] = 'rules';

		$this->load->view('templates/public/index_page', $this->viewData);
	}
}
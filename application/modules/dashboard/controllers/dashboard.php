<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
 *	Dashboard Controller
 */
class Dashboard extends CI_Controller {

	/*
	 *	variable to hold data for view
	 */
	private static $viewData = array();

	/*
	 *	Constructor
	 */
	public function __construct() {
		parent::__construct();

		// load dashboard model
		$this->load->model('dashboard_model');
	}

	public function index() {
		self::$viewData['page_info'] = array(
										'title' => 'Dashboard || Admin Panel',
										'meta_keywords' => 'url shortner',
										'meta_description' => 'Nepal\'s One and Only Url Shortner.'
									);

		self::$viewData['main_content_page'] = $this->load->view('dashboard_page', self::$viewData, TRUE);
		$this->load->view('templates/admin/index_dashbaord',self::$viewData);
	}

	public function getSkinConfig(){
		$this->load->view('templates/admin/partials/dashboard_skin_config');
	}

} // end of Dashboard Class Controller
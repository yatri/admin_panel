
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

		// load shorten model
		$this->load->model('Dashboard_model');
	}

	public function index() {
		// $this->data['page_info'] = array(
		// 								'title' => 'Nepal\'s First URL shortener',
		// 								'meta_keywords' => 'url shortner',
		// 								'meta_description' => 'Nepal\'s One and Only Url Shortner.'
		// 							);

		// $this->data['page_content'] = $this->load->view('home_page', $this->data, TRUE);
		$this->load->view('templates/admin/index_dashbaord',self::$viewData);
	}

} // end of Dashboard Class Controller
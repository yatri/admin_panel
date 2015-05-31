<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	/**
	 *	Store data for view
	**/
	var $viewData = array();

	function __construct() {
		parent::__construct();		
	}
        
	public function index() {
		$this->viewData['site_title'] = 'Contact Us || Android App/Game Challenge - Khudkila';
		$this->viewData['module_view'] = 'contact';

		$this->load->view('templates/public/index_page', $this->viewData);
	}

	public function message_submit() {
		if ($_POST) {
			$name = $this->input->post('full_name');
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');

			$this->public_model->saveContactMsg($name, $email, $subject, $message);

			$this->public_model->mail_contact_msg($name, $email, $subject, $message);
			$this->session->set_flashdata('success_msg', 'Message Sent Successfully!!!');
			redirect('contact');
		}
	}
}
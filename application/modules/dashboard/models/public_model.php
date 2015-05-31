<?php

class Public_model {

	public function saveContactMsg($name, $email, $subject, $msg) {
		$insert_data = array(
				'full_name'	=> $name,
				'email'	=> $email,
				'subject'	=> $subject,
				'message'	=> $msg
			);
		return $this->db->insert('contact_msg', $insert_data);
	}

	public function mail_contact_msg($name, $email, $subject, $msg) {
		$this->load->library('email');

		$this->email->from($email, $name);
		$this->email->to('info@ingnepal.org'); 

		$this->email->subject($subject);
		$this->email->message($msg);	

		return $this->email->send();
	}

}
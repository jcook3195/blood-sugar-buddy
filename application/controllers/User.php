<?php

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if($_SESSION['user_logged'] == FALSE) {
			$this->session->set_flashdata("error", "Please login to access user profile.");
			redirect("auth/login");
		}

	}

	public function profile() {

		if($_SESSION['user_logged'] == FALSE) {
			$this->session->set_flashdata("error", "Please login to access user profile.");
			redirect("auth/login");
		}

		$d['v'] = 'profile';
		$this->load->view('template', $d);

	}

}
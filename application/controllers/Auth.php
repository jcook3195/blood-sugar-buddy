<?php

class Auth extends CI_Controller {

	public function logout() {
		unset($_SESSION);
		session_destroy();
		$this->session->set_flashdata("success", "Your account has been created.");
		redirect("auth/login", "refresh");
	}

	public function login() {
		if(isset($_POST['login'])) {
			// load form helper
			$this->load->helper('custom_form_helper');

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() == TRUE) {
				$username = $_POST['username'];
				$entered_password = $_POST['password'];

				// Load model
				$this->load->model('Auth_model');
				$user = $this->Auth_model->login($username);

				$right_password = $user->password;

				// if the password matches and the user exists
				if(verify_pass($entered_password, $right_password) && $user->email) {
					// temp success msg
					$this->session->set_flashdata("success", "You are logged in.");

					// set session vars
					$_SESSION['user_logged'] = TRUE;
					$_SESSION['username'] = $user->username;

					// redirect to profile page
					redirect("user/profile", "refresh");
				} else {
					$this->session->set_flashdata("error", "Incorrect login information provided.");
					redirect("auth/login", "refresh");
				}
			}
		}

		$d['v'] = 'login';
		$this->load->view('template', $d);
	}

	public function register() {
		if(isset($_POST['register'])) {
			
			// load form helper
			$this->load->helper('custom_form_helper');

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
			$this->form_validation->set_rules('password', 'Confirm Password', 'required|min_length[5]|matches[password]');
			$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[5]');
			if($this->form_validation->run() == TRUE) {

				// add user in database
				$data = array(
					'username'		=> $_POST['username'],
					'email'			=> $_POST['email'],
					'password'		=> blow_hash($_POST['password']), // blow_hash() called from custom_form_helper
					'gender'		=> $_POST['gender'],
					'join_date'		=> date('Y-m-d'),
					'phone'			=> $_POST['phone']
				);
				
				// Load model
				$this->load->model('Auth_model');
				$this->Auth_model->register($data);

				$this->session->set_flashdata("success", "Your account has been created.");
				redirect("auth/register", "refresh");
			}
		}

		// load view
		$d['v'] = 'register';
		$this->load->view('template', $d);
	}

}
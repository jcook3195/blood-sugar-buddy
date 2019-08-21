<?php

	// Hash passwords with blowfish
	function blow_hash($password) {
		return password_hash($password, PASSWORD_BCRYPT);
	}

	// Verify that the password matches the hashed password
	function verify_pass($entered_password, $right_password) {
		if(password_verify($entered_password, $right_password)) {
			return true;
		} else {
			return false;
		}
	}

	// Make sure username does not exist already

	// Make sure email does not exist already

	// Make sure phone number does not exist already

	// Make sure a valid email is entered
	function valid_email($email) {
		if(!filer_var($email, FILTER_VALIDATE_EMAIL)) {
			return false;
		} else {
			return true;
		}
	}

	// Make sure a valid phone number is entered

?>
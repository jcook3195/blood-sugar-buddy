<?php

class Auth_model extends CI_Model {

	public function __construct() {
		parent:: __construct(); 
	}

	public function login($username) {
		// check user in database
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('username'=>$username));
		$query = $this->db->get();

		$user = $query->row();

		return $user;
	}

	public function register($data) {
		$this->db->insert('users', $data);
	}

	
}
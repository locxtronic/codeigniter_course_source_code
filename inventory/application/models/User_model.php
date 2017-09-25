<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
	
	public function searchUserForLogin() {
		$user["username"] = $this->input->post("tbxUsername");
		$user["password"] = $this->input->post("tbxPassword");
		$this->db->where($user);
		return $this->db->count_all_results('user');
	}
}

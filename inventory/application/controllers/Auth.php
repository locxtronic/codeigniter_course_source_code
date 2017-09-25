<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login() {
	// 1. step one
	//	 get all data in table
	//        $query = $this->db->get('user');
	//        foreach ($query->result() as $user) {
	//            echo $user->username. "<br>";
	//            echo $user->password. "<br>";
	//        }
	
	//2. step two (sebenarnya kene buat dalam model)
	//		$user["username"] = $this->input->post("tbxUsername");
	//		$user["password"] = $this->input->post("tbxPassword");
	//		$this->db->where($user);
	//		$query = $this->db->get('user');
	//		print_r ($query->result());
	
	//3. step three 
		$this->load->model("user_model");
		$validUser = $this->user_model->searchUserForLogin();
		if ($validUser) {
			$sessionData = array(
					"username" => $this->input->post("tbxUsername"),
					"loggedIn" => true
			);
			$this->session->set_userdata($sessionData);
			redirect("home");
		} else {
			$data["error"] = "Unable to login, wrong username or password. Please try again.";
			$this->load->view("template/header", $data);
			$this->load->view('welcome', $data);
		}
	}
	
	public function logout() {
		$this->session->unset_userdata("username");
		$this->session->unset_userdata("loggedIn");
		redirect("/");
	}
}

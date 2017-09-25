<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$data['title'] = "Inventory System";
		$this->load->view("template/header");
		$this->load->view("welcome", $data);
	}
}

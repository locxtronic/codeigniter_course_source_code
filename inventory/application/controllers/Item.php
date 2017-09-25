<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		if (!($this->session->userdata("loggedIn"))) {
			redirect("/");
		} else {
			$this->load->view("template/header");
			$this->load->model("item_model");
		}
	}

	public function register() {
		$this->load->view("register_item");
	}
	
	public function edit($id) {
		$item = $this->item_model->getItemById($id);
		$data = (array) $item[0];
		$this->load->view("edit_item", $data);
	}
	
	public function insert() {
		$itemName = $this->input->post("tbxItemName");
		$itemQuantity = $this->input->post("tbxItemQuantity");
		$this->item_model->insertItem($itemName,$itemQuantity);
		$this->load->view("success", ["content" => "Item is succesfully registered"]);
	}
	
	public function update($id) {
		$itemName = $this->input->post("tbxItemName");
		$itemQuantity = $this->input->post("tbxItemQuantity");
		$this->item_model->updateItem($id,$itemName,$itemQuantity);
		$this->load->view("success", ["content" => "Item is succesfully update"]);
	}
	
	public function delete($id) {
		$this->item_model->deleteItem($id);
		redirect("home");
	}
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		if (!($this->session->userdata("loggedIn"))) {
			redirect("/");
		} else {
			$this->load->view("template/header");
		}
	}
	
	public function index() {
		$this->load->model("item_model");
		$tableRow = $this->item_model->getAllItem();
		
		$this->load->library('table');
		$template = array('table_open' => '<table class="table table-striped">');
		$this->table->set_template($template);
		$this->table->set_heading(array('Id', 'Item Name', 'Item Quantity',"Action"));
		foreach ($tableRow as $row) {
			$row->action = "<a href='" . base_url() . "item/edit/" . $row->id. "'>Edit</a>" .
									" | <a href='" . base_url() . "item/delete/" . $row->id. "'>Delete</a>";
			$rowData = array($row->id,$row->itemName,$row->itemQuantity,$row->action);
			$this->table->add_row($rowData);
		}
		$htmlTable =  $this->table->generate();
		$itemCount = $this->item_model->countAllItem();
		$itemAvailable = $this->item_model->countItemInStock();
		$itemUnavailable = $this->item_model->countItemOutStock();
		$data = array(
				"tableContent" => $htmlTable,
				"itemCount" => $itemCount,
				"itemAvailable" => $itemAvailable,
				"itemUnavailable" => $itemUnavailable
		);
		
		$this->load->view("home",$data);
	}

}
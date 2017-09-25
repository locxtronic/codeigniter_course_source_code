<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Item_model extends CI_Model {
	public function insertItem($name,$quantity) {
		$data = array(
				"itemName" => $name,
				"itemQuantity" => $quantity
		);
		$this->db->insert('item', $data);
	}
	
	public function getAllItem() {
		$query = $this->db->get('item');
		return $query->result();
	}
	
	public function getItemById($id) {
		$this->db->where(["id" => $id]);
		$query = $this->db->get('item');
		return $query->result();
	}
	
	public function updateItem($id,$name,$quantity) {
		$data = array(
			"itemName" => $name,
			"itemQuantity" => $quantity
		);

		$this->db->where("id", $id);
		$this->db->update("item", $data);
	}
	
	public function deleteItem($id) {
		$this->db->where("id", $id);
		$this->db->delete("item");
	}
	
	public function countAllItem() {
		return $this->db->count_all("item");
	}
	
	public function countItemInStock() {
		$this->db->where(["itemQuantity >" => 0]);
		$this->db->from("item");
		return $this->db->count_all_results();
	}
	
	public function countItemOutStock() {
		$this->db->where(["itemQuantity" => 0]);
		$this->db->from("item");
		return $this->db->count_all_results();
	}
	
	
}



<?php

class M_item extends CI_Model{

	public function insert_item($data){
		$this->db->insert('item',$data);

		$insert_id = $this->db->insert_id();

		return $insert_id;
	}

}
<?php

class M_takwim extends CI_Model{

	public function list_takwim(){
		$this->db->select('*');
		$this->db->from('calendar');


		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
			//return $query->row();
		}
	}
}
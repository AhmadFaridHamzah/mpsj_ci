<?php

class M_products extends CI_Model{


	public function list_product(){
		$this->db->select('*');
		$this->db->from('products');


		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}

	}

	public function update_products($ids){
		$dataResetAll = array(
	        'discontinued' => 0
		);
		$this->db->update('products',$dataResetAll);
		$data = array(
	        'discontinued' => 1
		);
		$this->db->where_in('id',$ids);
		$this->db->update('products',$data);
		return 1;
	}
}
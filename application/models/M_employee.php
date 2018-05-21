<?php

class M_employee extends CI_Model{

	// public function __construct(){
	// 	parent::__construct();

	// 	$this->load->database();
	// }


	public function list_employee(){

		$this->db->select('*');
		$this->db->from('employees');
		$this->db->where('status','1');


		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
			//return $query->row();
		}
	}

	public function create_employee($dataemployee){

		$this->db->insert('employees',$dataemployee);

		$insert_id = $this->db->insert_id();

		return $insert_id;
	}

	public function get_employee($id){

		$this->db->select('*');
		$this->db->from('employees');
		$this->db->where('id',$id);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->row();
		}
	}

	public function update_employee($dataemployee,$id){

		$this->db->where('id',$id);
		$this->db->update('employees',$dataemployee);

		return $id;
	}

	public function delete_employee($id,$data){

		$this->db->where('id',$id);
		$this->db->update('employees',$data);

		return $id;
	}
}

?>
<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Samplemultiselect extends MY_Controller{


	function __construct(){
		parent::__construct();

		$this->load->model('M_products');
	}


	public function index(){
		$this->title = "Sample Multi Select";

		$data['product'] = $this->M_products->list_product();

		$this->load->view('dropdown/index',$data);
	}

	public function save_update(){
		$this->title = "MPSJ";
		//$data['employee'] = $this->M_employee->list_employee();
		$ids = $this->input->post('products');
			// echo "<pre>";
			// print_r($ids);
			// echo "</pre>";
			// die();
		$result = $this->M_products->update_products($ids);
		if($result){
			redirect('samplemultiselect/index');
		}
	}
}
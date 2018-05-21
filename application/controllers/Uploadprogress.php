<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Uploadprogress extends MY_Controller{

	function __construct(){

		parent::__construct();

		$this->load->model('M_item');
	}

	public function index(){

		$this->title = "Upload";

		$this->load->view('upload/index');
	}

	public function ajax_upload(){

		// $data = $this->input->post();

		// echo "<pre>";
		// print_r($_FILES);
		// echo "</pre>";
		// die();

		$this->title = "upload";

		$upload_data = [

			'upload_path' => dirname($_SERVER["SCRIPT_FILENAME"])."/files/items",
			'upload_url' => base_url()."/files/items",
			'allowed_types' => "gif|png|jpeg|jpg",
			'overwrite' => TRUE,
			'max_size' => "2048KB",
			'file_name'=> rand(1,1000000).microtime(true).'.jpg'

		];


		$file_name = null;

		$this->load->library('upload',$upload_data);

		if($this->upload->do_upload('userfile')){

			$uploaded_file = $this->upload->data();


			$file_name = $uploaded_file['file_name'];
		}

		if($file_name == ""){

			$this->viewTemplate = false;

			$file_name = "default.png";

			$data = [

					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'image' => base_url()."files/items".$file_name,

			];

			$result = $this->M_item->insert_item($data);

			if($result){
				echo json_encode(['status'=>0]);
			}
		}else{

			$this->viewTemplate = false;

			$data = [

					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'image' => base_url()."files/items".$file_name,

			];

			$result = $this->M_item->insert_item($data);

			if($result){
				echo json_encode(['status'=>1]);
			}
		}


	}
}
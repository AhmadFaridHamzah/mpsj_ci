<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Takwim extends MY_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->model('M_takwim');
	}

	public function index(){

		$this->title = "Takwim";

		$data_takwim = $this->M_takwim->list_takwim();

		foreach ($data_takwim as $takwim) {
			# code...

			$data_event[] = [
				'id' => $takwim->id,
				'title' => $takwim->takwim_title,
				'start' => $takwim->start_date,
				'end' => $takwim->end_date,
			];
		}


		$data_json = json_encode($data_event);

		$data['event'] = $data_json;

		// echo "<pre>";
		// print_r($data_json);
		// echo "</pre>";

		// die();

		$this->load->view('takwim/index',$data);
	}

}
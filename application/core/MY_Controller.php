<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $viewTemplate;

	public function __construct(){

		parent::__construct();

		$this->viewTemplate = true;
	}

	public function _output($output){

		if(!$this->viewTemplate){
			echo $output;
		}else{

			$template = 'template/v_main';
			$sidebar = 'template/side_bar';

			$data = '';	
			$sidebarparse = $this->load->view($sidebar,$data,true);

			$output = [

				'output' => $output,
				'title' => $this->title,
				'side-bar' => $sidebarparse,

			];

			echo $this->parser->parse($template,$output);
			
		}

		
	}

}
?>
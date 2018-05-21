<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emailfunc{

	function __construct(){
		$this->obj=&get_instance();
	}


	function sendEmail($data){

		$CI = $this->obj;


		if($CI->config->item('smtp_on')){

			$config['smtp_host'] = $CI->config->item('smtp_host');
			$config['smtp_user'] = $CI->config->item('smtp_user');
			$config['smtp_pass'] = $CI->config->item('smtp_pass');
			$config['smtp_port'] = $CI->config->item('smtp_port');
			$config['protocol'] = $CI->config->item('protocol');
			$config['smtp_timeout'] = '30';
			$config['charset'] = 'utf-8';
			$config['mailtype'] = 'html';

			$CI->email->initialize($config);


			foreach ($data as  $value) {
				
				$CI->email->clear();
				$CI->email->set_newline("\r\n");
				$CI->email->from($value['from'],$value['from_name']);
				$CI->email->to($value['to']);
				$CI->email->cc($value['cc']);
				$CI->email->subject($value['subject']);
				$CI->email->message($value['message']);


				if($CI->email->send()){
					return true;
				}else{
					show_error($CI->email->print_debugger());
					return false;
				}
			}

		}




	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends MY_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('M_employee');
	}


	public function index(){

		$this->title = "MPSJ";

		$data['employee'] = $this->M_employee->list_employee();

			// echo "<pre>";
			// print_r($data['employee']);
			// echo "</pre>";
			// die();

		$this->load->view('employee/index',$data);
	}

	public function create(){

		$this->title = "Create Employee";

		$this->load->view('employee/create_form');
	}

	public function create_process(){

		// $data = $this->input->post();

		// print_r($data);
		// die();

		$this->form_validation->set_rules('company',"Company",'required');
		$this->form_validation->set_rules('last_name',"Last Name",'required');
		$this->form_validation->set_rules('first_name',"First Name",'required');
		$this->form_validation->set_rules('email_address',"Email",'required|valid_email');

		$this->form_validation->set_message('required','%s Wajib Di isi');

		if($this->form_validation->run() == false){
			$this->title = "Create Employee";

			$this->load->view('employee/create_form');
		}else{


			// $data = $this->input->post();

			// print_r($data);
			// die();


			$company = $this->input->post('company');
			$last_name = $this->input->post('last_name');
			$first_name = $this->input->post('first_name');
			$email_address = $this->input->post('email_address');

			$dataemployee = [

				'company'=> $company,
				'last_name'=> $last_name,
				'first_name'=> $first_name,
				'email_address'=> $email_address,

			];

			$result = $this->M_employee->create_employee($dataemployee);

			if($result){
				redirect('admin/employee/');
			}
		}
		
	}

	public function edit($id){

		$id = decryptInUrl($id);

		$this->title = "Edit Employee";

		$data['employee'] = $this->M_employee->get_employee($id);

		$this->load->view('employee/edit_form',$data);
	}

	public function edit_process($id){


		$this->form_validation->set_rules('company',"Company",'required');
		$this->form_validation->set_rules('last_name',"Last Name",'required');
		$this->form_validation->set_rules('first_name',"First Name",'required');
		$this->form_validation->set_rules('email_address',"Email",'required|valid_email');

		$this->form_validation->set_message('required','%s Wajib Di isi');

		if($this->form_validation->run() == false){
			$this->title = "Edit Employee";

			$data['employee'] = $this->M_employee->get_employee($id);

			$this->load->view('employee/edit_form',$data);
		}else{


			$company = $this->input->post('company');
			$last_name = $this->input->post('last_name');
			$first_name = $this->input->post('first_name');
			$email_address = $this->input->post('email_address');

			$dataemployee = [

				'company'=> $company,
				'last_name'=> $last_name,
				'first_name'=> $first_name,
				'email_address'=> $email_address,

			];

			$result = $this->M_employee->update_employee($dataemployee,$id);

			if($result){
				redirect('admin/employee/');
			}
		}
	}

	public function delete($id){

		$id = decryptInUrl($id);

		$data = [
			'status' => '0',
		];

		$result = $this->M_employee->delete_employee($id,$data);

		if($result){
			redirect('admin/employee');
		}

	}

	public function sent_email(){

		$data['employee'] = "Ahmad Farid";

		$msg = $this->load->view('employee/v_template_email',$data,true);

		$email_to = ['test4@com','test@com'];
		$cc = ['test5@com','test6@com','test3@com'];


		$email_data = [[

				'from' => 'testadmin@test.com',	
				'from_name'=> 'Ahmad Farid',
				'to'=>$email_to,
				'cc'=>$cc,
				'subject' => 'Testing Email',
				'message' => $msg,

			]];

		$this->emailfunc->sendEmail($email_data);

		redirect('admin/employee');

	}



	// public function index_main(){

	// 	$this->load->view('template/v_main');
	// }


}
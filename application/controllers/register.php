<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
	
	public function index(){
		echo "Register view goes here";
	}
	
	public function reg(){
		
		$this->load->library('form_validation'); // Loading the Form Validation Library
		// Validation's
		$this->form_validation->set_rules('un', 'Username', 'required|min_length[4]');
		$this->form_validation->set_rules('fn', 'First Name', 'required');
		$this->form_validation->set_rules('p1', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('p2', 'Password Confirmation', 'matches[p1]');
		$this->form_validation->set_rules('em', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('ph', 'Phone Number','required');
		
		if ($this->form_validation->run() == FALSE) // checking if validation returns any false
		{
			$this->load->view('register_view'); //loading the register_view page again
		}
		else
		{	//getting post data to array variables
			$udata=array(
				'uname'=>$_REQUEST["un"],
				'fname'=>$_REQUEST["fn"],
				'lname'=>$_REQUEST["ln"],
				'email'=>$_REQUEST["em"],
				'city'=>$_REQUEST['ct'],
				'phone'=>$_REQUEST['ph']);
				
				$ldata=array(
				'uname'=>$_REQUEST["un"],
				'pass'=> base64_encode($_REQUEST["p2"]));
			
			// Loading the Regmod to insert the data to the database
				$this->load->model("regmod");
			//checking the insert statement status.
				$flag=$this->regmod->newReg($udata,$ldata);
				if($flag)
				{
					// calling the function that send verfication email.
					$this->email($udata['email']);
				}
				else
				{
				}
		}
	}
	
	private function email($em){
		$url=$this->genVerify();
	}
	
	private function genVerify(){
	}

	
}


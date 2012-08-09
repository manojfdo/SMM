<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {

		
	public function SignIn(){
		// SignIn function will handle all the process that requird to signin of any type of user
		// loading the form validation library 
		$this->load->library('form_validation');
		$this->form_validation->set_rules("un","Username","required|min_length[4]");
		$this->form_validation->set_rules("p","Password","required|min_length[6]");
		if($this->form_validation->run()== false)
		{
			echo "Login Validations not Correct";
			//$this->load->view('login_view');
		}
		else
		{
			// loading the loginMod Model
			$this->load->model("loginMod");
			$u=$this->input->post("un");
			$p=$this->input->post("p");
			// get salt value from database verification code
			$salt=$this->loginMod->getSalt($u);
			// making the md5 hash with salt value
			$pe=md5($p.$salt);
			// checking the password and username is correct 
			$log=$this->loginMod->clogin("$u","$pe");
			
			if($log){
				//if the password and the username is correct getting the type of the user
				$utype=$this->loginMod->getType($u);
				// USR - normal user handling process
				if($utype=="USR"){
				$this->session->set_userdata('log',$u);
				$data['res']= "Login in sucessfully.... redirecting to homepage";
				$data['meta']='<meta HTTP-EQUIV="REFRESH" content="4; url='.base_url().'">';
				$this->load->view('register_status_view',$data);
				}
				// ADM - admin user handling process
				else if($utype=="ADM"){
					$this->session->set_userdata('log','HungryAdmin');
					redirect("http://dhanu.net/index.php/admin");
				}
				// can add any number of user type handling code with else if statement 
				
			}
			// if the usernam and passsword is wrong
			else{
				$data['res']="Invalid Username Or Password.. Make sure that you verify your email.... <br />
				<a href='http://www.dhanu.net/index.php/login/loadForgotUsername'>Forgot Your Username ? </a><br/>
<a href='http://www.dhanu.net/index.php/login/loadResetUrl'>Reset Your Password </a>redirecting to login page";
				$data['meta']='<meta HTTP-EQUIV="REFRESH" content="4; url='.base_url().'/login/SignIn">';;
				$this->load->view('register_status_view',$data);
			}
		}
	}
	public function SignOut(){
		// signout process that will handele the signout process
		$this->session->sess_destroy();
		redirect(base_url());
	}
	public function loadResetUrl(){
		$this->load->view("reset_pass_view");
	}
	public function sendResetUrl(){
		$email=$_REQUEST['email'];
		$this->load->model("loginMod");
		$uname=$this->loginMod->getUname($email);
		if($uname=="false"){
			echo "Email Address is not in our database";
		}
		else{
			$code=$this->loginMod->getVcode($uname);
			$url=base_url()."index.php/login/resetPass?c=".$code."&u=".$uname;
			$this->load->library('email');

 			$this->email->from('manojfdo007@gmail.com', 'Noreply@Hungry.lk');
 			$this->email->to($email); 
 			
 			$this->email->subject('Reset your password');
 			$this->email->message('Click On the url to reset your password '.$url); 

 			$this->email->send();
			echo "Email send to the given Email address with the password reset url";

		}
	}
	public function resetPass(){
		$uname=$_REQUEST['u'];
		$code=$_REQUEST['c'];
		$this->load->model("loginMod");
		if($this->loginMod->checkReset($uname,$code)){
			$data['uname']=$uname;
			$data['code']=$code;
			$this->loadReset($data);
		}
		else{
			echo "Error in Reser Url...";
		}
	}
	private function loadReset($data){
		$this->load->view('reset_view',$data);
	}
	public function resetR(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('p1', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('p2', 'Password Confirmation', 'matches[p1]');
		$uname=$_REQUEST['u'];
		$vcode=$_REQUEST['code'];
		$data['uname']=$uname;
		$data['code']=$vcode;
		if ($this->form_validation->run() == FALSE)
		{
			//if throw errors reload the register view page again
			$this->load->view('reset_view',$data);
		}
		else
		{	
			$pass=$_REQUEST['p1'];
			$md5pass=md5($pass.strval($vcode));
			$data=array('pass'=>$md5pass);
			$this->db->where('uname', $uname);
			$query=$this->db->update('login_tbl', $data); 
			if($query)
				echo "Password Reseted";
			else
				echo "Error Reseting Password";
			
		}
	}
	function ajax_email(){
		$email=$_REQUEST['email'];
		// this function handle the ajax request and validate the email is in correct format
		//loading the form validation library
		$this->load->library('form_validation');
		//validation rules
		$this->form_validation->set_rules('email', 'Email', 'valid_email');
		//check the validation throws any errors
		if ($this->form_validation->run() == FALSE)
		{
			//echoing the respond to the div that specified in the javascript
			echo 'Invalid Email';
		}
		else
		{
			//echoing the respond to the div that specified in the javascript
			echo 'Valid';
		}
	}
	public function loadForgotUsername(){
		$this->load->view('forgot_uname_view');
	}
	
	// Sending the username to the user if he forgot through his email
	public function forgotUname(){
		$email=$_REQUEST['email'];
		$this->load->model("loginMod");
		$uname=$this->loginMod->getUname($email);
		if($uname=="false"){
			echo "Email Address is not in our database";
		}
		else{
			
			$this->load->library('email');

 			$this->email->from('manojfdo007@gmail.com', 'Noreply@Hungry.lk');
 			$this->email->to($email); 
 			
 			$this->email->subject('Forgot  your Username ? ?');
 			$this->email->message('Your username related for this email 
							       Hungry UserName -'.$uname); 

 			$this->email->send();
			echo "Email send to the given Email address with the Username";

		}
	}
}


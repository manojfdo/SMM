<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	 public function index()
	{	// loading the reguster virew page
		$this->load->view('register_view');
	} 
	public function reg(){
		// this function will handel all the registration process controll structure
		//loading the form validation libarary
		$this->load->library('form_validation');
		//validation rules
		$this->form_validation->set_rules('un', 'Username', 'required|min_length[4]');
		$this->form_validation->set_rules('fn', 'First Name', 'required');
		$this->form_validation->set_rules('p1', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('p2', 'Password Confirmation', 'matches[p1]');
		$this->form_validation->set_rules('em', 'Email', 'required|valid_email');
		$uname=$_POST['un'];
		require_once('recaptchalib.php');
		  $privatekey = "your_private_key";
		  $resp = recaptcha_check_answer ($privatekey,
										$_SERVER["REMOTE_ADDR"],
										$_POST["recaptcha_challenge_field"],
										$_POST["recaptcha_response_field"]);
		
		  if (!$resp->is_valid) {
			// What happens when the CAPTCHA was entered incorrectly
			die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
				 "(reCAPTCHA said: " . $resp->error . ")");
		  } else {
			// Your code here to handle a successful captcha verification
			if ($this->form_validation->run() == FALSE)
		{
			//if throw errors reload the register view page again
			$this->load->view('register_view');
		}
		else
		{	//process the registration 
			//load the regmod
			$this->load->model('regmod');
			$this->load->helper('security');
			//check the username is already existing in the database
			if($flag=$this->regmod->ajax_uname($uname)){
				// if not get the form data to array's
				$udata=array(
				'uname'=>$_REQUEST["un"],
				'fname'=>$_REQUEST["fn"],
				'lname'=>$_REQUEST["ln"],
				'email'=>$_REQUEST["em"],
				'location' =>$_REQUEST['loc'],
				'gender'=>$_REQUEST['gen']);
				
				$ldata=array(
				'uname'=>$_REQUEST["un"],
				'pass'=> $_REQUEST["p1"]);
				
				// send the data to regmod reg funcrion
				$flag=$this->regmod->reg($udata,$ldata);
			// if the reg function returns true
			if($flag){
				// send the verification email through sendEmail function
				$this->regmod->sendEmail($udata['uname'],$udata['email']);
				// setting up view variables refresh meta tag and respond 
				$data['res']="You have successfully registered with Hungry.lk, Dont Close this page sending the verification email now";
				$data['meta']='<meta HTTP-EQUIV="REFRESH" content="4; url='.base_url().'">';
				}
			else{
				// setting up view variables refresh meta tag and respond 
				$data['res']="Opps An error occurred in our system, try again later";
				$data['meta']='<meta HTTP-EQUIV="REFRESH" content="4; url='.base_url().'">';
				}
				
			}
			//load the register status view with the view variables set
			$this->load->view('register_status_view',$data);
			
		}
			
		  }
		// check the validation throw errors
		
	}
	public function ajax_email(){
		// this function handle the ajax request and validate the email is in correct format
		//loading the form validation library
		$this->load->library('form_validation');
		//validation rules
		$this->form_validation->set_rules('em', 'Email', 'valid_email');
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
	
	public function ajax_uname(){
		$uname=$_REQUEST['un'];
		$this->load->library('form_validation');
		$this->load->model('regmod');
		$this->form_validation->set_rules('un', 'Username', 'required|min_length[4]');
		$flag=$this->regmod->ajax_uname($uname);
		if ($this->form_validation->run() == FALSE)
		{
			echo 'Username Exist';
		}
		else
		{
			if($flag)
				echo 'Valid';
			else
				echo 'Username Exist';

		}
		
	}
	public function ajax_pass(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('p1', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('p2', 'Password Confirmation', 'matches[p1]');
		if ($this->form_validation->run() == FALSE)
		{
			echo 'Password Mismatch';
		}
		else
		{
			echo 'Password Matched';
		}
	}
	public function decode($str){
		
		return base64_decode($str);
		}
		
	public function verify(){
		// email verification handle the url sent to email
		// getting the username and code from url
		$code=$_GET['c'];
		$user=$_GET['u'];
		// load the regmod model
		$this->load->model('regmod');
		// calling the function Vemail that check the valodation code with the username
		$flag=$this->regmod->Vemail($user,$code);
		// checking the Vemail the respond
		if($flag)
			{$data['res']= "You have successfully verified your email. You may login to Hungry.lk with your username and password";}
		else
			{$data['res']= "Opps An error occurred in our system, try again later";}
		$this->load->view("register_status_view",$data);
	}
}
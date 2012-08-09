<?php
	class Regmod extends CI_Model{
		function Vemail($u,$p){
			$this->db->where('uname', $u);
			$this->db->where('vcode', $p);
			$query = $this->db->get('vuser_tbl');
	    	if($query->num_rows()>0){
				$this->db->query("UPDATE login_tbl SET verify=1 WHERE uname='$u'");
				return true;
			}
			else{
				return false;
			}
		}
		
		public function ajax_uname($u){
			$this->db->where('uname',$u);
			$query = $this->db->get('login_tbl');
	    	if($query->num_rows()>0){
				return false;
			}
			else{
				return true;
			}
		}
		function reg($d1,$d2){
			$code=rand(1,10000000);
			$d3=array ('uname'=> $d1['uname'], 'vcode'=> $code);
			$md5pass=md5($d2['pass'].strval($code));
			$d2['pass']=$md5pass;
		$this->db->trans_start();
			$this->db->insert('userdata_tbl', $d1);
			$this->db->insert('login_tbl', $d2);
			$this->db->insert('vuser_tbl',$d3);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE){
		     $this->db->trans_rollback();
			 return false;
 		}else{
     		$this->db->trans_commit();
		
			return true;
		}
		}
		
		function sendEmail($uname,$email){
			$this->db->where('uname', $uname);
			$query = $this->db->get('vuser_tbl');
			foreach ($query->result() as $row)
 			{	
				$code=$row->vcode;
			}
			$url=base_url()."index.php/register/verify?c=".$code."&u=".$uname;
			$this->load->library('email');

 			$this->email->from('manojfdo007@gmail.com', 'Noreply@Hungry.lk');
 			$this->email->to($email); 
 			
 			$this->email->subject('Verify your Email');
 			$this->email->message('Click On the URL to Verify your email '.$url); 

 			$this->email->send();

 			echo $this->email->print_debugger();
			
		}
		
		
}
	
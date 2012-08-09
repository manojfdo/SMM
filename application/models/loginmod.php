<?php
class LoginMod extends CI_Model{
	
	function clogin($u,$p){
		$this->db->where('uname', $u);
		$this->db->where('pass', $p);
		$this->db->where('verify',1);
		$query = $this->db->get('login_tbl');
	    if($query->num_rows()>0){
			return true;
		}
		else{
			return false;
		}
	}
	function getSalt($uname){
		$this->db->where('uname',$uname);
		$query = $this->db->get('vuser_tbl');
		if($query->num_rows()>0){
			foreach ($query->result() as $row)
			{
				return $row->vcode;
			}
		}
		else
		{
			return false;
		}
	}
	
	function getType($uname){
		$this->db->where('uname',$uname);
		$query = $this->db->get('login_tbl');
		if($query->num_rows()>0){
			foreach ($query->result() as $row)
			{
				return $row->type;
			}
		}
		else
		{
			return false;
		}
	}
	function getUname($email){
		$this->db->where('email',$email);
		$query = $this->db->get('userdata_tbl');
		if($query->num_rows()>0){
			foreach ($query->result() as $row)
			{
				return $row->uname;
			}
		}
		else
		{
			return "false";
		}
	}
	function getVcode($uname){
		$this->db->where('uname', $uname);
			$query = $this->db->get('vuser_tbl');
			foreach ($query->result() as $row)
 			{	
				return $row->vcode;
			}
	}
	function checkReset($uname,$code){
		$this->db->where('uname',$uname);
		$this->db->where('vcode',$code);
		$query = $this->db->get('vuser_tbl');
		if($query->num_rows()>0){
			return true;
		}
		else{
			return false;
		}
	}
	
}
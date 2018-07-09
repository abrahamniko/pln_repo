<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	function cek_user($user,$pass){
		$this->db->select('id_user,username,password,jabatan');
		$this->db->from('tb_user');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$this->db->limit(1);

		$query= $this->db->get();

		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}	
	}
}
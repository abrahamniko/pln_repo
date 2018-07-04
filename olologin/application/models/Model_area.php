<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_area extends CI_Model {
	
	function list_area(){ 
		$area = $this->db->get('tb_area');
		return $area;
	}

	function get_area($no_id){ 
		$area = $this->db->get_where('tb_area',array('no_id'=>$no_id));
		return $area;
	}
}
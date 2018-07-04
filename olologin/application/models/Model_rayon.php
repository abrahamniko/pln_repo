<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_rayon extends CI_Model {
	function list_rayon(){ 
		$rayon = $this->db->get('tb_rayon');
		return $rayon;
	}

	function get_rayon($id_rayon){ 
		$rayon = $this->db->get_where('tb_rayon',array('id_rayon'=>$id_rayon));
		return $rayon;
	}
}

/* End of file Model_rayon.php */
/* Location: ./application/models/Model_rayon.php */
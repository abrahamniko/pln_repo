<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_rayon extends CI_Model {

	function list_join(){ 
		$this->db->join('tb_area', 'tb_area.no_id = tb_rayon.no_id_area','left')->select("tb_rayon.*, tb_area.id_area, tb_area.nama_area");
		$this->db->order_by('tb_rayon.no_id', 'desc');
		$rayon = $this->db->get('tb_rayon');
		return $rayon;
	}


	function get_rayon_join($no_id){ 
		$this->db->join('tb_area', 'tb_area.no_id = tb_rayon.no_id_area','left')->select("tb_rayon.*, tb_area.id_area, tb_area.nama_area");
		$this->db->order_by('tb_rayon.no_id', 'desc');
		$rayon = $this->db->get_where('tb_rayon',array('tb_rayon.no_id'=>$no_id));
		return $rayon;		
	}
}

/* End of file Model_rayon.php */
/* Location: ./application/models/Model_rayon.php */
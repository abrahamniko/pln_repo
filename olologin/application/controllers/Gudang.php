<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("akses")==false) {
            redirect('login');
        }
	}

	public function index()
	{
		$data['title'] = 'Gudang Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('gudang',$data);
		$this->load->view('footer');
	}

}

/* End of file Gudang.php */
/* Location: ./application/controllers/Gudang.php */
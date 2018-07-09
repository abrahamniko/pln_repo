<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==false){
			redirect('login');
		}	
	}

	public function index()
	{
		$data['title'] = 'Rekap Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('rekap',$data);
		$this->load->view('footer');
	}

}

/* End of file Rekap.php */
/* Location: ./application/controllers/Rekap.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bangunan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==false){
			redirect('login');
		}	
	}

	public function index()
	{
		$data['title'] = 'Bangunan Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('bangunan',$data);
		$this->load->view('show_bangunan');
		$this->load->view('footer');
	}

}

/* End of file Bangunan.php */
/* Location: ./application/controllers/Bangunan.php */
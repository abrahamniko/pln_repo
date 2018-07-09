<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==false){
			redirect('login');
		}	
	}

	public function index()
	{
		$data['title'] = 'Grafik Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('grafik',$data);
		$this->load->view('footer');
	}

}

/* End of file Grafik.php */
/* Location: ./application/controllers/Grafik.php */
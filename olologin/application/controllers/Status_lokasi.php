<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_lokasi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==false){
			redirect('login');
		}	
	}

	public function index()
	{
		$data['title'] = 'Status Lokasi Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('status_lokasi',$data);
		$this->load->view('show_status_lokasi');
		$this->load->view('footer');
	}

}

/* End of file Status_lokasi.php */
/* Location: ./application/controllers/Status_lokasi.php */
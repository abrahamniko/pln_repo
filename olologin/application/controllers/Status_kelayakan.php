<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_kelayakan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==false){
			redirect('login');
		}	
	}

	public function index()
	{
		$data['title'] = 'Status Kelayakan Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('status_kelayakan',$data);
		$this->load->view('show_status_kelayakan');
		$this->load->view('footer');
	}

}

/* End of file Status_kelayakan.php */
/* Location: ./application/controllers/Status_kelayakan.php */
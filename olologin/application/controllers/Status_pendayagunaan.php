<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_pendayagunaan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==false){
			redirect('login');
		}	
	}

	public function index()
	{
		$data['title'] = 'Status Pendayagunaan Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('status_pendayagunaan',$data);
		$this->load->view('show_status_pendayagunaan');
		$this->load->view('footer');
	}

}

/* End of file Status_pendayagunaan.php */
/* Location: ./application/controllers/Status_pendayagunaan.php */
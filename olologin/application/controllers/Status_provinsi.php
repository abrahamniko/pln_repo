<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_provinsi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==false){
			redirect('login');
		}	
	}

	public function index()
	{
		$data['title'] = 'Status Provinsi Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('status_provinsi',$data);
		$this->load->view('show_status_provinsi');
		$this->load->view('footer');
	}

}

/* End of file Status_provinsi.php */
/* Location: ./application/controllers/Status_provinsi.php */
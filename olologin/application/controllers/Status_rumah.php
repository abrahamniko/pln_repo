<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_rumah extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==false){
			redirect('login');
		}	
	}

	public function index()
	{
		$data['title'] = 'Status Rumah Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('status_rumah',$data);
		$this->load->view('show_status_rumah');
		$this->load->view('footer');
	}

}

/* End of file Status_rumah.php */
/* Location: ./application/controllers/Status_rumah.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_tanah extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==false){
			redirect('login');
		}	
	}

	public function index()
	{
		$data['title'] = 'Status Tanah Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('status_tanah',$data);
		$this->load->view('show_status_tanah');
		$this->load->view('footer');
	}

}

/* End of file Status_tanah.php */
/* Location: ./application/controllers/Status_tanah.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_layer extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==false){
			redirect('login');
		}	
	}

	public function index()
	{
		$data['title'] = 'Status Layer Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('status_layer',$data);
		$this->load->view('show_status_layer');
		$this->load->view('footer');
	}

}

/* End of file Status_layer.php */
/* Location: ./application/controllers/Status_layer.php */
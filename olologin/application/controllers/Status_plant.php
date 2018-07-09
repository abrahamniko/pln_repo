<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_plant extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==false){
			redirect('login');
		}	
	}

	public function index()
	{
		$data['title'] = 'Status Plant Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('status_plant',$data);
		$this->load->view('show_status_plant');
		$this->load->view('footer');
	}

}

/* End of file Status_plant.php */
/* Location: ./application/controllers/Status_plant.php */
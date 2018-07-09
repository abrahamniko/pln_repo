<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_terjual extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==false){
			redirect('login');
		}	
	}

	public function index()
	{
		$data['title'] = 'Status Terjual Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('status_terjual',$data);
		$this->load->view('show_status_terjual');
		$this->load->view('footer');
	}

}

/* End of file Status_terjual.php */
/* Location: ./application/controllers/Status_terjual.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_kepemilikan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==false){
			redirect('login');
		}	
	}

	public function index()
	{
		$data['title'] = 'Status Kepemilikan Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('status_kepemilikan',$data);
		$this->load->view('show_status_kepemilikan');
		$this->load->view('footer');
	}

}

/* End of file Status_kepemilikan.php */
/* Location: ./application/controllers/Status_kepemilikan.php */
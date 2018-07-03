<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==false){
			redirect('login');
		}	
	}

	public function index()
	{
		$data['title'] = 'Area Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('area',$data);
		$this->load->view('show_area');
		$this->load->view('footer');
	}
}
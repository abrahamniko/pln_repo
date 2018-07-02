<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanah extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("akses")==false) {
            redirect('login');
        }
	}

	public function index()
	{
		$data['title'] = 'Tanah Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('tanah',$data);
		$this->load->view('footer');
	}

}

/* End of file Tanah.php */
/* Location: ./application/controllers/Tanah.php */
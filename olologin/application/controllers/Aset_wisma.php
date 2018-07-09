<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aset_wisma extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('akses')==false) {
            redirect('login');
        }
	}

	public function index()
	{
		$data['title'] = 'Wisma Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('aset_wisma',$data);
		$this->load->view('show_aset_wisma');
		$this->load->view('footer');
	}

}

/* End of file Wisma.php */
/* Location: ./application/controllers/Wisma.php */
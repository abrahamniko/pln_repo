<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aset_tanah extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('akses')==false) {
            redirect('login');
        }
	}

	public function index()
	{
		$data['title'] = 'Tanah Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('aset_tanah',$data);
		$this->load->view('show_aset_tanah');
		$this->load->view('footer');
	}

}

/* End of file Tanah.php */
/* Location: ./application/controllers/Tanah.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_proyek extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('akses')==false) {
            redirect('login');
        }
	}

	public function index()
	{
		$data['title'] = 'Pengajuan Proyek Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('pengajuan_proyek',$data);
		$this->load->view('show_pengajuan_proyek');
		$this->load->view('footer');
	}

}

/* End of file Pengajuan_proyek.php */
/* Location: ./application/controllers/Pengajuan_proyek.php */
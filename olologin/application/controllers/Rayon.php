<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rayon extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("akses")==false) {
            redirect('login');
        }
	}

	public function index()
	{
		$data['title'] = 'Rayon Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('rayon',$data);
		$this->load->view('show_rayon');
		$this->load->view('footer');
	}

}

/* End of file Rayon.php */
/* Location: ./application/controllers/Rayon.php */
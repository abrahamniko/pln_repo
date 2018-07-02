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
		$this->load->view('rayon');
	}

}

/* End of file Rayon.php */
/* Location: ./application/controllers/Rayon.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("akses")==false) {
            redirect('login');
        }
        
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('dashboard',$data);
		$this->load->view('footer');
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['nama']   = 'niko abraham';
		$data['status'] = 'kawin';

		$this->header();
		$this->load->view('dashboard',$data);
		$this->footer();
	}

	public function header()
	{
		$this->load->view('header');
	}

	public function footer()
	{
		$this->load->view('footer');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
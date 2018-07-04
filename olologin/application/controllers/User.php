<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('akses')==false) {
            redirect('login');
        }
	}

	public function index()
	{
		$data['title'] = 'User Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('user',$data);
		$this->load->view('show_user');
		$this->load->view('footer');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
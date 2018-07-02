<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("akses")==false) {
            redirect('login');
        }
	}

	public function index()
	{
		$this->load->view('user');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
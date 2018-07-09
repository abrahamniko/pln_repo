<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_status_rumah extends CI_Controller {

	public function index()
	{
		$this->load->view('show_status_rumah', $data, FALSE);
	}

}

/* End of file Show_status_rumah.php */
/* Location: ./application/controllers/Show_status_rumah.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	function __construct(){
		parent::__construct();
		$this->load->model('Model_login');
	}

	public function index()
	{
		$data['title'] = 'Area Content';
		$this->load->view('css');
		$this->load->view('login',$data);
	}

	public function var_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$ceklogin = $this->Model_login->cek_user($username,md5($password));
		
		if($ceklogin){
			foreach ($ceklogin as $row) {			
				$this->session->set_userdata('username', $row->username);
				$this->session->set_userdata('level', $row->jabatan);
				$this->session->set_userdata('area', $row->id_area);
				$this->session->set_userdata('akses',true);

				if($this->session->userdata('level')=="admin"or"distribusi"or"area"or"aset"){
					redirect('dashboard');	
				}
			}
		}
		else{
				$data['pesan']="Username atau Password tidak sesuai";
				$this->load->view('login',$data);
			}
		}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
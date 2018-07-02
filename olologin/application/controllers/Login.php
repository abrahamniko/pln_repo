<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Model_user');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function var_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		echo "U =".$username."P= ".$password; 

		$ceklogin = $this->Model_user->cek_user($username,md5($password));

		if($ceklogin){
			foreach ($ceklogin as $row) {			
				$this->session->set_userdata('username', $row->username);
				$this->session->set_userdata('level', $row->level);

				if($this->session->userdata('level')=="Admin"){
					redirect('dashboard');
				}elseif($this->session->userdata('level')=="Distribusi"){
					redirect('dashboard');
				}elseif($this->session->userdata('level')=="Area"){
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

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('akses')==false) {
            redirect('login');
        }
        $this->load->view('css');
		$this->load->view('header');
        $this->load->model('Model_user','MU');
        $this->load->model('Model_area','MA');
	}

	public function index()
	{
		$this->session->set_userdata('aksi', false);
		$data['title'] = 'User Content';
		$data['area'] = $this->MA->list_area()->result();
		$this->load->view('user',$data);

		$data['user'] = $this->MU->list_user()->result();
		$this->load->view('show_user',$data);
		$this->load->view('footer');
	}

	public function edit(){
		$this->session->set_userdata('aksi', true);

		$data['title'] = 'User Content';		
		$id_user = $this->uri->segment(3);
		$data['area'] = $this->MA->list_area()->result();
		$data['id_user'] = $this->MU->get_user($id_user)->row_array();
		$data['id_area'] = $this->MA->get_area_join($id_user)->row_array();
		$this->load->view('user',$data);
 
		$data['user'] = $this->MU->list_user()->result();
		$this->load->view('show_user',$data);
		$this->load->view('footer');
	}

	public function input_simpan(){
		$this->session->set_userdata('aksi', false);
		$username = $this->input->post('username');
		$password = $this->input->post('password');		
		$user_edit = $this->session->userdata('id_user');

		$data['title'] = 'User Content';
		$this->load->view('user',$data);
		$usernameDB['userdb'] = $this->MU->cek_list_user($username,md5($password));

		if($usernameDB['userdb'] == null){
			$data_user = array(
			'nama'=>$this->input->post('nama'),
			'email'=>$this->input->post('email'),
			'alamat'=>$this->input->post('alamat'),
			'nohp'=>$this->input->post('nohp'),
			'jenkel'=>$this->input->post('jenkel'),
			'username'=>$username,
			'password'=>md5($password),
			'jabatan'=>$this->input->post('gridRadios'),
			'register_user'=>$user_edit,
			'id_area'=>$this->input->post('id_area'));
			
			$this->db->insert('tb_user', $data_user);}
		else{
			print_r('Username atau Password Sudah Digunakan');
		}

		$data['user'] = $this->MU->list_user()->result();
		$this->load->view('show_user',$data);
		$this->load->view('footer');
		redirect('user');
	}

	public function edit_simpan(){
		$id_user = $this->input->post('id_user');
		$user_edit = $this->session->userdata('id_user');
		$password = $this->input->post('password');
			
		$data_user = array(
			'nama'=>$this->input->post('nama'),
			'email'=>$this->input->post('email'),
			'alamat'=>$this->input->post('alamat'),
			'nohp'=>$this->input->post('nohp'),
			'jenkel'=>$this->input->post('jenkel'),
			'password'=>md5($password),
			'jabatan'=>$this->input->post('gridRadios'),
			'edit_user'=>$user_edit,
			'edit_date'=>date("Y-m-d H:i:s"),
			'id_area'=>$this->input->post('id_area'));
		$this->db->where('id_user',$id_user);
		$this->db->update('tb_user', $data_user);
		redirect('user');
	}

	public function hapus(){
		$id_user = $this->uri->segment(3);
		$this->db->where('id_user',$id_user);
		$this->db->delete('tb_user');
		redirect('user');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
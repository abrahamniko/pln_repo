<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==false){
			redirect('login');
		}	
	}

	public function index()
	{
		$this->session->set_userdata('aksi', false);
		$data['title'] = 'Area Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('area',$data);

		$this->load->model('Model_area');
		$data['area'] = $this->Model_area->list_area()->result();
		$data['no_id'] = '';

		$this->load->view('show_area',$data);
		$this->load->view('footer');
	}

	public function input_simpan(){
		$this->session->set_userdata('aksi', false);
		$data['title'] = 'Area Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('area',$data);

		$data_area = array(
			'id_area'=>$this->input->post('id_area'),
			'nama_area'=>$this->input->post('nama_area'),
			'alamat'=>$this->input->post('alamat'));
		$this->db->insert('tb_area', $data_area);
 
		$this->load->model('Model_area');
		$data['area'] = $this->Model_area->list_area()->result();
		$this->load->view('show_area',$data);
		$this->load->view('footer');
		redirect('area');
	}

	public function edit(){
		$this->session->set_userdata('aksi', true);
		$this->load->model('Model_area');
		$no_id = $this->uri->segment(3);
		$data['no_id'] = $this->Model_area->get_area($no_id)->row_array(); 
		$data['title'] = 'Area Content';

		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('area',$data);
 
		$this->load->model('Model_area');
		$data['area'] = $this->Model_area->list_area()->result();
		$this->load->view('show_area',$data);
		$this->load->view('footer');
	}

	public function edit_simpan(){
		$no_id = $this->input->post('no_id');		
		$data_area = array(
			'id_area'=>$this->input->post('id_area'),
			'nama_area'=>$this->input->post('nama_area'),
			'alamat'=>$this->input->post('alamat'));
		$this->db->where('no_id',$no_id);
		$this->db->update('tb_area', $data_area);
		redirect('area');
	}

	public function hapus(){
		$no_id = $this->uri->segment(3);
		$this->db->where('no_id',$no_id);
		$this->db->delete('tb_area');
		redirect('area');
	}
}
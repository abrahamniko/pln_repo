<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rayon extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('akses')==false) {
            redirect('login');
        }
        $this->load->model('Model_rayon','MR');
        $this->load->model('Model_area','MA');
	}

	public function index()
	{
		$this->session->set_userdata('aksi', false);
		$this->load->view('css');
		$this->load->view('header');
		$data['title'] = 'Rayon Content';
		$data['list'] = $this->MA->list_area()->result();

		$this->load->view('rayon',$data);

		$data['rayon'] = $this->MR->list_join()->result();
		$data['no_id'] = '';
		$this->load->view('show_rayon',$data);
		$this->load->view('footer');
	}

	public function input_simpan(){
		$this->session->set_userdata('aksi', false);
		$data['title'] = 'Rayon Content';
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('area',$data);

		$data_rayon = array(
			'no_id_area'=>$this->input->post('no_id_area'),
			'id_rayon'=>$this->input->post('id_rayon'),
			'nama_rayon'=>$this->input->post('nama_rayon'),
			'alamat'=>$this->input->post('alamat'));
		$this->db->insert('tb_rayon', $data_rayon);

		$data['rayon'] = $this->MR->list_join()->result();
		$this->load->view('show_rayon',$data);
		$this->load->view('footer');
		redirect('rayon');
	}

	public function edit(){
		$this->session->set_userdata('aksi', true);
		$no_id = $this->uri->segment(3);
		$data['no_id'] = $this->MR->get_rayon_join($no_id)->row_array();
		$data['list'] = $this->MA->list_area()->result();
		$data['title'] = 'Rayon Content';

		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('rayon',$data);
 
		$data['rayon'] = $this->MR->list_join()->result();
		$this->load->view('show_rayon',$data);
		$this->load->view('footer');
	}

	public function edit_simpan(){
		$no_id = $this->input->post('no_id');		
		$data_rayon = array(
			'no_id_area'=>$this->input->post('no_id_area'),
			'id_rayon'=>$this->input->post('id_rayon'),
			'nama_rayon'=>$this->input->post('nama_rayon'),
			'alamat'=>$this->input->post('alamat'));
		$this->db->where('no_id',$no_id);
		$this->db->update('tb_rayon', $data_rayon);
		redirect('rayon');
	}

	public function hapus(){
		$no_id = $this->uri->segment(3);
		$this->db->where('no_id',$no_id);
		$this->db->delete('tb_rayon');
		redirect('rayon');
	}

}
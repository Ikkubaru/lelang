<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$data = array(
			'kategori' => $kategori,
		);
		$this->load->view('pengajuan',$data);
	}

	public function add(){
		$namafoto                       = date('YmdHis').'.png';
        $config['upload_path']          = 'assets/upload/barang/';
        $config['max_size']             = 1024 * 1024;
        $config['file_name']            = $namafoto;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 1024 * 1024){
            $this->session->set_flashdata('alert', '
            <div class="alert    alert-danger alert-dismissible fade show" role="alert">
                <strong>Ukuran foto terlalu besar</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>',);
        } elseif ( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }

		$data = array(
			'nama'				=> $this->session->userdata('nama'),
			'nama_barang'		=> $this->input->post('nama_barang'),
			'id_kategori'		=> $this->input->post('id_kategori'),
			'tanggal'			=> date('Y-m-d'),
			'harga_awal'		=> $this->input->post('harga_awal'),
			'foto'				=> $namafoto,
			'deskripsi_barang'	=> $this->input->post('deskripsi_barang'),
		);
		$this->db->insert('barang',$data);
		// kasih notif
		redirect('home');
	}
}

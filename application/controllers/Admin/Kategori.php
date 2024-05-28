<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$data = array(
			'nama_kategori' => 'nama_kategori',
			'kategori'		=> $kategori
		);
 		$this->template->load('admin/template','admin/kategori',$data);
	}
	public function save(){
		$data=array(
			'nama_kategori'  => $this->input->post('nama_kategori'),
		);
		$this->db->insert('kategori',$data);
		redirect('admin/kategori');
	}
	public function delete($id){
        $where = array(
            'id_kategori' => $id
        );
        $this->db->delete('kategori',$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Data Berhasil Dihapus
        </div>
        ');
        redirect('admin/kategori');
    }
}

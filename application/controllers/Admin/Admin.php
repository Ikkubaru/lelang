<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('admin/auth2');
		}
	}
	public function index()
	{
		$this->db->from('petugas')->where('level','admin');
		$data = array(
			'nama_petugas'	=> 'namaPetugas',
			'telp'			=> 'telp',
			'alamat'		=> 'alamat',
			'username'		=>	'username',
			'level'			=> 'level'
		);
		$petugas = $this->db->get()->result_array();
		$data = array('petugas' => $petugas);
		$this->template->load('admin/template','admin/user-admin',$data);
	}

	public function save(){
		$data = array(
			'nama_petugas' 		=>  $this->input->post('nama'),
			'telp' 			=>  $this->input->post('no_telp'),
			'alamat'			=>  $this->input->post('alamat'),
			'username'			=>	$this->input->post('username'),
			'password'			=> 	md5($this->input->post('password')),
			'level'				=>  $this->input->post('level')
		);
		$this->db->insert('petugas',$data);
		redirect('admin/admin');
	}
	public function delete($id){
        $where = array(
            'id_petugas' => $id
        );
        $this->db->delete('petugas',$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Data Berhasil Dihapus
        </div>
        ');
        redirect('admin/admin');
    }
}

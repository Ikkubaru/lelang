<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('admin/auth2');
		}
	}
	public function index()
	{
        $this->db->join('user', 'barang.id_user = user.id_user', 'left');
		$this->db->join('kategori','barang.id_kategori=kategori.id_kategori');
		$this->db->from('barang')->where('status','available')->order_by('tanggal','DESC');
        $barang = $this->db->get()->result_array();
		$data = array(
			'nama_barang'	        => 'nama_barang',
			'id_kategori'			=> 'id_kategori',
			'tanggal'		        => 'tanggal',
			'harga_awal'		    => 'harga_awal',
			'foto'			        => 'foto',
			'deskripsi_barang'      => 'deskripsi_barang',
            'barang'                =>  $barang,

		);
		$this->template->load('admin/template','admin/pengajuan',$data);
	}
	public function tambah($id_barang){
		$data = array(
			'id_barang'		=> $id_barang,
			'tgl_lelang'	=> $this->input->post('tgl_lelang'),
			'harga_awal'	=> $this->input->post('harga_awal'),
			'id_user'		=> $this->input->post('id_user'),
			'id_petugas'	=> $this->session->userdata('id_petugas'),
			'status'		=> $this->input->post('status'),
		);
		$this->db->insert('lelang',$data);

		$this->db->where('id_barang',$id_barang);
		$this->db->update('barang', array('status' => 'hidden'));
		redirect('admin/pengajuan');
	}
}

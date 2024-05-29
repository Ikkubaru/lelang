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
		$this->db->from('barang');
        $barang = $this->db->get()->result_array();
		$data = array(
			'nama_barang'	        => 'nama_barang',
			'id_kategori'			=> 'id_kategori',
            'nama'                  => 'nama',
			'tanggal'		        => 'tanggal',
			'harga_awal'		    => 'harga_awal',
			'foto'			        => 'foto',
			'deskripsi_barang'      => 'deskripsi_barang',
            'barang'                =>  $barang,

		);
		$this->template->load('admin/template','admin/pengajuan',$data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->db->select('lelang.*, barang.*');
        $this->db->from('lelang');
        $this->db->join('barang', 'lelang.id_barang = barang.id_barang');
        $barang = $this->db->get()->result_array();
		
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		// $this->db->select('barang.id_barang, barang.nama_barang, MAX(harga_penawar.harga) as harga_tertinggi, user.nama');
		// $this->db->group_by('barang.id_barang');
		// $harga['lelang'] = $this->db->get()->result();

		$data = array(
			'id_barang'		=> 'id_barang',
			'id_kategori'	=> 'id_kategori',
			'barang'		=> $barang,
			'kategori'		=> $kategori,
		);
		$this->load->view('homepage',$data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index()
{
    // Query untuk mendapatkan semua data barang dan lelang
    $this->db->select('lelang.id_barang, barang.nama_barang, barang.foto, barang.deskripsi_barang,barang.harga_awal, user.nama, petugas.nama_petugas');
    $this->db->from('lelang');
    $this->db->join('barang', 'lelang.id_barang = barang.id_barang');
    $this->db->join('user', 'barang.id_user = user.id_user');
    $this->db->join('petugas', 'lelang.id_petugas = petugas.id_petugas');
	$this->db->where('lelang.status', 'dibuka');
    $barang = $this->db->get()->result_array();

    // Query untuk mendapatkan harga tertinggi untuk setiap barang
    $this->db->select('id_barang, MAX(harga) as harga_tertinggi');
    $this->db->from('harga_penawar');
    $this->db->group_by('id_barang');
    $harga_tertinggi = $this->db->get()->result_array();

    // Menggabungkan informasi harga tertinggi dengan detail barang
    $harga_tertinggi_map = array_column($harga_tertinggi, 'harga_tertinggi', 'id_barang');
    foreach ($barang as &$barang_item) {
        $barang_item['harga_tertinggi'] = isset($harga_tertinggi_map[$barang_item['id_barang']]) ? $harga_tertinggi_map[$barang_item['id_barang']] : 'Belum ada penawaran';
    }

    // Query untuk mendapatkan semua kategori
    $this->db->from('kategori');
    $kategori = $this->db->get()->result_array();

    // Data yang akan dikirim ke view
    $data = array(
        'barang'    => $barang,
        'kategori'  => $kategori,
    );

    // Memuat view dengan data yang sudah digabungkan
    $this->load->view('homepage', $data);
}

}

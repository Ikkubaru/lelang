<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lelang_finish extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('admin/auth2');
		}
	}
	public function index()
{
    // Query untuk mendapatkan semua data lelang dengan status 'ditutup'
    $this->db->select('lelang.id_barang, barang.nama_barang, barang.foto, barang.harga_awal, user.nama as nama_user, petugas.nama_petugas');
    $this->db->from('lelang');
    $this->db->join('barang', 'lelang.id_barang = barang.id_barang');
    $this->db->join('user', 'barang.id_user = user.id_user');
    $this->db->join('petugas', 'lelang.id_petugas = petugas.id_petugas');
    $this->db->where('lelang.status', 'ditutup');
    $lelang = $this->db->get()->result_array();

    // Query untuk mendapatkan harga tertinggi untuk setiap barang
    $this->db->select('id_barang, MAX(harga) as harga_tertinggi');
    $this->db->from('harga_penawar');
    $this->db->group_by('id_barang');
    $harga_tertinggi = $this->db->get()->result_array();

    // Menggabungkan informasi harga tertinggi dengan detail lelang
    $harga_tertinggi_map = array_column($harga_tertinggi, 'harga_tertinggi', 'id_barang');
    foreach ($lelang as &$lelang_item) {
        $lelang_item['harga_tertinggi'] = isset($harga_tertinggi_map[$lelang_item['id_barang']]) ? $harga_tertinggi_map[$lelang_item['id_barang']] : 'Belum ada penawaran';
    }

    // Mengelompokkan data lelang berdasarkan id_barang
    $grouped_lelang = [];
    foreach ($lelang as $item) {
        $grouped_lelang[$item['id_barang']][] = $item;
    }

    // Data yang akan dikirim ke view
    $data = array(
        'grouped_lelang' => $grouped_lelang,
    );

    // Memuat view dengan data yang sudah digabungkan
    $this->template->load('admin/template', 'admin/lelang_finish', $data);
}

}

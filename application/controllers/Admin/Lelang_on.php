<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lelang_on extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('admin/auth2');
		}
	}
	public function index()
{
    // Query untuk mendapatkan semua data lelang
    $this->db->select('lelang.id_barang, barang.nama_barang, barang.foto, user.nama, petugas.nama_petugas');
    $this->db->from('lelang');
    $this->db->join('barang', 'lelang.id_barang = barang.id_barang');
    $this->db->join('user', 'barang.id_user = user.id_user');
    $this->db->join('petugas', 'lelang.id_petugas = petugas.id_petugas');
    $this->db->where('lelang.status', 'dibuka');
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
        'id_barang'         => 'id_barang',
        'id_lelang'         => 'id_lelang',
        'id_user'           => 'id_user',
        'id_petugas'        => 'id_petugas',
    );

    // Memuat view dengan data yang sudah digabungkan
    $this->template->load('admin/template', 'admin/lelang_on', $data);
}
    public function tutup($id_barang){
        $data = array(
            'status' => $this->input->post('status'),
        );
    }
    public function close($id_barang)
{
    // Mengambil data dari form
    $status = $this->input->post('status');
    $harga_akhir = $this->input->post('harga_akhir');

    // Data yang akan diupdate
    $data = array(
        'status' => $status,
        'harga_awal'  => $harga_akhir
    );

    // Melakukan update pada tabel lelang
    $this->db->where('id_barang', $id_barang);
    $this->db->update('lelang', $data);

    // Redirect ke halaman yang sesuai setelah update
    redirect('admin/lelang_on');
}

}

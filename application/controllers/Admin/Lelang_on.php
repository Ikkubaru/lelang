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
        $this->db->from('lelang');
        $this->db->join('barang','lelang.id_barang=barang.id_barang');
        $this->db->join('user','barang.id_user=user.id_user');
        $this->db->join('petugas','lelang.id_petugas=petugas.id_petugas');
        $lelang = $this->db->get()->result_array();
        $data = array(
            'id_barang'         => 'id_barang',
            'id_lelang'         => 'id_lelang',
            'id_user'           => 'id_user',
            'id_petugas'        => 'id_petugas',
            'lelang'            => $lelang
        );
		$this->template->load('admin/template','admin/lelang_on',$data);
	}
    public function tutup($id_barang){
        $data = array(
            'status' => $this->input->post('status'),
        );
    }
    public function close(){
        
    }
}

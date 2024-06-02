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
        $this->db->from('lelang')->where('status','dibuka');
        $lelang = $this->db->get()->result_array();
        $data = array(
            'id_barang'         => 'id_barang',
            'tgl_lelang'        => 'tgl_lelang',
            'harga_awal'        => 'harga_awal',
            'id_user'           => 'id_user',
            'id_petugas'        => 'id_petugas',
            'lelang'            => $lelang
        );
		$this->template->load('admin/template','admin/lelang_on',$data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ikut_lelang extends CI_Controller {

	public function __construct(){
		parent::__construct();
        if($this->session->userdata('id_user')==NULL){
			redirect('auth');
		}
	}
	public function index()
	{   
       
	}
    public function lelang($id_barang){
        $this->db->from('lelang');
        $this->db->join('barang', 'lelang.id_barang = barang.id_barang');
        $this->db->where('barang.id_barang',$id_barang);
        $data['lelang'] = $this->db->get()->row();

        $this->load->view('ikut_lelang',$data);
    }
    public function tawar($id_barang){

        $data2 = array(
            'harga'     => $this->input->post('harga'),
            'id_user'   => $this->session->userdata('id_user'),
            'id_barang' => $id_barang,
            'id_lelang' => $this->input->post('id_lelang'),
        );
        $this->db->insert('harga_penawar',$data2);
        redirect('home');
    }
}

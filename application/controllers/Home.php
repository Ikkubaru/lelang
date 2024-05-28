<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$data['nama'] = $this->session->userdata('nama');
        $data['no_telp'] = $this->session->userdata('no_telp');
        $data['alamat'] = $this->session->userdata('alamat');
        $data['username'] = $this->session->userdata('username');

		$this->load->view('homepage',$data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('admin/auth2');
		}
	}
	public function index()
	{
		$this->db->from('user');
		$data = array(
			'nama'	            => 'nama',
			'no_telp'			=> 'no_telp',
			'alamat'		    => 'alamat',
			'username'		    => 'username',
		);
		$user = $this->db->get()->result_array();
		$data = array('user' => $user);
		$this->template->load('admin/template','admin/user-basic',$data);
	}
}

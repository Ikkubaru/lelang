<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth2 extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('admin/login');
	}
    public function login(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('petugas');
        $this->db->where('username',$username);
        $user = $this->db->get()->row();
        if($user==NULL){
        $this->session->set_flashdata('alert','
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>Username Tdak Ditemukan
		</div>
		');
        redirect('admin/auth2');
        }else if($user->password==$password){
            $data = array(
                'id_petugas'    => $user->id_petugas,
                'nama_petugas'  => $user->nama_petugas,
                'telp'          => $user->telp,
                'alamat'        => $user->alamat,
                'username'      => $user->username,
                'level'         => $user->level,
            );
            $this->session->set_userdata($data);
            redirect('admin/dashboard');
        }else{
            $this->session->set_flashdata('alert','
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Password Salah
            </div>
            '); 
            redirect('admin/auth2');
        }   
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}

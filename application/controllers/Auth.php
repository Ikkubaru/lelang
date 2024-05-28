<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function daftar(){
		$this->load->view('register');
	}
	public function register(){
		$data = array(
			'nama' 			=>$this->input->post('nama'),
			'no_telp' 		=>$this->input->post('no_telp'),
			'alamat' 		=>$this->input->post('alamat'),
			'username' 		=>$this->input->post('username'),
			'password' 		=>md5($this->input->post('password')),
		);
		$this->db->insert('user',$data);
		redirect('auth');
	}
	public function login(){
		$username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('user')->where('username',$username);
        $user = $this->db->get()->row();
        if($user==NULL){
        $this->session->set_flashdata('alert','
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>Username Tdak Ditemukan
		</div>
		');
        redirect('auth');
        }else if($user->password==$password){
            $data = array(
                'nama'      	=> $user->nama, 
                'no_telp'  		=> $user->no_telp,
                'alamat'     	=> $user->alamat,
                'username'     	=> $user->username,
            );
            $this->session->set_userdata($data);
            redirect('home');
        }else{
            $this->session->set_flashdata('alert','
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Password Salah
            </div>
            '); 
            redirect('auth');
        }   
	}
	public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}

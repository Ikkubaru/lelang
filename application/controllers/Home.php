<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		// $this->db->from('lelang')->where('status','dibuka');
		$this->load->view('homepage');
	}
}

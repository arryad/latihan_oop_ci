<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('m_login');			
	}

	function index(){		
		if($this->session->userdata('status') == "login"){
			redirect(base_url("Myadmin/"));
		}
		$data['title'] = "Login Website | Oxford ";
		$this->load->view('header/headlog', $data);
		$this->load->view('login');
		$this->load->view('footer/footadm');
	}

	function f_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => sha1($password)
			);
		$cek = $this->m_login->cek_login("login", $where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
			redirect(base_url("Myadmin/"));
 
		}else{			
			$this->session->set_flashdata('message','Username atau password salah!');
			redirect(base_url(''));
		}
	}
	

	function f_logout(){
		$this->session->sess_destroy();
		redirect(base_url(''));
	}
}

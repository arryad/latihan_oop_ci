<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('m_login');
	}

	function index(){
		$data['title'] = "Register | Oxford ";
		$this->load->view('header/headlog', $data);
		$this->load->view('register');
		$this->load->view('footer/footadm');
	}

	function f_register(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'username' => $username,
			'password' => sha1($password),
			'level' => '1');		
		$this->m_login->tambah('login', $data);
		redirect('Register/');
	}

	
}

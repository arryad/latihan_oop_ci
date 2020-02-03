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
		$where = array('npm' => $username);
		$cek = $this->m_login->cek_npm('data_mahasiswa', $where)->num_rows();
		if($cek > 0){ //jika si npm mahasiswa ada di tabel data mahasiswa. maka:
			//data dimasukkan/didaftarkan ke database

			//note: tambahin lagi validasi if yang sama kaya diatas supaya npm yang sudah terdaftar ga bisa daftar lagi
			$data = array(
			'username' => $username,
			'password' => sha1($password),
			'level' => '1');		
			$this->m_login->tambah('login', $data);
			$this->session->set_flashdata('message','registrasi berhasil silahkan login!');
			redirect('Login_c/');
		} else {
			$this->session->set_flashdata('message','registrasi gagal npm tidak ada!');
			redirect('Register/');
		}
	}

	
}

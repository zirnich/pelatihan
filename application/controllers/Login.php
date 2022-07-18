<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('M_login'));
	}

	function auth()
	{
		$judul = "Login Admin";
		$this->load->view('login');
	}
 
	function aksi_login()
	{
		$user = $this->input->post('txuser');
		$pass = md5($this->input->post('txpass'));
		$this->M_login->login($user, $pass);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('index.php/Login/auth'));
	}
}
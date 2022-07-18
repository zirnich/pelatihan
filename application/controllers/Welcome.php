<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	function halo()
	{
		// echo "Hello World!!";
		$this->load->view('coba');
	}

	function admin()
	{
		$data['isi'] = "index"; 
		$this->load->view('backend', $data);
	}
}
function dokter()
	{
		$data['isi'] = "index"; 
		$this->load->view('backenddokter', $data);
	}
<?php
/**
 * 
 */
class dokter_controller extends CI_Controller
{
	
public function index(){
		$this->load->view('templatedokter/header');		
		$this->load->view('templatedokter/navbar');		
		$this->load->view('templatedokter/footer');		
	}
	

		
}
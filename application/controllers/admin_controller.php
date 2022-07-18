<?php
/**
 * 
 */
class admin_controller extends CI_Controller
{
	
public function index(){
		$this->load->view('Template/header');		
		$this->load->view('Template/navbar');		
		$this->load->view('Template/footer');		
	}
	

		
}
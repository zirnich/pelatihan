<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query	= $this->db->get('login');
		$cek	= $query->num_rows();

		if ($cek){
			$data = $query->row();
			$data_session = array(
				'id'			=>	$data->id,
				'usename'				=>	$data->username,				
				'is_active'			=>	$data->is_active,
				'role_id'			=>	$data->role_id,
				'status'			=> "login"
			);

			$this->session->set_userdata($data_session);
			$actives = $this->session->userdata('is_active');
			$roles =  $this->session->userdata('role_id');
			$company_name =  $this->session->userdata('username');
			if ($actives == 'Active') {
				if ($roles == 'Admin') {
					
						echo "<script>alert('Data Berhasil Disimpan')</script>";
						
				
					redirect('admin_controller');
				}else{
					$this->session->set_flashdata(
						'message',
						"<script>
					window.onload=function(){
						swal('Success!','Your hasbeen log in! ' + '$company_name','success')
					}
					</script>"
					);
					redirect('dokter_Controller');
				}
			}else{
				$this->session->set_flashdata(
					'message',
					"<script>
				window.onload=function(){
					swal('Warning!','Email Is Not Activated!','warning')
				}
				</script>"
				);
				redirect('LoginController');
			}
		}else{
			$this->session->set_flashdata(
				'message',
				"<script>
			window.onload=function(){
				swal('Warning!','Email & Password Wrong!','warning')
			}
			</script>"
			);
			redirect('LoginController');
		}
	}
	public function add_user($table,$data){
		return $this->db->insert($table,$data);
	}
}

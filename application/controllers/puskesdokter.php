 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class puskesdokter extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('M_puskesdokter');
		$this->load->library(array('upload'));
	}

	public function input_pendaftaran()
	{
		$data['getpasien'] = $this->M_puskesdokter->getpasien()->result();
		$data['getdokter'] = $this->M_puskesdokter->getdokter()->result();
		$data['judul'] 	= "pendaftaran";
		$data['isi'] 	= "form_pendaftaran";
		$this->load->view('backenddokter', $data);
	}

	public function data_pendaftaran()
	{
		$data['getpendaftaran'] = $this->M_puskesdokter->get_pendaftaran()->result();
		$this->load->view('viewdokter/list_pendaftaran', $data);
	}
 
	public function aksi_tambah_pendaftaran()
	{	
		
		$kd_pasien   = $this->input->post('kd_pasien');
		$umur   = $this->input->post('umur');
		$keluhan  = $this->input->post('keluhan');
		$kd_dokter  = $this->input->post('kd_dokter');
	
		$data = array(
			'kd_pasien' 	=> $kd_pasien,
			'umur' 		=> $umur,
			'keluhan'		=> $keluhan,
			'kd_dokter'	 => $kd_dokter,
		
		);

		$result = $this->M_puskes->simpan('pendaftaran', $data);
		if ($result == 1) {
			echo "<script>alert('Data Berhasil Disimpan')</script>";
			$this->data_pendaftaran();
		}else{
			echo "<script>alert('Data Gagal Disimpan')</script>";
			$this->tambah();
		}
		

		}
			public function aksi_tambah_rm()
	{	
		
		$kd_pasien  			 = $this->input->post('kd_pasien');			
		$keluhan  = $this->input->post('keluhan');	
		$penyakit		 = $this->input->post('penyakit');
				
		$data = array(
			'kd_pasien' 	=> $kd_pasien,
			'keluhan' => $keluhan,			
			'penyakit' 		=> $penyakit,
			
		);


		$result = $this->M_puskesdokter->simpan('rekamedis', $data);
		if ($result == 1) {
			echo "<script>alert('Data Berhasil Disimpan')</script>";
			$this->data_rm();
		}else{
			echo "<script>alert('Data Gagal Disimpan')</script>";
			$this->tambah();
		}
		

		}

	public function input_rm()
	{
		$data['getpasien'] = $this->M_puskesdokter->getpasien()->result();
		$data['judul'] 	= "Tambah Data RM";
		$data['isi'] 	= "viewdokter/rekamedis";
		$this->load->view('backenddokter', $data);
	}
		
		public function data_rm()
	{
		$data['judul'] 	= "Data rm";
		$data['isi'] 	= "viewdokter/list_rm";
		$data['getrm'] = $this->M_puskesdokter->get_rm();
		$this->load->view('backenddokter', $data);
	}

public function aksi_tambah_resep()
	{	
		
		$kd_pasien  			 = $this->input->post('kd_pasien');			
		$resep = $this->input->post('resep');	
		
		$data = array(
			'kd_pasien' 	=> $kd_pasien,
			'resep' => $resep,			
			
			
		);


		$result = $this->M_puskesdokter->simpan('resep', $data);
		if ($result == 1) {
			echo "<script>alert('Data Berhasil Disimpan')</script>";
			$this->data_rm();
		}else{
			echo "<script>alert('Data Gagal Disimpan')</script>";
			$this->tambah();
		}
		

		}

	public function input_resep()
	{
		$data['getpasien'] = $this->M_puskesdokter->getpasien()->result();
		$data['judul'] 	= "Tambah Data resep";
		$data['isi'] 	= "viewdokter/resep";
		$this->load->view('backenddokter', $data);
	}
		
		public function data_resep()
	{
		$data['judul'] 	= "Data resep";
		$data['isi'] 	= "viewdokter/list_resep";
		$data['getresep'] = $this->M_puskesdokter->get_resep();
		$this->load->view('backenddokter', $data);
	}	
	
	







	}

 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class puskes extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('M_puskes');
		$this->load->library(array('upload'));
	}

	function index()
	{
		$data['judul'] 	= "Data Pasien";
		$data['isi'] 	= "list_pasien";
		$data['databrg'] = $this->M_puskes->get_pasien();
		$this->load->view('backend', $data);
	}

	public function tambah()
	{
		$data['judul'] 	= "Tambah Data Pasien";
		$data['isi'] 	= "form_pasien";
		$this->load->view('backend', $data);
	}

	public function aksi_tambah()
	{	
		$nama   = $this->input->post('nama');			
		$jenis_kelamin  = $this->input->post('jenis_kelamin');	
		$alamat = $this->input->post('alamat');
		$data = array(
			'nama' 	=> $nama,
			'jenis_kelamin' => $jenis_kelamin,
			
			'alamat' 		=> $alamat
		);

		$result = $this->M_puskes->simpan('pasien', $data);
		if ($result == 1) {
			echo "<script>alert('Data Berhasil Disimpan')</script>";
			$this->index();
		}else{
			echo "<script>alert('Data Gagal Disimpan')</script>";
			$this->tambah();
		}
		

		}
	function index2()
	{
		$data['getanggota'] = $this->M_anggota->getanggota()->result();
		$data['get_simpanan'] = $this->M_anggota->get_simpanan()->result();
		$data['getdokter'] = $this->M_anggota->getdokter()->result();
		$data['judul'] 	= "Data simpanan";
		$data['isi'] 	= "list_simpanan";
		$data['data_simpanan'] = $this->M_anggota->get_simpanan();

		$this->load->view('backend', $data);
	}

	public function input_pendaftaran()
	{
		$data['getpasien'] = $this->M_puskes->getpasien()->result();
		$data['getpoli'] = $this->M_puskes->getpoli()->result();
		$data['judul'] 	= "pendaftaran";
		$data['isi'] 	= "form_pendaftaran";
		$this->load->view('backend', $data);
	}

	public function data_pendaftaran()
	{
		$data['getpendaftaran'] = $this->M_puskes->get_pendaftaran()->result();
		$this->load->view('list_pendaftaran', $data);
	}
 
	public function aksi_tambah_pendaftaran()
	{	
		
		$kd_pasien   = $this->input->post('kd_pasien');
		$umur   = $this->input->post('umur');		
		$kd_poli  = $this->input->post('kd_poli');
	
		$data = array(
			'kd_pasien' 	=> $kd_pasien,
			'umur' 		=> $umur,		
			'kd_poli'	 => $kd_poli,
		
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

	public function aksi_tambah_dokter()
	{	
		
		$nama  			 = $this->input->post('nama');			
		$jk  = $this->input->post('jk');	
		$alamat			 = $this->input->post('alamat');
		$kd_poli 			 = $this->input->post('kd_poli');		
		$data = array(
			'nama' 	=> $nama,
			'jk' => $jk,			
			'alamat' 		=> $alamat,
			'kd_poli' 	=> $kd_poli,
		);


		$result = $this->M_puskes->simpan('dokter', $data);
		if ($result == 1) {
			echo "<script>alert('Data Berhasil Disimpan')</script>";
			$this->data_dokter();
		}else{
			echo "<script>alert('Data Gagal Disimpan')</script>";
			$this->tambah();
		}
		

		}

	public function input_dokter()
	{
		$data['getpoli'] = $this->M_puskes->getpoli()->result();
		$data['judul'] 	= "Tambah Data Dokter";
		$data['isi'] 	= "form_dokter";
		$this->load->view('backend', $data);
	}
		
		public function data_dokter()
	{
		$data['judul'] 	= "Data Dokter";
		$data['isi'] 	= "list_dokter";
		$data['getdokter'] = $this->M_puskes->get_dokter();
		$this->load->view('backend', $data);
	}

	public function input_poli()
	{
		$data['judul'] 	= "Tambah Data Poli";
		$data['isi'] 	= "from_poli";
		$this->load->view('backend', $data);
	}
		
		public function data_poli()
	{
		$data['judul'] 	= "Data Poli";
		$data['isi'] 	= "list_poli";
		$data['getpoli'] = $this->M_puskes->get_poli();
		$this->load->view('backend', $data);
	}
	public function aksi_tambah_poli()
	{	
		
		$nama_poli 			 = $this->input->post('nama_poli');		
		$data = array(
			'nama_poli' 	=> $nama_poli,
					);


		$result = $this->M_puskes->simpan('poli', $data);
		if ($result == 1) {
			echo "<script>alert('Data Berhasil Disimpan')</script>";
			$this->data_poli();
		}else{
			echo "<script>alert('Data Gagal Disimpan')</script>";
			$this->tambah();
		}
		

		}

	public function edit($kode=0)
	{
		if ($this->uri->segment(3)==null) {
			echo "<script>alert('kamu belum memilih data yang di edit')</script>";
			$this->index();
		}	
		$users = $this->M_puskes->getpasien(" WHERE kd_pasien='$kode' ")->row_array();
		$data = array(
			'id_anggota'=>$users['id_anggota'],
			'nama_anggota'=>$users['nama_anggota'],
			'no_telp'=>$users['no_telp'],
			'no_ktp'=>$users['no_ktp'],
			'jenis_kelamin'=>$users['jenis_kelamin'],
			'alamat'=>$users['alamat'],
		);
		$data['judul'] 	= "Edit Data";
		$data['isi'] 	= "edit";
		$this->load->view('backend', $data);

		
	}

	public function update(){
		if(!$_POST['update']) {
		}
		$id_anggota = $this->input->post('id_anggota');
		$nama_anggota = $this->input->post('nama_anggota');
		$no_telp = $this->input->post('no_telp');
		$no_ktp = $this->input->post('no_ktp');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$data = array(
			'nama_anggota'=>$nama_anggota,
			'no_telp'=>$no_telp,
			'no_ktp'=>$no_ktp,
			'jenis_kelamin'=>$jenis_kelamin,
			'alamat'=>$alamat,
			);
			$result = $this->M_anggota->update('tb_anggota',$data, array('id_anggota'=>$id_anggota));
		if ($result == 1) {
			echo "<script>alert('Data Berhasil Diupdate')</script>";
			$this->index();
		}else{
			echo "<script>alert('Data Gagal Diupdate')</script>";
			$this->edit();
		}
		
	}

	public function delete($kode=0){
		if ($this->uri->segment(3)==null) {
			echo "<script>alert('kamu belum memilih data yang akan di hapus')</script>";
			$this->index();
		}	

		$result = $this->M_anggota->delete('tb_anggota', array('id_anggota'=>$kode));

		if ($result ==1) {
			echo "<script>alert('Data Berhasil Dihapus')</script>";
			$this->index();
		}else{
			echo "<script>alert('Data Gagal Dihapus')</script>";
			$this->index();
		}

	}



	}

 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_puskesdokter extends CI_Model {

	var $CI;
	var $data;
	function __construct()
	{
		parent::__construct(); 
	}

	function get_pasien()
	{
		$result = $this->db->select('*');
		$result = $this->db->from('pasien');
		$result = $this->db->get();
		return $result->result();
		
	}
	function get_pendaftaran()
	{
		return $this->db->query("SELECT * FROM pendaftaran");
		
	}
	function get_rm()
	{
	$result = $this->db->select('*');
		$result = $this->db->from('rekamedis');
		$result = $this->db->get();
		return $result->result();
	}
	function get_resep()
	{
	$result = $this->db->select('*');
		$result = $this->db->from('resep');
		$result = $this->db->get();
		return $result->result();
	}
	function get_barang_keluar()
	{
		$result = $this->db->select('*');
		$result = $this->db->from('barang_keluar');
		$result = $this->db->get();
		return $result->result();
		
	}

	public function fill_data()
	{
		$this->data = array(
			'merk_barang' 			=> $this->input->post('merk_barang'),
			'jenis_barang' 		=> $this->input->post('jenis_barang'),
			'harga_barang' 		=> $this->input->post('harga_barang'),
			'jumlah_barang' 			=> $this->input->post('jumlah_barang'),
			);
	}

	public function create()
	{
		$insert = $this->db->insert('barang', $this->data);
		return $insert;
	}

	public function simpan($tabel, $data)
	{
		return $this->db->insert($tabel,$data);
	}
	public function update($tabel, $data, $where)
	{
		return $this->db->update($tabel,$data, $where);
	}
	public function delete($tabel, $where)
	{
		return $this->db->delete($tabel,$where);
	}
	public function getUser(){
		$username = $this->session->userdata('username');
		return $this->db->query("SELECT * FROM tb_login WHERE username='$username' ");
	}
	public function getpasien($where = '')
	{
		return $this->db->query("SELECT * FROM pasien".$where);
	}
	public function getrm($where = '')
	{
		return $this->db->query("SELECT * FROM pasien".$where);
	}
	public function getdokter($where = '')
	{
		return $this->db->query("SELECT * FROM dokter".$where);
	}
	public function getMasuk(){
		return $this->db->query("SELECT * FROM barang_masuk,barang,tb_login WHERE barang.id_barang=barang_masuk.id_barang  ORDER BY waktu_masuk DESC");
	}
	public function getKeluar(){
		return $this->db->query("SELECT * FROM barang_keluar,barang,tb_login WHERE barang.id_barang=barang_keluar.id_barang  ORDER BY waktu_keluar DESC");
	}
	
}
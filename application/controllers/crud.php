<?php 
 
 
class Crud extends CI_Controller{

 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 		
 		if($this->session->userdata('status') != "login")
		{
			redirect(base_url("home"));
		}
	}
 
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('vtampil',$data);
	}
 
	function tambah(){
		$this->load->view('vinput');
	}
 
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
 		$isi = $this->input->post('isi');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'isi' => $isi
			);
		$this->m_data->input_data($data,'user');
		redirect('crud/index');
	}
 
 	function tambah_aksi2(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
 		$isi = $this->input->post('isi');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'isi' => $isi
			);
		$this->m_data->input_data($data,'user');
		redirect(base_url("home"));
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('crud/index');
	}
 
	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('vedit',$data);
	}
 
 	function update()
 	{
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$alamat = $this->input->post('email');
	$isi = $this->input->post('isi');
 
	$data = array(
		'nama' => $nama,
		'email' => $email,
		'isi' => $isi
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_data->update_data($where,$data,'user');
	redirect('crud/index');
	}
}
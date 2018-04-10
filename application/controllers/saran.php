<?php
  
  class Saran extends CI_Controller{

 
  function __construct(){
    parent::__construct();    
    $this->load->model('m_penilaian');
    $this->load->helper('url');
    
    if($this->session->userdata('status') != "login")
    {
      redirect(base_url("home"));
    }
  }

    function aksi(){
    $email = $this->input->post('email');
    $kebersihan = $this->input->post('kebersihan');
    $kedisiplinan = $this->input->post('kedisiplinan');
    $keprofesian = $this->input->post('keprofesian');

    $data = array(
      'email' => $email,
      'kebersihan' => $kebersihan,
      'kedisiplinan' => $kedisiplinan,
      'keprofesian' => $keprofesian
      );
    $this->m_penilaian->masukan_data($data,'saran');
    redirect(base_url("home"));
  }
  /*class Login extends CI_Controller{
 
  function aksi(){
  include '$db';
  $email = $_REQUEST['email'];
  $kebersihan = $_REQUEST['kebersihan'];
  $kedisiplinan = $_REQUEST['kedisiplinan'];
  $keprofesian = $_REQUEST['keprofesian'];
  $conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
  $mysqli = "INSERT INTO saran (email, kebersihan, kedisiplinan, keprofesian) VALUES ('$email', '$kebersihan', '$kedisiplinan', '$keprofesian')";
  $result = mysqli_query($conn, $mysqli);
  echo "Input berhasil";
  mysqli_close($conn);
}
}*/}
?>
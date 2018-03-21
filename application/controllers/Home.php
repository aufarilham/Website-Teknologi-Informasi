<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->header();
		$this->load->view('index');
		$this->footer();
		
	}

	public function halamanprofil()
	{
		echo "Halaman Awal";
	}

	//Views
	public function header()
	{
		$this->load->view('header');
	}

	public function footer()
	{
		$this->load->view('footer');
	}
}

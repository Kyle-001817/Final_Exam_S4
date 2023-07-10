<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('register', array('content'=>'login'));
	}

	public function accueil()
	{
		$this->load->view('template', array('content'=>'accueil'));
	}

	public function inscription()
	{
		// $this->load->view('pages/header');
		$this->load->view('pages/inscription');
		$this->load->view('pages/footer');
	}
}

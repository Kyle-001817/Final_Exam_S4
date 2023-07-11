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
		$this->load->view('pages/inscription');
		$this->load->view('pages/footer');
	}

	public function getChoix(){
		$name = $this->input->post('poids');
		$genre = $this->input->post('choice');
		// Dans votre contrôleur actuel
		$redirectUrl = site_url('Controller/proposition') . '?name=' . urlencode($name) . '&genre=' . urlencode($genre);
		redirect($redirectUrl);
	}
}

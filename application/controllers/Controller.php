<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	public function information_user()
	{
		$this->load->view('template', array('content'=>'information_user'));

	}
	public function insert_information()
	{
		$this->load->model('functions');
		$id = $this->session->userdata('idUtilisateur');
		$idUtil = $id['idUtilisateur'];
		$taille = $this->input->post('taille');
		$genre = $this->input->post('genre');
		$poids = $this->input->post('poids');
		$age = $this->input->post('age');
		$genre = $this->functions->insertInfo($idUtil,$genre,$taille,$poids,$age);
		redirect(site_url('Controller/choix'));
	}

	public function insert_user(){
		$nom = $this->input->post('name');
		$mail = $this->input->post('mail');
		$mdp = $this->input->post('password');
		$photo = $this->input->post('photo');
		$this->load->model('functions');
		$membre = $this->functions->inscription($nom, $mail, $mdp, $photo);
		redirect(site_url('Controller/information_user'));
	}

	public function choix()
	{
		$this->load->view('template', array('content'=>'choix'));
	}

	public function porte_monnaie()
	{
		$id = $this->session->userdata('idUtilisateur');
		$nomUtilisateur = $id['nomUtilisateur'];
		$photo = $id['Photo'];
		$variable = Array(
			'nomUtilisateur' => $nomUtilisateur,
			'Photo' => $photo,
		);
		$this->load->view('template', array('content'=>'porte_monnaie', 'utilisateur' => $variable));
	}	

	public function connexion()
	{
		$email = $this->input->post('mail');
		$mdp = $this->input->post('password');

		$this->load->model('functions');
		$membre = $this->functions->connexion($email, $mdp);
		
		if ($membre) {
			 $_SESSION['idUtilisateur'] = $membre;
			 $id = $_SESSION['idUtilisateur'];
			redirect(site_url('Welcome/accueil'));
		} else {
			redirect(site_url('Welcome/index'));
		}
	}

	public function deconnexion(){
		session_start();
		session_destroy();
		redirect('Welcome/index');
	}
	//JAHHHHH
	public function proposition_alimentaire(){
		$this->load->view('template', array('content'=>'proposition_alimentaire'));
	}
	public function proposition($value,$reduction){
		$this->load->model('functions');
		$prop_aliment = $this->functions->selectProposition_aliment($value,$reduction);
		$prop_sport = $this->functions->selectProposition_sport($value,$reduction);
		$duree = $this->functions->selectduree_prop($prop_aliment['duree']);
		$data = array(
			'prop_aliment' => $prop_aliment,
			'prop_sport' => $prop_sport,
			'duree' => $duree
		);
		$this->load->view('template', array('content'=>'proposition','proposition'=>$data));
	}
}

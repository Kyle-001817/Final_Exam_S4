<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	public function information_user()
	{
		$this->load->view('template', array('content'=>'information_user'));
	}
	public function choix()
	{
		$this->load->view('template', array('content'=>'choix'));
	}
	public function porte_monnaie()
	{
		// $id = $this->session->userdata('idUtilisateur');
		// $this->load->model('functions');
		// $count = $this->functions->countGeneralisation('utilisateur');
		// $utilisateur = $this->functions->SelectAllUtilisateurbyId($id);
		// $variable = Array(
		// 	'utilisateur' => $utilisateur,
		// 	'count' => $count,
		// );
		// $this->load->view('template', array('content'=>'porte_monnaie', $id));
	}	
	public function connexion (){
		$email = $this->input->post('mail');
        $mdp = $this->input->post('password');
		
        $this->load->model('functions');
        $membre = $this->functions->connexion($email,$mdp);
		if($membre){
			 echo $this->session->set_userdata('idUtilisateur',$membre);
			// redirect(site_url('Welcome/accueil'));
		}else{
			echo "false";
			// redirect(site_url('index'));
		}
    }
	public function deconnexion(){
		session_start();
		session_destroy();
		redirect('Controller');
	}
}

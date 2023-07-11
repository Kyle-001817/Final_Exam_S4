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
		$exists = $this->functions->selectInformationbyiD($idUtil);

		if($exists == null){
			$this->functions->insertInfo($idUtil,$genre,$taille,$poids,$age);
			redirect(site_url('Controller/choix'));
		}else{
			$this->functions->modifieInfo($idUtil,$genre,$taille,$poids,$age);
			redirect(site_url('Controller/choix'));
		}
	}

	public function insert_user(){
		$nom = $this->input->post('name');
		$mail = $this->input->post('mail');
		$mdp = $this->input->post('password');
		$photo = $this->input->post('photo');
		$this->load->model('functions');
		$membre = $this->functions->inscription($nom, $mail, $mdp, $photo);
		$membre1 = $this->functions->connexion($mail, $mdp);
		$_SESSION['idUtilisateur'] = $membre1;
		$id = $_SESSION['idUtilisateur'];
		redirect(site_url('Controller/information_user'));
	}

	public function choix()
	{
		$this->load->view('template', array('content'=>'choix'));
	}


	public function porte_monnaie(){
			$this->load->model('functions');
			$allcode = $this->functions->getAll('codemonnaie');
			$id = $this->session->userdata('idUtilisateur');
			$somme = $this->functions->sommeArgent($id['idUtilisateur']);
			$nomUtilisateur = $id['nomUtilisateur'];
			$information = $this->functions->selectInformationbyiD($id['idUtilisateur']);
			$IMC = $information[0]['poids']/(($information[0]['Taille']/100)*($information[0]['Taille']/100));
			$photo = $id['Photo'];
			$IMC = round($IMC,2);
			$variable = Array(
				'Imc' => $IMC,
				'nomUtilisateur' => $nomUtilisateur,
				'Photo' => $photo,
			);
			$this->load->view('template', array('content'=>'porte_monnaie', 'utilisateur' => $variable, 'allcode'=>$allcode, 'somme'=>$somme));
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

	public function proposition(){
		$this->load->model('functions');
		$name = $this->input->get('name');
		$genre = $this->input->get('genre');
		$id = $this->session->userdata('idUtilisateur');
		$prop_aliment = $this->functions->selectProposition_aliment($name,$genre);
		$prop_sport = $this->functions->selectProposition_sport($name,$genre);
		$somme = $this->functions->sommeArgent($id['idUtilisateur']);
		$duree = $this->functions->selectduree_prop($prop_aliment[0]['duree']);

		$number = array();
		for($i=0;$i<count($prop_aliment);$i++){
			$number[$i] = $i;
		}
		$triplets = $this->functions->generateTriplets($number,count($prop_aliment));
		$data = array(
			'somme' => $somme,
			'triplets' => $triplets,
			'prop_aliment' => $prop_aliment,
			'prop_sport' => $prop_sport,
			'duree' => $duree
		);
		$array = array();
		$this->load->view('template', array('content'=>'proposition_alimentaire','proposition'=>$data));
	}

	public function login_admin()
	{
		$this->load->view('template', array('content'=>'login_admin'));
	}

	
	public function connexion_admin(){
		$email = $this->input->post('email');
		$mdp = $this->input->post('password');

		$this->load->model('functions');
		$admin = $this->functions->connexion_admin($email, $mdp);
		
		if ($admin) {
			 $_SESSION['idAdmin'] = $admin;
			 $id = $_SESSION['idAdmin'];
			redirect('Controller/codeavalider');
		} else {
			redirect(site_url('Controller/login_admin'));
		}
	}
	
	public function admin()
	{
		$this->load->model('functions');
		$kaody = $this->input->post('name');
		$cody = $this->functions->selectCode($kaody);
		$misy = $this->functions->selectvalidateCode($cody[0]['idcode']);
		$code = $cody[0]['etat'];
		if($misy == null){
			if($code == 0 ){
				$idUtil = $this->session->userdata('idUtilisateur');
				$idcode = $this->functions->getIdCode($kaody);
				$codevalide = $this->functions->insertValidateCode($idcode['idcode'],$idUtil['idUtilisateur']);
				redirect('Welcome/accueil');
			}else if($code == 1){
				echo ('code deja utilise');
				redirect('Controller/porte_monnaie');
			}
		}else{
			echo ('code deja utilise');
			redirect('Controller/porte_monnaie');
		}
	
	}

	public function lapageadmin(){
		$this->load->view('template', array('content'=>'lapageadmin'));
	}

	public function codeavalider(){
		$this->load->model('functions');
		$idUtil = $this->session->userdata('idUtilisateur');
		$codeavalide = $this->functions->selectjoin($idUtil['idUtilisateur']);
		$count = $this->functions->countGeneralisation('validatecode');
		$variable=array(
			'codeavalide'=> $codeavalide,
			'count' => $count
		);

		$this->load->view('template', array('content'=>'lapageadmin','codeavalide'=>$variable));
	}

	public function validerLeCode(){
		$this->load->model('functions');
		$idUtilisateur = $this->input->post('codeavalide');
		$debit = 0;
		$idcode = $this->input->post('idcode');
		$code = $this->input->post('code_code');
		$valeur = $this->functions->getValeur($idcode);
		
		$this->functions->modifieCodemonnaie(1, $code,$valeur, $idcode);
		$this->functions->insertPorte_monnaie($valeur,$idUtilisateur, $debit);
		$this->functions->Deletecode($idcode);
		redirect('Controller/codeavalider');
	}
	public function achat($debit){
		$this->load->model('functions');
		echo $debit;
		$idUtil = $this->session->userdata('idUtilisateur');
		$this->functions->insertPorte_monnaie(0,$idUtil['idUtilisateur'], $debit);
		redirect('Welcome/accueil');
	}
}

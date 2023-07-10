<?php
    defined('BASEPATH') or exit('No direct access');

    class functions extends CI_Model {
        public function connexion($mail,$mdp) {
           $email = $this->db->where('mailUtilisateur',$mail);
		   $pass = $this->db->where('mdpUtilisateur',$mdp);
		   $query = $this->db->get('utilisateur');

		   if($query->num_rows() >0){
				$utilisateur = $query->row();
				return $utilisateur->idUtilisateur;
		   }else{
			return false;
		   }
        }

		public function inscription($nom,$mdp,$photo){
            $requete = "insert into utilisateur values (default,'%s','%s','%s)";
            $requete = sprintf($requete,$nom,$mdp,$photo);
            $this->db->query($requete);
        }

		public function insertGeneraliser($array,$table){
			$this->db->insert($table,$array);
			$this->db->get($table);
		}

		public function insertPorte_monnaie($lesPorte_monnaie){															
            $this->db->insert('porte_monnaie',$lesPorte_monnaie);
			$this->db->get('porte_monnaie');
		}

		public function SelectAllUtilisateurbyId($id) {
            $requete =  "select * from utilisateur where idUtilisateur=".$id;
            $result = $this->db->query($requete);
            $array = array();
            foreach($result->result_array() as $res){
                $ar = array(
                    'idUtilisateur' => $res['idUtilisateur'],
                    'nomUtilisateur' => $res['nomUtilisateur'],
                    'mailUtilisateur' => $res['mailUtilisateur'],
                    'mdpUtilisateur' => $res['mdpUtilisateur'],
                    'photo' => $res['photo']
                );
                array_push($array,$ar);
            }
            return $array;
        }
		public function countGeneralisation($table){
            return $this->db->count_all($table);
        }
}
?>

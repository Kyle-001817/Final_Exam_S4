<?php
    defined('BASEPATH') or exit('No direct access');

    class functions extends CI_Model {
        public function connexion($mail,$mdp) {
            $requete =  "select * from utilisateur where Email='".$mail."' and Mot_de_passe='".$mdp."'";
            $result = $this->db->query($requete);
            $array = $result->row_array();
            return $array;
        }

		public function inscription($nom,$mail,$mdp,$photo){
            $requete = "insert into utilisateur values (default,'%s','%s','%s','%s')";
            $requete = sprintf($requete,$nom,$mail,$mdp,$photo);
            $this->db->query($requete);
        }

		public function insertInfo($id,$genre,$taille,$poids,$age){
            $requete = "insert into information values (%s,%s,%s,%s,%s)";
            $requete = sprintf($requete,$id,$genre,$taille,$poids,$age);
            $this->db->query($requete);
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
                    'Email' => $res['Email'],
                    'Mot_de_passe' => $res['Mot_de_passe'],
                    'Photo' => $res['Photo']
                );
                array_push($array,$ar);
            }
            return $array;
        }

		public function getAll($table){
            $result = array();
            $query = $this->db->query("SELECT *FROM $table");
            foreach ($query->result_array() as $row){
                foreach($row as $key=>$value){
                    $result[$key][] = $value;
                }
            }
            return $result;
        }

		public function countGeneralisation($table){
            return $this->db->count_all($table);
        }

		//jahhhhhhhhhhhh
		public function selectProposition_aliment($value,$reduction){
			$niveau = $this->Functions->niveau($value);
		
			if($reduction == 1){
				$requete1 =  "select * from pro_alimentaire_reduction where niveau=".$niveau;
			}else{
				$requete1 =  "select * from pro_alimentaire_augment where niveau=".$niveau;
			}
				
			$result1 = $this->db->query($requete1);
	
			$array = array();
			foreach($result1->result_array() as $res1){
				$ar = array(
					'niveau' => $res1['niveau'],
					'poidsInf' => $res1['poidsInf'],
					'poidsMax' => $res1['poidsMax'],
					'idproduits' => $res1['idproduits'],
					'duree' => $res1['duree']
				);
				array_push($array,$ar);
			}
			return $array;
		}
	
		public function selectProposition_sport($value,$reduction){
			$niveau = $this->Functions->niveau($value);
			if($reduction == 1){
				$requete2 =  "select * from pro_sportif_reduction where niveau=".$niveau;
			}else{
				$requete2 =  "select * from pro_sportif_augment where niveau=".$niveau;
			}
	
			$result2 = $this->db->query($requete2);
	
			$array = array();
			foreach($result2->result_array() as $res1){
				$ar = array(
					'niveau' => $res1['niveau'],
					'poidsInf' => $res1['poidsInf'],
					'poidsMax' => $res1['poidsMax'],
					'idsport' => $res1['idsport'],
					'nbr_exercice' => $res1['nbr_exercice']
				);
				array_push($array,$ar);
			}
	
			return $array;
		}
	
		public function selectduree_prop($duree){
			$requete = "select * from duree_proposition where duree=".$duree;
			$result = $this->db->query($requete);
	
			$array = array();
			foreach($result->result_array() as $res){
				$ar = array(
					'duree' => $res['duree'],
					'poidsmin' => $res['poidsmin'],
					'poidsmax' => $res['poidsmax'],
					'duree_prop' => $res['duree_prop'],
					'situation' => $res['situation']
				);
				array_push($array,$ar);
			}
			return $array;
		}
	
		public function niveau($value){
			if($value<=25 && $value>=20){
				$niveau = 1;
			}if($value<=20 && $value>=15){
				$niveau = 2;
			}if($value<=15 && $value>=10){
				$niveau = 3;
			}if($value<=10 && $value>=5){
				$niveau = 5;
			}
	
			return $niveau;
		}
		public function modifieCodemonnaie($code_code, $valeur, $idcode){
			return $query = $this->db->query("UPDATE codemonnaie SET idcode = ".$idcode.", code_code='".$code_code."', etat=".1.",valeur=".$valeur." WHERE idcode=".$idcode);
		}
}
?>

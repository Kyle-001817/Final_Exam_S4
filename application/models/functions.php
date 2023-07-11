<?php
    defined('BASEPATH') or exit('No direct access');

    class functions extends CI_Model {
        public function connexion($mail,$mdp) {
            $requete =  "select * from utilisateur where Email='".$mail."' and Mot_de_passe='".$mdp."'";
            $result = $this->db->query($requete);
            $array = $result->row_array();
            return $array;
        }

		public function connexion_admin($mail,$mdp) {
            $requete =  "select * from Admin where email='".$mail."' and mdpAdmin='".$mdp."'";
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

		public function selectjoin($id){
			$requete =  "select * from utilisateur join  validatecode on validatecode.idUtilisateur=utilisateur.idUtilisateur join codemonnaie on codemonnaie.idcode=validatecode.idcode where utilisateur.idUtilisateur=".$id;
			$result = $this->db->query($requete);
			$array = array();
            foreach($result->result_array() as $res){
                $ar = array(
                    'idUtilisateur' => $res['idUtilisateur'],
                    'nomUtilisateur' => $res['nomUtilisateur'],
                    'Email' => $res['Email'],
                    'Mot_de_passe' => $res['Mot_de_passe'],
                    'Photo' => $res['Photo'],
					'idcode' => $res['idcode'],
					'code_code' => $res['code_code'],
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

		//jahhhhhhhhhhhh
		public function selectProposition_aliment($value,$reduction){
			$niveau = $this->functions->niveau($value);
		
			if($reduction == 1){
				$requete1 =  "select * from pro_alimentaire_reduction join produits on produits.idproduits=pro_alimentaire_reduction.idproduits where niveau=".$niveau;
			}else{
				$requete1 =  "select * from pro_alimentaire_augment join produits on produits.idproduits=pro_alimentaire_augment.idproduits where niveau=".$niveau;
			}
				
			$result1 = $this->db->query($requete1);
	
			$array = array();
			foreach($result1->result_array() as $res1){
				$ar = array(
					'niveau' => $res1['niveau'],
					'poidsInf' => $res1['poidsInf'],
					'poidsMax' => $res1['poidsMax'],
					'idproduits' => $res1['idproduits'],
					'duree' => $res1['duree'],
					'nom_produits' =>$res1['nom_produits'],
					'photo_produits' =>$res1['photo_produits'],
					'prixUnitaire' =>$res1['prixUnitaire']
				);
				array_push($array,$ar);
			}
			return $array;
		}
	
		public function selectProposition_sport($value,$reduction){
			$niveau = $this->functions->niveau($value);
			if($reduction == 1){
				$requete2 =  "select * from pro_sportif_reduction join pratique on pratique.idsport = pro_sportif_reduction.idsport where niveau=".$niveau;
			}else{
				$requete2 =  "select * from pro_sportif_augment join pratique on pratique.idsport=pro_sportif_augment.idsport where niveau=".$niveau;
			}
	
			$result2 = $this->db->query($requete2);
	
			$array = array();
			foreach($result2->result_array() as $res1){
				$ar = array(
					'niveau' => $res1['niveau'],
					'poidsInf' => $res1['poidsInf'],
					'poidsMax' => $res1['poidsMax'],
					'idsport' => $res1['idsport'],
					'nbr_exercice' => $res1['nbr_exercice'],
					'nom_sport' => $res1['nom_sport'],
					'photo_sport' => $res1['photo_sport']

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

		public function modifieInfo($idutilisateur,$genre, $taille, $poids,$age){
			return $query = $this->db->query("UPDATE Information SET idUtilisateur=".$idutilisateur.", Genre=".$genre.", Taille='".$taille."',poids=".$poids." WHERE idutilisateur=".$idutilisateur);
		}

		public function selectInformationbyiD($idUtilisateur){
			$requete = "select * from information where idUtilisateur=".$idUtilisateur;
			$result = $this->db->query($requete);
	
			$array = array();
			foreach($result->result_array() as $res){
				$ar = array(
					'Genre' => $res['Genre'],
					'Taille' => $res['Taille'],
					'poids' => $res['poids'],
					'age' => $res['age']
				);
				array_push($array,$ar);
			}
			return $array;
		}
	
		public function niveau($value){
			$niveau = 0;
			if($value<=25 && $value>20){
				$niveau = 1;
			}if($value<=20 && $value>15){
				$niveau = 2;
			}if($value<=15 && $value>10){
				$niveau = 3;
			}if($value<=10 && $value>=5){
				$niveau = 4;
			}
	
			return $niveau;
		}
		public function modifieCodemonnaie($etat,$code_code, $valeur, $idcode){
			return $query = $this->db->query("UPDATE codemonnaie SET idcode = ".$idcode.", code_code='".$code_code."', etat=".$etat.",valeur=".$valeur." WHERE idcode=".$idcode);
		}

	public function generateTriplets($number,$taille) {
		$triplets = [];
		$digits = array();
		for($i=0;$i<$taille;$i++){
			array_push($digits,$number[$i]);
		}
		
		foreach ($digits as $digit) {
			if ($digit < 0 || $digit > $taille) {
				return $triplets;
			}
		}

		// Générer les triplets
		while (count($triplets) < 7) {
			$randomDigits = array_rand($digits, 3);
			$digitIndex1 = $randomDigits[0];
			$digitIndex2 = $randomDigits[1];
			$digitIndex3 = $randomDigits[2];

			// Vérifier si les triplets sont tous différents
			if ($digitIndex1 != $digitIndex2 && $digitIndex1 != $digitIndex3 && $digitIndex2 != $digitIndex3) {
				$triplets[] = [$digits[$digitIndex1], $digits[$digitIndex2], $digits[$digitIndex3]];
			}
		}

    return $triplets;
}

public function insertValidateCode($idcode,$idUtilisateur)
		{															
			$requete = "insert into validatecode values (%s,%s)";
			$requete = sprintf($requete,$idcode,$idUtilisateur);
			$this->db->query($requete);
		}

		public function selectCode($code){
			$requete = "select * from codemonnaie where code_code='".$code."'";
            $result = $this->db->query($requete);
			$valeur = array();
			foreach($result->result_array() as $res){
				$ar = array(
					'idcode' => $res['idcode'],
					'code_code' => $res['code_code'],
					'etat' => $res['etat'],
					'valeur' => $res['valeur']
				);
				array_push($valeur,$ar);
			}
			return $valeur;
		}

		public function getIdCode($code){
            $requete = "select idcode from codemonnaie where code_code='".$code."'";
            $result = $this->db->query($requete);
            $idcode = $result->row_array();
            return $idcode;
        }

		public function getValeur($code){
			$requete = "select valeur from codemonnaie where idcode='".$code."'";
			echo $requete;
			$result = $this->db->query($requete);
			$valeur =0;
			foreach($result->result_array() as $res){
					$valeur = $res['valeur'];
			}
			return $valeur;
		}

		public function countGeneralisation($table){
            return $this->db->count_all($table);
        }

		public function insertPorte_monnaie($montant,$idutil, $debit){
			$requete = "insert into porte_monnaie values (default,%s,%s, %s)";
			$requete = sprintf($requete,$montant,$idutil, $debit);
			$this->db->query($requete);
		}

		public function selectvalidateCode($idcode){
			$requete = "select idcode from validatecode where idcode=".$idcode;
            $result = $this->db->query($requete);
			$valeur = 0;
			foreach($result->result_array() as $res){
				$valeur = $res['idcode'];
			}
			return $valeur;
		}

		public function Deletecode($idcode){
			return $query = $this->db->query("Delete from validatecode where idcode=".$idcode);
		}

		public function CalcIMC($poids,$taille){
			$IMC = $poids/(($taille/100)*($taille/100));
			return $IMC;
		}

		public function sommeArgent($idUtilisateur){
			$requete =  "select sum(montant) as somme ,sum(debit) as moin from porte_monnaie where idUtilisateur=".$idUtilisateur;
			$result = $this->db->query($requete);
			foreach($result->result_array() as $res){
				$valeur = $res['somme'];
				$valeur2 = $res['moin'];
			}
			
		return $valeur-$valeur2;
		}
}
?>

<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
    class ProduitDB extends Model{

		//La base de données samane_test est dans view/test
		//Pour tester importer la
        public function __construct(){
            parent::__construct();
        }

        public function getProduit($ID)
        {
            $sql = "SELECT *
                     FROM produits
                     WHERE produits.id = ".$ID;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }

		public function addProduit($refP, $libP, $qtStock){
			$sql = "INSERT INTO produits VALUES(null, '$refP', '$libP', '$qtStock')";
			if($this->db != null)
			{
				$this->db->exec($sql);
				return $this->db->lastInsertId();//Si la clé primaire est auto_increment
											 //sinon return $this->db->exec($sql);
			}else{
				return null;
			}
		}

		public function deleteProduit($id){
			$sql = "DELETE FROM produits WHERE id = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}

		public function updateProduit($id, $refP, $libP, $qtStock){
			$sql = "UPDATE produits SET refP = '$refP',
            libP = '$libP',
            qtStock = '$qtStock'
						WHERE id = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}

		public function listeProduit(){
			$sql = "SELECT * FROM produits";

			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}

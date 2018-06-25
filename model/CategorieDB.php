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
    class CategorieDB extends Model{

		//La base de données samane_test est dans view/test
		//Pour tester importer la
        public function __construct(){
            parent::__construct();
        }

        public function getCategorie($ID)
        {
            $sql = "SELECT *
                     FROM categorie
                     WHERE categorie.idC = ".$ID;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }

		public function addCategorie($libC){
			$sql = "INSERT INTO categorie VALUES(null, '$libC')";
			if($this->db != null)
			{
				$this->db->exec($sql);
				return $this->db->lastInsertId();//Si la clé primaire est auto_increment
											 //sinon return $this->db->exec($sql);
			}else{
				return null;
			}
		}

		public function deleteCategorie($id){
			$sql = "DELETE FROM categorie WHERE idC = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}

		public function updateCategorie($idC, $libC){
			$sql = "UPDATE categorie SET libC = '$libC'
						WHERE idC = $idC";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}

		public function listeCategorie(){
			$sql = "SELECT * FROM categorie";

			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}

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
    class Produit extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model
            require_once 'model/ProduitDB.php';
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
        //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){
            return $this->view->load("produit/index");
        }

        public function getID($id){
            $data['id'] = $id;

            return $this->view->load("produit/get_id", $data);
        }

        public function get($id){
            //Instanciation du model
            $tdb = new ProduitDB();

            $data['produit'] = $tdb->getProduit($id);

            return $this->view->load("produit/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $tdb = new ProduitDB();

            $data['produits'] = $tdb->listeProduit();

            return $this->view->load("produit/liste", $data);
        }


		public function add(){
			//Instanciation du model
            $tdb = new ProduitDB();
			//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
                if(!empty($refP) && !empty($libP) && !empty($qtStock)) {
                    $ok = $tdb->addProduit($refP, $libP, $qtStock);
                    $data['ok'] = $ok;
                }
                return $this->view->load("produit/add", $data);
            }else{
                return $this->view->load("produit/add");
            }
        }
		public function update(){
			//Instanciation du model
            $tdb = new ProduitDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($id) && !empty($refP) && !empty($libP) && !empty($qtStock)) {
                    $ok = $tdb->updateProduit($id, $refP, $libP, $qtStock);
                }
            }

            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($id){
            //Instanciation du model
            $tdb = new ProduitDB();
			//Supression
			$tdb->deleteProduit($id);
			//Retour vers la liste
            return $this->liste();
        }

		public function edit($id){

            //Instanciation du model
            $tdb = new ProduitDB();
			//Supression
			$data['produit'] = $tdb->getProduit($id);
			//chargement de la vue edit.html
            return $this->view->load("produit/edit", $data);
        }
    }
?>

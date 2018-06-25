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
    class Categorie extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model
            require_once 'model/CategorieDB.php';
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
        //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){
            return $this->view->load("categorie/index");
        }

        public function getID($id){
            $data['idC'] = $id;

            return $this->view->load("categorie/get_id", $data);
        }

        public function get($id){
            //Instanciation du model
            $tdb = new CategorieDB();

            $data['categorie'] = $tdb->getCategorie($id);

            return $this->view->load("categorie/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $tdb = new CategorieDB();

            $data['categories'] = $tdb->listeCategorie();

            return $this->view->load("categorie/liste", $data);
        }


		public function add(){
			//Instanciation du model
            $tdb = new CategorieDB();
			//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
                if(!empty($libC)) {
                    $ok = $tdb->addCategorie($libC);
                    $data['ok'] = $ok;
                }
                return $this->view->load("categorie/add", $data);
            }else{
                return $this->view->load("categorie/add");
            }
        }
		public function update(){
			//Instanciation du model
            $tdb = new CategorieDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($idC) && !empty($libC)) {
                    $ok = $tdb->updateCategorie($idC, $libC);
                }
            }

            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($id){
            //Instanciation du model
            $tdb = new CategorieDB();
			//Supression
			$tdb->deleteCategorie($id);
			//Retour vers la liste
            return $this->liste();
        }

		public function edit($id){

            //Instanciation du model
            $tdb = new CategorieDB();
			//Supression
			$data['categorie'] = $tdb->getCategorie($id);
			//chargement de la vue edit.html
            return $this->view->load("categorie/edit", $data);
        }
    }
?>

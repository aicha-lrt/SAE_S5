<?php


class Controller_recherche extends Controller
{
    public function action_page_recherche()
    {
		/*
		Permet d'accéder a la page de recherche.
		Cette fonction est de complexité O(1) c'est a dire constante.
		 */

        $m = Model::getModel();
        $villes=$m->getCity();

        //var_dump($villes); 
        $_SESSION['villes'] = $villes;

        $data =['villes'=>$villes];
        $this->render("recherche_salon", $data);
    }

    public function action_recherche_salle_par_ville(){
            if (isset($_POST['recherche_salle'])) {
                if (isset($_POST['villes'])) {

                    $villes = $_POST['villes'];

                    $m = Model::getModel();

                    $salles = $m->getSallesParVille($villes);

                    $data = ['salles' => $salles];
                    $this->render("recherche_salon", $data);
                }
            }
            header("Location: ./?controller=recherche");
        
    }
	

	
    public function action_default()
    {
        $this->action_page_recherche();
    }
}
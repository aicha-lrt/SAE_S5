<?php


class Controller_accueil extends Controller
{
    public function action_accueil()
    {
		/*
		Permet d'accéder a la page d'accueil.
		Cette fonction est de complexité O(1) c'est a dire constante.
		 */
        if (isset($_SESSION["mail"])){
            $this->render("accueil_apres_co");
        }
        else{
            $this->render("page_accueil",[],"html");
        }
        
    }

    public function action_FAQ()
    {
		/*
		Permet d'accéder a la page d'accueil.
		Cette fonction est de complexité O(1) c'est a dire constante.
		 */

        $this->render("faq",[],"html");
    }
	
	
    public function action_default()
    {
        $this->action_accueil();
    }
}
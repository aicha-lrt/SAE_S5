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

    public function action_page_ajout_faq()
    {
		/*
		Permet d'accéder a la page d'accueil.
		Cette fonction est de complexité O(1) c'est a dire constante.
		 */

        $this->render("page_verif",[]);
    }

    public function action_gestion_FAQ(){
		/*
		Permet d'accéder a la page d'accueil.
		Cette fonction est de complexité O(1) c'est a dire constante.
		 */
       
        if(isset($_POST["Faq_Question"]) && trim($_POST["Faq_Question"]) !== "" && isset($_POST["Faq_Response"]) && trim($_POST["Faq_Response"]) !== "" ){
            $m = Model::getModel();
            $Questions_Faq=$m->addFaq($_POST["Faq_Question"],$_POST["Faq_Response"]);
       
        }
        
        $data=["Questions_Faq" => $Questions_Faq];
    
        $this->render("page_verif", $data);
    }


    public function action_FAQ()
    {
		/*
		Permet d'accéder a la page d'accueil.
		Cette fonction est de complexité O(1) c'est a dire constante.
		 */
        $m = Model::getModel();
        $Questions_Faq=$m->getFaq();
        $data=["Questions_Faq" => $Questions_Faq];

        $this->render("faq",$data);
    }

	
    public function action_default()
    {
        $this->action_accueil();
    }
}
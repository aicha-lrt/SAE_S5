<?php


class Controller_inscription extends Controller
{
    public function action_page_inscription()
    {
		/*
		Permet d'accéder a la page d'accueil.
		Cette fonction est de complexité O(1) c'est a dire constante.
		 */

        $data = [
			"title"=>"Page d'Accueil",
        ];
        $this->render("page_inscription", $data);
    }

    public function action_inscription()
    {
		/*
		Permet d'accéder a la page d'accueil.
		Cette fonction est de complexité O(1) c'est a dire constante.
		 */
        $data=[];
        if(isset($_POST["mail"]) && isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["type"]) && isset($_POST["mdp"]) && isset($_POST["mdp_confirm"] ) ){
            $m = Model::getModel();
            $creation_reussi=$m->addUser($_POST["firstName"],$_POST["lastName"],$_POST["mail"],$_POST["mdp"],$_POST["mdp_confirm"],$_POST["type"]);
            $data=["success"=>$creation_reussi];
            if ($creation_reussi){
                $_SESSION["mail"]=$_POST["mail"];
                $_SESSION["connecte"]=true;
                header("Location: ./?controller=connexion&action=connexion_user");
            }
        }
        else if(!isset($_POST["mail"]) || !isset($_POST["firstName"]) || !isset($_POST["lastName"]) || !isset($_POST["type"]) || !isset($_POST["mdp"]) || !isset($_POST["mdp_confirm"] )){
            
            $this->action_page_inscription();
        }
        else{
            $data=["message"=>"Message d'erreur !!!"];
        }
        $this->render("page_inscription", $data);
    }
	
	
    public function action_default()
    {
        $this->action_page_inscription();
    }
}
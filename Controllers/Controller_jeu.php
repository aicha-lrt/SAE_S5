<?php


class Controller_jeu extends Controller
{
    public function action_page_jeu()
    {
		/*
		Permet d'accéder a la page d'accueil.
		Cette fonction est de complexité O(1) c'est a dire constante.
		 */
        if(isset($_SESSION['User_ID'])){
            $m = Model::getModel();
           // $commentaires=$m->getCommentaires();
            $this->render("jeu");
        }
        header("Location: ./");
        
    }


    /*public function action_page_mp()
    {
        $m = Model::getModel();
        if (isset($_GET["personne"]) && $m->getID($_GET["personne"])){
            $mp=$m->getMp($_SESSION["id"],$_GET["personne"]);
            $this->render("page_mp", $mp);
        }
        else {
            $this->action_default();
        }
        
        
        
    }*/

    public function action_ajout_message()
    {
		/*
		Permet d'accéder a la page d'accueil.
		Cette fonction est de complexité O(1) c'est a dire constante.
		 */
        $data=[];
        if(isset($_POST["commentaire"]) ){
            if (strlen($_POST["commentaire"])>0){
                $m = Model::getModel();
                $creation_reussi=$m->addCommentaire($_POST["commentaire"]);
            }
        }
        header("Location: ./?controller=chat");
    }
	
    /*public function action_ajout_message()
    {
        if(isset($_POST["message"]) && isset($_POST["id"]*//*a mettre en hidden si possible*//*) ){
            $m = Model::getModel();
            $creation_reussi=$m->addMp($_POST["message"],$_POST["id"]);
            $data=["success"=>$creation_reussi];
        }
        else if(!isset($_POST["message"]) || !isset($_POST["id"])){
            $this->action_page_inscription();
        }
        else{
            $data=["message"=>"Message d'erreur !!!"];
        }
        $this->render("page_commentaire", $data);
    }*/
	
    public function action_default()
    {
        $this->action_page_jeu();
    }
}
<?php


class Controller_admin extends Controller
{
    public function action_liste_users()
    {
		/*
		Permet d'accéder a la page d'accueil.
		Cette fonction est de complexité O(1) c'est a dire constante.
		 */
        if (isset($_SESSION["User_Type"]) && $_SESSION["User_Type"]=="admin"){
            $m = Model::getModel();
            $users=$m->getUsers();
            $this->render("admin_liste_users",["users" => $users]);
        }
        header("Location: ./");
        
    }

    public function action_supprUser()
    {
        if (isset($_SESSION["User_Type"]) && $_SESSION["User_Type"]=="admin" && isset($_POST["id"]) && $_POST["id"]!=$_SESSION["User_ID"] && isset($_POST["mail"])){
            $m = Model::getModel();
            if (($m->getInfosUser($_POST["mail"]))["User_Type"]!="admin"){
                $m->deleteUser($_POST["id"],$_POST["mail"]);
            }
        }
        header("Location: ./?controller=admin");
    }

    public function action_user_creator()
    {
		if (isset($_SESSION["User_Type"]) && $_SESSION["User_Type"]=="admin"){
            $this->render("admin_create_user");
        }
        header("Location: ./");
    }

    public function action_create_user()
    {
        if (isset($_SESSION["User_Type"]) && $_SESSION["User_Type"]=="admin"){
            $data=[];
            if(isset($_POST["mail"]) && isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["type"]) && isset($_POST["mdp"]) && isset($_POST["mdp_confirm"] ) ){
                $m = Model::getModel();
                $creation_reussi=$m->addUser($_POST["firstName"],$_POST["lastName"],$_POST["mail"],$_POST["mdp"],$_POST["mdp_confirm"],$_POST["type"]);
                $data=["success"=>$creation_reussi];
                if ($creation_reussi){
                    header("Location: ./?controller=admin&action=user_creator");
                }
                else {
                    $data=["message"=>"Un ou des éléments sont invalide !"];
                }
            }
            else if(!isset($_POST["mail"]) || !isset($_POST["firstName"]) || !isset($_POST["lastName"]) || !isset($_POST["type"]) || !isset($_POST["mdp"]) || !isset($_POST["mdp_confirm"] )){
                
                $this->action_page_inscription();
            }
            else{
                $data=["message"=>"Message d'erreur !!!"];
            }
            $this->render("admin_create_user", $data);
        }
        header("Location: ./");
    }
	
	
    public function action_default()
    {
        $this->action_liste_users();
    }
}
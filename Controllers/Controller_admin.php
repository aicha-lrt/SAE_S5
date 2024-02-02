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
	
	
    public function action_default()
    {
        $this->action_liste_users();
    }
}
<?php


class Controller_moncompte extends Controller
{
    public function action_page_moncompte()
    {
		/*
		Permet d'accéder a la page du chat général.
		Cette fonction est de complexité O(1) c'est a dire constante.
		 */

        $this->render("moncompte");
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

    public function action_changer_informations_profil()
    {
		/*
		Permet d'accéder a la page d'accueil.
		Cette fonction est de complexité O(1) c'est a dire constante.
		 */
        if (isset($_SESSION["message"])){
            unset($_SESSION["message"]);
        }

        if(isset($_POST["firstName"]) && isset($_POST["lastName"]) && ($_POST["lastName"]!=$_SESSION["User_Last_Name"] || $_POST["firstName"]!=$_SESSION["User_First_Name"])){
            if(fsNameVerify($_POST["firstName"]) && fsNameVerify($_POST["lastName"])){
                $m = Model::getModel();
                $change=$m->setNames($_POST["firstName"],$_POST["lastName"]);

                $userData = $m->getInfosUser($_SESSION["mail"]);
                $_SESSION["User_Last_Name"] = $userData['User_Last_Name'];
                $_SESSION["User_First_Name"] = $userData['User_First_Name'];
            } else{
                $_SESSION["message"]="Les conditions ne sont pas respecter";
            }
        }
        header("Location: ./?controller=moncompte");
    }
	
	
    public function action_default()
    {
        $this->action_page_moncompte();
    }
}
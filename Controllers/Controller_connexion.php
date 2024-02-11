<?php




class Controller_connexion extends Controller{

    public function action_page_connexion(){
    /*
    Permet d'accéder a la page d'accueil.
    Cette fonction est de complexité O(1) c'est a dire constante.
    */
    if(!isset($_SESSION["mail"])){
         $this->render("page_connexion", []);
        }
    header("Location: ./");
    
    }


    public function action_default() {
        $this->action_page_connexion();
    }



    /**
     * * Action qui permet de verifier si les adresses mail et les mots de passes indiqué par l'utilisateur sont présent dans la base de données
    */

    public function action_connexion_user() {

        
        $m = Model::getModel();
        if (isset($_SESSION["message"])){
            unset($_SESSION["message"]);
        }
        
            if (isset($_POST["mail"]) && trim($_POST["mail"]) !== "" && isset($_POST["mdp"]) && trim($_POST["mdp"]) !== "") {
                
                $password = $m->getPassword($_POST["mail"]);
                $_SESSION["test"]=[$password !== false,password_verify($_POST["mdp"], $password['User_Password'])];
                if ($password !== false && password_verify($_POST["mdp"], $password['User_Password'])) {
        
                    $_SESSION["connecte"] = true;
                    $_SESSION["mail"] = $_POST["mail"];

                    $userData = $m->getInfosUser($_POST["mail"]);

                    $_SESSION["User_ID"] = $userData['User_ID'];
                    $_SESSION["User_Last_Name"] = $userData['User_Last_Name'];
                    $_SESSION["User_First_Name"] = $userData['User_First_Name'];
                    $_SESSION["User_Type"] = $userData['User_Type'];
                    $_SESSION["User_Path_Avatar"] = $userData['User_Path_Avatar'];

                    header("Location: ./");
                }else {
                    $message = "Mot de passe ou adresse e-mail incorrect";
                    $_SESSION["message"] = $message;
                    header("Location: ./?controller=connexion");
                }
            }
            else if (isset($_SESSION["connecte"]) && $_SESSION["connecte"] && isset($_SESSION["mail"])){

                    $userData = $m->getInfosUser($_SESSION["mail"]);

                    $_SESSION["User_ID"] = $userData['User_ID'];
                    $_SESSION["User_Last_Name"] = $userData['User_Last_Name'];
                    $_SESSION["User_First_Name"] = $userData['User_First_Name'];
                    $_SESSION["User_Type"] = $userData['User_Type'];
                    $_SESSION["User_Path_Avatar"] = $userData['User_Path_Avatar'];

                    header("Location: ./");
                }
            else {
                header("Location: ./?controller=connexion");
            }
            
            
            
    }

    public function action_deconnexion(){
        session_unset();
        header("Location: ./?controller=connexion");
        }

}

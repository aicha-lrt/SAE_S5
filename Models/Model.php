<?php

class Model
{
    /**
     * Attribut contenant l'instance PDO
     */
    private $bd;

    /**
     * Attribut statique qui contiendra l'unique instance de Model
     */
    private static $instance = null;

    /**
     * Constructeur : effectue la connexion à la base de données.
     */
    private function __construct()
    {
        include "credentials.php";
        $this->bd = new PDO($dsn, $login, $mdp);
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->bd->query("SET nameS 'utf8'");
    }

    /**
     * Méthode permettant de récupérer un modèle car le constructeur est privé (Implémentation du Design Pattern Singleton)
     */
    public static function getModel()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }






	/**
	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * /
	 * 						Les méthodes GET.  	  					   /
	 * 												  				   /
	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * /
	 */




	/*public function getFirstPossibleID(){
		$reqPossibleId=$this->bd->prepare("SELECT User_ID FROM User");
		$reqPossibleId ->execute();
		$IDs=$reqPossibleId->fetchAll(PDO::FETCH_ASSOC);
		$i=0;
		$find=false;
		while ($i < count($IDs) && !$find) {
						
			$id=$IDs[$i]["User_ID"];
			if ($id!=$i+1){
				$find=true;
			}
			$i++;
		}
		if($i==0){$i=1;}
		else if(count($IDs)==$i && !$find){return $i+1;}
		return $i;
	} //a mettre en auto incremente*/



	public function getID($mail){
		$reqGet=$this->bd->prepare("SELECT User_ID FROM User WHERE User_Mail_Adress=:mail");
		$reqGet->bindValue(':mail',e($mail));
		$reqGet ->execute();
		return $reqGet->fetch(PDO::FETCH_ASSOC)["User_ID"];
	} 


	public function getMail($mail){
		$reqGet=$this->bd->prepare("SELECT User_Mail_Adress FROM User WHERE User_Mail_Adress=:mail");
		$reqGet->bindValue(':mail',e($mail));
		$reqGet ->execute();
		return (bool) $reqGet->rowCount();
	} 
	
	public function getCommentaires(){
		$reqGet=$this->bd->prepare("SELECT * FROM message INNER JOIN envoie ON message.Message_ID=envoie.Message_ID INNER JOIN user ON user.User_ID=envoie.User_ID ORDER BY Message_Date");
		$reqGet ->execute();
		$com=$reqGet->fetchAll(PDO::FETCH_ASSOC);
		$retour=[];
		$first=count($com)-20;
		if ($first<0){$first=0;}
		if (count($com)>0){
			$retour=array_slice($com, $first);
		}
		return $retour;
	} 

	public function getMessagesId($userId){
		$reqGet=$this->bd->prepare("SELECT Message_ID FROM envoie WHERE User_ID=:userId");
		$reqGet->bindValue(':userId',$userId);
		$reqGet ->execute();
		return $reqGet->fetchAll(PDO::FETCH_ASSOC);
	} 

	public function getInfosUser($mail) {
		$reqGet = $this->bd->prepare('SELECT * FROM User WHERE User_Mail_Adress=:mail');
		$reqGet->bindValue(':mail', $mail);
		$reqGet->execute();
		return $reqGet->fetch(PDO::FETCH_ASSOC);
	}

	public function getUsers() {
		$reqGet = $this->bd->prepare('SELECT * FROM User');
		$reqGet->execute();
		return $reqGet->fetchAll(PDO::FETCH_ASSOC);
	}
	
	
	public function isInDataBaseUser($mail)
	{
		return $this->getInfosUser($mail) !== false;
	}
	

	public function getPassword($mail) {
		$reqGet = $this->bd->prepare('SELECT User_Password FROM User where User_Mail_Adress = :mail');
		$reqGet->bindValue(":mail", $mail);
		$reqGet->execute();
		return $reqGet->fetch(PDO::FETCH_ASSOC);
	}


	public function getCity(){
		$reqGet = $this->bd->prepare('SELECT City_ID, City_Name, City_Code, City_Departement FROM City');
		$reqGet->execute();
		return $reqGet->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getSallesParVille($cityID) {
		$reqGet = $this->bd->prepare('SELECT Room_Escape_ID, Room_Escape_Company, Room_Escape_Name, Room_Escape_Capacity, Room_Escape_Level, Room_Escape_Duration FROM Room WHERE City_ID = :cityID');
		$reqGet->bindValue(':cityID', $cityID);
		$reqGet->execute();
		return $reqGet->fetchAll(PDO::FETCH_ASSOC);
	}


	



	/**
	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * /
	 * 						Les méthodes ADD.  	  					   /
	 * 												  				   /
	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * /
	 */

	public function addUser($firstName,$lastName,$mail,$mdp,$mdp_confirm,$type){ 

		date_default_timezone_set('Europe/Paris');
		if (mailVerify($mail) && !($this->getMail($mail)) && passwordVerify($mdp,$mdp_confirm) && fsNameVerify($firstName) && fsNameVerify($lastName) && strlen($type)<=15 && ($type=="professionnel" || $type=="particulier" || $type=="joueur")){
			//$id=$this->getFirstPossibleID();
			$dt = time();
			$datec=date( "Y-m-d", $dt);

			$av=rand(1, 28);
			
			$reqAdd=$this->bd->prepare("INSERT INTO User(User_First_Name,User_Last_Name,User_Mail_Adress,User_Password,User_Created_Account,User_Type,User_Path_Avatar) value(:firstName,:lastName,:mail,:mdp,:datec,:type,:av)");
			$reqAdd->bindValue(':firstName',$firstName);
			$reqAdd->bindValue(':lastName',$lastName);
			$reqAdd->bindValue(':mail',$mail);
			$reqAdd->bindValue(':mdp',password_hash($mdp, PASSWORD_DEFAULT));
			$reqAdd->bindValue(':datec',$datec);
			$reqAdd->bindValue(':type',$type);
			$reqAdd->bindValue(':av',"Content/img/Avatars/".$av.".png");
			$reqAdd ->execute();//Creer la personne dans la table User

			return (bool) $reqAdd->rowCount();
		}
		return false;
		
	}

	public function addCommentaire($commentaire){

		date_default_timezone_set('Europe/Paris');

		if (strlen(e($commentaire))<=150 && isset($_SESSION["User_ID"])){
			
			$dt = time();
			$datec=date("Y-m-d H:i:s", $dt);
			$type="Commentaire";
			
			//$com_corriger=exec("Content/py/com.py ".e($commentaire));

			$reqAdd=$this->bd->prepare("INSERT INTO message(Message_Content,Message_Date,Message_Type) value(:commentaire,:datec,:type)");
			$reqAdd->bindValue(':commentaire',e($commentaire));
			$reqAdd->bindValue(':datec',$datec);
			$reqAdd->bindValue(':type',$type);
			$reqAdd ->execute();//Creer la personne dans la table User
			
			$reqReccup=$this->bd->prepare("SELECT MAX(Message_ID) as max FROM message");
			$reqReccup->execute();
			$idMess=$reqReccup->fetch(PDO::FETCH_ASSOC);

			$reqLien=$this->bd->prepare("INSERT INTO envoie(User_ID,Message_ID) value(:id,:messageid)");
			$reqLien->bindValue(':id',$_SESSION["User_ID"]);
			$reqLien->bindValue(':messageid',$idMess["max"]);
			$reqLien->execute();

			return (bool) $reqLien->rowCount();
		}
		return false;
	}


	/**
	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * /
	 * 						Les méthodes SET.  	  					   /
	 * 												  				   /
	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * /
	 */
	public function setNames($firstName,$lastName){ 


			
		$reqSet=$this->bd->prepare("UPDATE User SET User_First_Name=:firstName, User_Last_Name=:lastName WHERE User_ID=:id");
		$reqSet->bindValue(':firstName',$firstName);
		$reqSet->bindValue(':lastName',$lastName);
		$reqSet->bindValue(':id',$_SESSION["User_ID"]);
		$reqSet ->execute();//Modifie les informations de la personne dans la table User

		return (bool) $reqSet->rowCount();
		
	}


	/*public function addMp($message,$id){

		date_default_timezone_set('Europe/Paris');

		if (strlen(e($message))<=150 && isset($_SESSION["id"])){
			//$id=$this->getFirstPossibleID();
			$dt = time();
			$datec=date("Y-m-d H:i:s", $dt);
			$type="Messages privée";
			
			$reqAdd=$this->bd->prepare("INSERT INTO message(Message_Content,Message_Date,Message_Type) value(:message,:datec,:type)");
			$reqAdd->bindValue(':message',$message);
			$reqAdd->bindValue(':datec',$datec);
			$reqAdd->bindValue(':type',$type);
			$reqAdd ->execute();//Creer la personne dans la table User


			return (bool) $reqAdd->rowCount();
		}
		return false;
	}*/



	/**
	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * /
	 * 						Les méthodes DELETE.  	  				   /
	 * 												  				   /
	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * /
	 */

	public function deleteUser($id,$mail){ 
		$infosC=$this->getInfosUser($mail);
		if ($infosC["User_ID"]==$id){
			$messages=$this->getMessagesId($id);

			$reqDeleteEnvoie=$this->bd->prepare("DELETE FROM Envoie WHERE User_ID=:id");
			$reqDeleteEnvoie->bindValue(':id',$id);
			$reqDeleteEnvoie ->execute();

			/*$messageDelete="DELETE FROM Message WHERE Message_ID IN (";
			foreach ($messages as $message){
				$messageDelete.="`".$message["Message_ID"]."`,";
			}
			$messageDelete.=')';*/
			foreach ($messages as $message){
				$reqDeleteMessage=$this->bd->prepare("DELETE FROM Message WHERE Message_ID=:mId");
				$reqDeleteMessage->bindValue(':mId',$message["Message_ID"]);
				$reqDeleteMessage ->execute();
			}
			
				
			$reqDeleteUser=$this->bd->prepare("DELETE FROM User WHERE User_ID=:id AND User_Mail_Adress=:mail");
			$reqDeleteUser->bindValue(':id',$id);
			$reqDeleteUser->bindValue(':mail',$mail);
			$reqDeleteUser ->execute();
			return (bool) $reqDeleteEnvoie->rowCount() && (bool) $reqDeleteMessage->rowCount() && (bool) $reqDeleteUser->rowCount();
		}

		return false;
		
	}


}
	

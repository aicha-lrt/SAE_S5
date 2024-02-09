<?php


/**
 * Fonction échappant les caractères html dans $message
 * @param string $message chaîne à échapper
 * @return string chaîne échappée
 */
function e($message)
{
    return htmlspecialchars($message, ENT_QUOTES);
}


function passwordVerify($mdp,$mdp_confirm=false){
    if ($mdp_confirm==false){
        $mdp_confirm=$mdp;
    }
    return trim(e($mdp))==$mdp && trim(e($mdp_confirm))==$mdp_confirm && $mdp==$mdp_confirm && preg_match('/^[A-Za-z0-9\*\[\]"#\$\(\)\+:;\{\}\|~\?@]{6,20}$/',$mdp) && strlen($mdp)>=6 && strlen($mdp)<=20;
}

function fsNameVerify($name){
    return strlen($name)<=50 && strlen(trim($name))>0 && preg_match("/^([A-Za-z0-9]+[ ']*)+$/",$name);
}

function mailVerify($mail){
    return e($mail)==$mail && strlen($mail)<=50 && filter_var($mail, FILTER_VALIDATE_EMAIL);
}

function affichageDate($date){
    $retour="";

    $mois=["janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre"];
	$tout=explode(" ",$date);

    date_default_timezone_set('Europe/Paris');
    $dt = time();
	$datec=date("Y-m-d", $dt);

    $jour=explode("-",$tout[0]);
    $aujourdhui=explode("-",$datec);

    if ($datec==$tout[0]){
        $retour.="Aujourd'hui ";
    }
    else if ($jour[2]==$aujourdhui[2]-1 && $jour[1]==$aujourdhui[1] && $jour[0]==$aujourdhui[0]){
        $retour.="Hier ";
        
    }
    else {
        
        $retour.="le ".$jour[2]." ".$mois[$jour[1]-1]." ".$jour[0];
    }
	$heure=explode(":",$tout[1]);
    $retour.=", à ".$heure[0]./*"h "*/":".$heure[1]/*."min "*//*.$heure[2]."s"*/;
	
	return $retour;
}


function affichageCDate($date){
    $retour="";

    $mois=["janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre"];

    $jour=explode("-",$date);

    $retour=$jour[2]." ".$mois[$jour[1]-1]." ".$jour[0];
    
	return $retour;
}
?>

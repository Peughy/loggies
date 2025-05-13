<?php
session_start();

require_once(MODEL."Reservation.php");

$reservation = new Reservation();

$filtreTypes = $reservation->getDistinctActivityInformations("type");
$filtresPrix = $reservation->getDistinctActivityInformations("prix");
$filtreHDs = $reservation->getDistinctActivityInformations("heure_debut");
$filtreHFs = $reservation->getDistinctActivityInformations("heure_fin");
$filtreCathegories = $reservation->getDistinctActivityInformations("cathegorie");

if(isset($_POST["filtre"])){
    foreach($_POST as $key => $val){
        if(!empty($val)){
            $datas = $reservation->getOneActivity($_POST);
            break;
        }
        else{
            $datas = $reservation->getActivityInformations();
        }
    }
}
else{
    $datas = $reservation->getActivityInformations();
}

if(isset($_POST["annuler"])){
    $_POST["type"] = "";
    $_POST["prix"] = "";
    $_POST["heure_debut"] = "";
    $_POST["heure_fin"] = "";
    $_POST["cathegorie"] = "";
    
    $datas = $reservation->getActivityInformations();
}

require_once(VIEW.'reservation.php');
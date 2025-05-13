<?php

session_start();

require_once(MODEL.'Profil.php');
require_once(MODEL.'Message.php');

if(!(isset($_SESSION["access"]) && $_SESSION["access"]))
    header("Location: index.php?action=signIn");

$registration = $_SESSION["registration"];


$profil = new Profil();
$message = new Message();

// user informations
$user_datas = $profil->getOnetUserInformations($registration);

// favoris informations
$favoris = $profil->getFavoris($registration);

// reservations informations
$reservations = $profil->getReservation($registration);

// payement informations
$payements = $profil->getPayement($registration);

// messages informations
$message_informations = $message->getUserMessages($registration, "individual");

// fetch price 
$prix_total = 0;

$nbr_attente = 0;
$nbr_validee = 0;
$nbr_rejetee = 0;

foreach($reservations as $reservation){

    if($reservation["etat"] == "validee" && $reservation["payer"] == "non"){
        $prix = (int) $reservation["prix"];
        $qte = (int) $reservation["quantite"];

        $prix_total += $prix * $qte;

        $nbr_validee++;
    }
    elseif($reservation["etat"] == "attente")
        $nbr_attente++;
    elseif($reservation["etat"] == "rejetee")
        $nbr_rejetee++;

}

// payement section
$display_payment = isset($_GET["payement"]) && isset($_GET["type"]) && !empty($_GET["type"]) && !empty($_GET["payement"]);

if(isset($_GET["type"]) && $_GET["type"] == "individual")
    $payement_reservation = $profil->getOneReservation($_GET["num_reservation"]);

elseif(isset($_GET["type"]) && $_GET["type"] == "all")
    $payement_reservation = $profil->getReservation($registration);


require_once(VIEW."profil.php");

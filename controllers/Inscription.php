<?php

session_start();

require_once('class/Inscription.php');
require_once('class/ModifyUser.php');
require_once(MODEL.'Gestion.php');

// to add the user

if(isset($_POST["inscription"]))
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
    
    $inscription = new Inscription();
    $inscription->setInformations($username, $email, $mdp);
}

// to modify the user

if(isset($_POST["modifier"]))
{
    $username = $_POST["name"];
    $email = $_POST["email"];
    $nbr_reservation = $_POST["nbr_reservation"];
    $date_inscription = $_POST["date_inscription"];

    $inscription = new ModifyUser();
    $inscription->setInformations($username, $email, $nbr_reservation, $date_inscription);
}


// to delete the user
if(isset($_POST["supprimer"])){

    $gestion = new Gestion();
    $rep = $gestion->deleteUser($_GET["registration"]);
    if($rep){
        header("Location: index.php?action=gestion&id=".$_GET["id"]);
    }
}

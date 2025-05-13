<?php

session_start();

require_once('class/AddActivity.php');
require_once('class/ModifyActivity.php');

require_once(MODEL.'Gestion.php');

if(isset($_POST["ajouter"]))
{
    $name = $_POST["name"];
    $prix = $_POST["prix"];
    $type = $_POST["type"];
    $temps_debut = $_POST["temps_debut"];
    $temps_fin = $_POST["temps_fin"];
    $destination = $_POST["destination"];
    $description = $_POST["description"];
    $cathegorie = $_POST["cathegorie"];

    $image = $_FILES["image"];

    $addActivity = new AddNewActivity();
    $addActivity->setInformations($name, $prix, $type, $destination, $description, $cathegorie, $temps_debut, $temps_fin, $image);
}


if(isset($_POST["modifier"]))
{
    $name = $_POST["name"];
    $prix = $_POST["prix"];
    $type = $_POST["type"];
    $temps_debut = $_POST["temps_debut"];
    $temps_fin = $_POST["temps_fin"];
    $destination = $_POST["destination"];
    $description = $_POST["description"];
    $cathegorie = $_POST["cathegorie"];
    $nbr_max = $_POST["nbr_max"];

    $modifyActivity = new ModifyActivity();
    $modifyActivity->setInformations($name, $prix, $type, $destination, $description, $cathegorie, $temps_debut, $temps_fin, $nbr_max);
}

if(isset($_POST["supprimer"]))
{
    $gestion = new Gestion();
    $activity_user = $gestion->getOneActivityInformations($_GET["numero"]);

    if(unlink("activitiesImage/".$activity_user["image"]))
    {
        $rep = $gestion->deleteActivity($_GET["numero"]);
        if($rep){
            header("Location: index.php?action=gestion&id=".$_GET["id"]);
        }
    }
}
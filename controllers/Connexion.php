<?php

require_once('class/Connexion.php');

$email = $_POST["email"];
$mdp = $_POST["mdp"];

$connexion = new Connexion();
$connexion->getInformations($email, $mdp);

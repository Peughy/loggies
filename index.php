<?php

require_once("config.php");

if(isset($_GET["action"]))
{
    if($_GET["action"] == "signIn" || $_GET["action"] == "signUp")
        require_once(VIEW."connexion.php");

    if($_GET["action"] == "gestion")
        require_once(CONTROLLER."Gestion.php");

    if($_GET["action"] == "profil")
        require_once(CONTROLLER."Profil.php");

    if($_GET["action"] == "connexion")
        require_once(CONTROLLER."Connexion.php");

    if($_GET["action"] == "inscription")
        require_once(CONTROLLER."Inscription.php");

    if($_GET["action"] == "reservation")
        require_once(CONTROLLER."Reservation.php");

    if($_GET["action"] == "reservation_infos")
        require_once(CONTROLLER."ReservationInformation.php");

    if($_GET["action"] == "addActivity")
        require_once(CONTROLLER."AddActivite.php");

    if($_GET["action"] == "addActivity")
        require_once(CONTROLLER."AddActivite.php");

    if($_GET["action"] == "error")
        require_once(VIEW."erreur.php");

    if($_GET["action"] == "logout")
        require_once(CONTROLLER."Logout.php");

    if($_GET["action"] == "addFavoris")
        require_once(CONTROLLER."ReservationInformation.php");

    if($_GET["action"] == "payement")
        require_once(CONTROLLER."Payement.php");
}
else{
    require_once(CONTROLLER."Home.php");
}
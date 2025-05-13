<?php

session_start();

if(!isset($_SESSION["access"]) && !$_SESSION["access"])
    header("Location: index.php?action=signIn");

require_once(MODEL."Reservation.php");

$reservation = new Reservation();
$data = $reservation->getActivity($_GET["numero"]);
$favoris = $reservation->getFavoris($_SESSION["registration"], $_GET["numero"]);

$nbr_reservation = $reservation->getNumberReservation($_GET["numero"], date("Y-m-d"));

// reservations

if(isset($_POST["reserver"])){
    $date = $_POST["date"];
    $qte = htmlspecialchars(trim($_POST["qte"]));
    try {
        $qte = (int) $qte;
        if($qte > 0){
            $nbr_reservation = $reservation->getNumberReservation($_GET["numero"], $date);
            
            $sum_qte = ($nbr_reservation["SUM(quantite)"] != null) ? $nbr_reservation["SUM(quantite)"] : 0;
            $reservation_max = (int) $data["reservation_max"];

            

            if((($reservation_max - $sum_qte) - $qte) < 0){
                header("Location: index.php?action=reservation_infos&numero=".$_GET["numero"]."&error=dateError");
            }
            else{
                $rep = $reservation->addReservation(rand(111111, 999999), $_SESSION["registration"], $_GET["numero"], $date, $qte);
            
                if($rep){
                    header("Location: index.php?action=profil");
                }
                else{
                    header("Location: index.php?action=reservation_infos&numero=".$_GET["numero"]."&error=addError");
                }
            }
        }
        else{
            header("Location: index.php?action=reservation_infos&numero=".$_GET["numero"]."&error=qteInf");
        }
    } 
    catch (\Throwable $th) {
        header("Location: index.php?action=reservation_infos&numero=".$_GET["numero"]."&error=qteError");
    }
}

// add favoris
if(isset($_POST["addFavoris"]))
{
    $rep = $reservation->addFavoris($_SESSION["registration"], $_GET["numero"]);
    if($rep)
        header("Location: index.php?action=reservation");
}

if(isset($_POST["removeFavoris"])){
    $rep = $reservation->addFavoris($_SESSION["registration"], $_GET["numero"]);
    if($rep)
        header("Location: index.php?action=reservation");
}

if(isset($_POST["valider"])){
    $rep = $reservation->upadeteReservation($_GET["numero"], "validee");
    if($rep)
        header("Location: index.php?action=gestion");
}

if(isset($_POST["annuler"])){
    $rep = $reservation->upadeteReservation($_GET["numero"], "rejetee");
    if($rep)
        header("Location: index.php?action=gestion");
}

// error manager
$msg = "";
if(isset($_GET["error"])){
    if($_GET["error"] == "qteError")
        $msg = "Le nombre de place est invalide !";
    if($_GET["error"] == "qteInf")
        $msg = "Le nombre de place ne peut etre inferieur a 1!";
    if($_GET["error"] == "addError")
        $msg = "Nous avons rencontre une erreur lors de la reservation!";
    if($_GET["error"] == "dateError")
        $msg = "Le nombre de place restant pour la date choisi est insuffisant !";
}

require_once(VIEW.'reservation_info.php');
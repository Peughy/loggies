<?php
session_start();

if(!(isset($_SESSION["access"]) && $_SESSION["access"]))
    header("Location: index.php?action=signIn");

require_once(MODEL.'Gestion.php');
require_once(MODEL.'Message.php');

$gestion = new Gestion();
$message = new Message();

$registration = $_SESSION["registration"];

// users informations
$users_informations = $gestion->getUserInformations();

// activities informations
$activity_informations = $gestion->getActivityInformations();

// reservations informations
$reservation_informations = $gestion->getReservation();

// messages
$messages_informations = $message->getMessages($registration, $registration);

// reservations number
$date_searching = date("Y-m-d");
if(isset($_POST["search_date"])){
    $date_searching = $_POST["date_searching"];
}
$reservation_numbers = $gestion->getAllNumReservation($date_searching);

// new messages
if(isset($_POST["envoyer_newMessage"]))
{
    if(!empty($_POST["utilisateur"]))
    {
        if(!empty($_POST["message"])){

            $msg = htmlspecialchars(trim($_POST["message"]));
            $user = $_POST["utilisateur"];

            $rep = $message->addMessage($_SESSION["registration"], $user, "individual", $msg);
            if($rep){
                header("Location: index.php?action=gestion");
            }
            else{
                header("Location: index.php?action=gestion&newMessage=true&error=addError");
            }
        }
        else{
            header("Location: index.php?action=gestion&newMessage=true&error=emptyField");
        }
    }
    else{
        header("Location: index.php?action=gestion&newMessage=true&error=emptyUser");
    }
}

// calcul the user number
$nbrs_users = 0;
foreach($users_informations as $users_information)
{
    if($users_information["type"] == "client")
        $nbrs_users++;
}

if(isset($_GET["numero"]) && (isset($_GET["modifyActivity"]) || isset($_GET["deleteActivity"])) && !empty($_GET["numero"])){
    $activity = $gestion->getOneActivityInformations($_GET["numero"]);
}

if(isset($_GET["registration"]) && !empty($_GET["registration"]))
    $one_users = $gestion->getOnetUserInformations($_GET["registration"]);

if(isset($_GET["numero"]) && (isset($_GET["modifyReservation"]))){
    $reservation = $gestion->getOneReservation($_GET["numero"]);
}

require_once(VIEW."gestion.php");
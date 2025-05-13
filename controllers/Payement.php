<?php

session_start();

require_once(MODEL."Profil.php");

if(isset($_GET["type"])){

    $profil = new Profil();

    if($_GET["type"] == "all"){
        
        // fetch the reservation data for user
        $datas = $profil->getReservation($_SESSION["registration"]);
        foreach($datas as $data){
            if($data["etat"] == "validee"){
                $rep = $profil->updatePayReservation($data["num_reservation"], "oui");
                if($rep){
                    $date = new DateTime(date("Y-m-d", strtotime($data["date"])));
                    $rep1 = $profil->addPayement(rand(111111, 999999), $data["num_reservation"], $date->modify('+1 days'));
                }
            }
        }

        if($rep1)
            header("Location: index.php?action=profil");
    }
    elseif($_GET["type"] == "individual"){
        $rep = $profil->updatePayReservation($_GET["num_reservation"], "oui");
        $data = $profil->getOneReservation($_GET["num_reservation"]);
        if($rep)
        {
            $date = new DateTime(date("Y-m-d", strtotime($data[0]["date"])));
            $new_date = $date->modify('+1 days');

            $rep1 = $profil->addPayement(rand(111111, 999999), $_GET["num_reservation"], $new_date->format("Y-m-d"));
            if($rep1){
                header("Location: index.php?action=profil");
            }
        }
    }

}
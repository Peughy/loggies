<?php

require_once(MODEL.'Gestion.php');

class ModifyUser{
    public function setInformations($username, $email, $nbr_reservation, $date_inscription)
    {
        if(!empty($username) && !empty($email) && !empty($date_inscription) && isset($nbr_reservation))
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                try {
                    $nbr_reservation = intval($nbr_reservation);
                    
                    if($nbr_reservation >= 0)
                    {
                        $gestion = new Gestion();
                        $rep = $gestion->modifyUserInformations($_GET["registration"], $username, $email, $nbr_reservation, $date_inscription);
                       
                        if($rep)
                        {
                            header("Location: index.php?action=gestion&id=".$_GET["id"]);
                        }
                    }
                    else{
                        header("Location: index.php?action=gestion&id=".$_GET["id"]."&modifyUser=true&error=nbrIncorrect");
                    }
                } catch (\Throwable $th) {
                    header("Location: index.php?action=gestion&id=".$_GET["id"]."&modifyUser=true&error=nbrIncorrect");
                }
            }
            else{
                header("Location: index.php?action=gestion&id=".$_GET["id"]."&modifyUser=true&error=errorEmail");
            }
        }
        else{
            header("Location: index.php?action=gestion&id=".$_GET["id"]."&modifyUser=true&error=emptyField");
        }
    }
}
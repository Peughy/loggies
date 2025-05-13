<?php

require_once(MODEL.'Gestion.php');

class ModifyActivity
{    
    public function setInformations($name, $prix, $type, $destination, $description, $cathegorie, $temps_debut, $temps_fin, $nbr_max)
    {
        if(!empty($name) && !empty($prix) && !empty($type) && !empty($destination) && !empty($description) && !empty($cathegorie) && !empty($temps_debut) && !empty($temps_fin) && !empty($nbr_max)){

            $name = htmlspecialchars($name);
            $prix = htmlspecialchars($prix);
            $type = htmlspecialchars($type);
            $destination = htmlspecialchars($destination);
            $description = htmlspecialchars($description);
            $cathegorie = htmlspecialchars($cathegorie);
            $temps_debut = htmlspecialchars($temps_debut);
            $temps_fin = htmlspecialchars($temps_fin);
            $nbr_max = htmlspecialchars($nbr_max);

            try {
                $prix = intval($prix);
                $nbr_max = intval($nbr_max);

                if($prix > 0)
                {
                    // add to database
                    $gestion = new Gestion();
                    $rep = $gestion->modifyActivity($_GET["numero"], $name, $prix, $type, $destination, $description, $cathegorie, $temps_debut, $temps_fin, $nbr_max);
                    if($rep)
                    {
                        header("Location: index.php?action=gestion");
                    }
                }
                else{
                    header("Location: index.php?action=gestion&numero=".$_GET["numero"]."&error=priceNegative&modifyActivity=true");
                }

            } catch (\Throwable $th) {
                header("Location: index.php?action=gestion&numero=".$_GET["numero"]."&error=priceLetter&modifyActivity=true");
            }
        }
        else{
            header("Location: index.php?action=gestion&numero=".$_GET["numero"]."&error=emptyField&modifyActivity=true");
        }
    }
}
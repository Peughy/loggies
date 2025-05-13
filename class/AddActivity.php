<?php

require_once(MODEL.'Gestion.php');

class AddNewActivity
{

    // treat the image
    private function treatImage($image, $nom){
    
        if($image["error"] === UPLOAD_ERR_OK)
        {

            // name of the file
            $extension  = pathinfo($image["name"], PATHINFO_EXTENSION);
            $name_file = str_replace("", "_", $nom)."_activity.".$extension;
            $path = "activitiesImage/".$name_file; 

            if(move_uploaded_file($image["tmp_name"], $path)){
                return $name_file;
            }
            else{
                header("Location: index.php?action=gestion&error=errorImage&activity=true");
                exit(0);
            }
            
        }
        else{
            header("Location: index.php?action=gestion&error=errorImage&activity=true");
            exit(0);
        }
    }
    
    public function setInformations($nom, $prix, $type, $destinataire, $description, $cathegorie, $temps_debut, $temps_fin, $image)
    {
        if(!empty($nom) && !empty($prix) && !empty($type) && !empty($destinataire) && !empty($description) && !empty($cathegorie) && !empty($temps_debut) && !empty($temps_fin)){
            if(!empty($image["tmp_name"]))
            {
                $nom = htmlspecialchars($nom);
                $prix = htmlspecialchars($prix);
                $type = htmlspecialchars($type);
                $destinataire = htmlspecialchars($destinataire);
                $description = htmlspecialchars($description);
                $cathegorie = htmlspecialchars($cathegorie);
                $temps_debut = htmlspecialchars($temps_debut);
                $temps_fin = htmlspecialchars($temps_fin);

                try {
                    $prix = intval($prix);

                    if($prix > 0)
                    {
                        $name_image = $this->treatImage($image, $nom);

                        // add to database
                        $gestion = new Gestion();
                        $rep = $gestion->addNewActivity($nom, $prix, $type, $destinataire, $description, $cathegorie, $temps_debut, $temps_fin, $name_image);
                        if($rep)
                        {
                            header("Location: index.php?action=gestion");
                        }
                    }
                    else{
                        header("Location: index.php?action=gestion&error=priceNegative&activity=true");
                    }

                } catch (\Throwable $th) {
                    header("Location: index.php?action=gestion&error=priceLetter&activity=true");
                }
            }   
            else{
                header("Location: index.php?action=gestion&error=emptyImage&activity=true");
            }
        }
        else{
            header("Location: index.php?action=gestion&error=emptyField&activity=true");
        }
    }
}
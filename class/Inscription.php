<?php

require_once(MODEL.'Connexion.php');
require_once(MODEL.'Inscription.php');

class Inscription {

    private function getRegistrationNumber(): string{
        $caracteres = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $len = strlen($caracteres);

        $matricule = "";
        for($i=0; $i<14; $i++){
            $matricule .= $caracteres[rand(0, $len-1)];
        }

        return $matricule;
    }

    public function setInformations($nom, $email, $pwd)
    {

        if(!empty($nom) && !empty($email) && !empty($pwd))
        {

            $name = htmlspecialchars(trim($nom));
            $mail = htmlspecialchars(trim($email));

            if((strlen($name) || strlen($mail)) <= 100)
            {
                if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                {
                    $password = sha1(trim($pwd));

                    $signIn = new SignIn();
                    $data = $signIn->getInformations($mail, $password);

                    if(!$data)
                    {
                        $signUp = new SignUp();
                        $rep = $signUp->addUser($this->getRegistrationNumber(), $name, $mail, $password);

                        if($rep > 0)
                        {
                            header("Location: index.php?action=signIn");
                        }
                    }
                    else{
                        header("Location: index.php?action=signUp&error=accountExist");
                        exit();
                    }
                }
                else{
                    header("Location: index.php?action=signUp&error=mailError");
                    exit();
                }
            }
            else{
                header("Location: index.php?action=signUp&error=sizeError");
                exit(); 
            }

        }
        else{
            header("Location: index.php?action=signUp&error=emptyfield");
            exit();
        }
        
    }

}

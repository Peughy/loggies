<?php
session_start();

require_once(MODEL.'Connexion.php');

class Connexion{

    public function getInformations(string $email, string $pwd)
    {
        if(!empty($email) && !empty($pwd))
        {
            $mail = htmlspecialchars(trim($email));
            $password = sha1(trim($pwd));

            $signIn = new SignIn();
            $data = $signIn->getInformations($mail, $password);

            if($data)
            {
                $_SESSION["access"] = true;
                $_SESSION["registration"] = $data["registration"];

                if($data["type"] == "client")
                {
                    header("Location: index.php?action=reservation");
                    exit();
                }

                if($data["type"] == "admin")
                {
                    header("Location: index.php?action=gestion");
                    exit();
                }
            }
            else{
                header("Location: index.php?action=signIn&error=accountExist");
                exit();
            }
        }
        else{
            header("Location: index.php?action=signIn&error=emptyfield");
            exit();
        }
    }

}
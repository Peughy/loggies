<?php

require_once('./lib/BDConnection.php');

class SignIn{

    public BDConnection $database;

    public function getInformations(string $mail, string $password)
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("SELECT * FROM utilisateur WHERE email = ? AND mdp = ?");
        $statement->execute(array($mail, $password));

        return $statement->fetch();
    }
}
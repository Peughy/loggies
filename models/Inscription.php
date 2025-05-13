<?php

require_once('./lib/BDConnection.php');

class SignUp{

    public BDConnection $database;

    // to fetch all informations
    public function addUser(string $registration_number, string $name, string $mail, string $password): bool
    {

        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("INSERT INTO utilisateur(registration, nom, email, mdp) VALUES(?, ?, ?, ?)");
        $lines = $statement->execute(array($registration_number, $name, $mail, $password));

        return ($lines > 0);
    }
}
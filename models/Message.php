<?php

require_once('./lib/BDConnection.php');

class Message{
    private BDConnection $database;

    public function addMessage($registration_envoi, $registration_recoi, $type, $content){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("INSERT INTO message(registration_envoi, registration_recois, type_message, content) VALUES(?, ?, ?, ?)");
        $lines = $statement->execute(array($registration_envoi, $registration_recoi, $type, $content));
        return ($lines > 0);
    }

    public function getMessages($registration_envoi, $registration_recoi){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("SELECT * FROM message INNER JOIN utilisateur ON message.registration_recois = utilisateur.registration WHERE registration_envoi = ? OR registration_recois = ? ORDER BY date_envoi DESC, heure_envoi DESC");
        $statement->execute(array($registration_envoi, $registration_recoi));
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getUserMessages($registration_recoi, $type_message){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("SELECT * FROM message INNER JOIN utilisateur ON message.registration_recois = utilisateur.registration WHERE registration_recois = ? AND type_message = ? GROUP BY registration_recois ORDER BY date_envoi DESC, heure_envoi DESC");
        $statement->execute(array($registration_recoi, $type_message));
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}
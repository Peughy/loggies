<?php

require_once('lib/BDConnection.php');

class Profil{
    private BDConnection $database;

    // to fetch one users informations 
    public function getOnetUserInformations($registration){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("SELECT * FROM utilisateur WHERE registration = ?");
        $statement->execute(array($registration));
        return $statement->fetch(PDO::FETCH_DEFAULT);
    }

    // to fetch all users informations 
    public function getFavoris($registration){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("SELECT * FROM favoris INNER JOIN activite ON favoris.num_activite = activite.numero WHERE registration = ?");
        $statement->execute(array($registration));
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // to fetch all reservations for one user 
    public function getReservation($registration){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("SELECT * FROM reservation INNER JOIN activite ON reservation.num_activite = activite.numero WHERE registration = ?");
        $statement->execute(array($registration));
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // fetch one reservation
    public function getOneReservation($numero){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("SELECT * FROM reservation INNER JOIN activite ON reservation.num_activite = activite.numero WHERE num_reservation = ?");
        $statement->execute(array($numero));
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // update one reservation
    public function updatePayReservation($num_reservation, $pay){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("UPDATE reservation SET payer = ? WHERE num_reservation = ?");
        $lines = $statement->execute(array($pay, $num_reservation));
        return ($lines > 0);
    }

    // add payement
    public function addPayement($num_pay, $num_reservation, $expire_date)
    {
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("INSERT INTO payement(num_payement, num_reservation, date_expiration) VALUES(?, ?, ?)");
        $lines = $statement->execute(array($num_pay, $num_reservation, $expire_date));
        return ($lines > 0);
    }

    // fetch all payement for one user
    public function getPayement($registration){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("SELECT * FROM payement INNER JOIN reservation ON payement.num_reservation = reservation.num_reservation JOIN activite ON reservation.num_activite = activite.numero WHERE reservation.registration = ?");
        $statement->execute(array($registration));
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
<?php

require_once('lib/BDConnection.php');

class Reservation{

    private BDConnection $database;

    // fetch all activities
    public function getActivityInformations(){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->query("SELECT * FROM activite");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // fetch distincts all activities
    public function getDistinctActivityInformations($elt){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->query("SELECT DISTINCT ".$elt." FROM activite");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOneActivity($array){

        $sql = "SELECT * FROM activite WHERE ";
        foreach($array as $key => $value){
            if($key != "cathegorie"){
                $sql .= $key." = '".$value."' OR ";
            }
            else{
                $sql .= $key." = '".$value."'";
                break;
            }
        }

        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // fetch distincts one activities
    public function getActivity($number){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("SELECT * FROM activite WHERE numero = ?");
        $statement->execute(array($number));
        return $statement->fetch(PDO::FETCH_DEFAULT);
    }

    // to fetch favoris
    public function getFavoris($registration, $number){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("SELECT * FROM favoris WHERE registration = ? AND num_activite = ?");
        $statement->execute(array($registration, $number));
        return $statement->fetch(PDO::FETCH_DEFAULT);
    }

    // to add favoris
    public function addFavoris($registration, $number){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("INSERT INTO favoris VALUES(?, ?)");
        $lines = $statement->execute(array($registration, $number));
        return ($lines > 0);
    }

    // to remove favoris
    public function removeFavoris($registration, $number){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("DELETE FROM favoris WHERE registration = ? AND num_activite = ?");
        $lines = $statement->execute(array($registration, $number));
        return ($lines > 0);
    }

    // add reservations
    public function addReservation($num_reservation, $registration, $num_activite, $date, $nbr){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("INSERT INTO reservation(num_reservation, registration, num_activite, date, quantite) VALUES(?, ?, ?, ?, ?)");
        $lines = $statement->execute(array($num_reservation, $registration, $num_activite, $date, $nbr));
        return ($lines > 0);
    }

    // add reservations history
    public function addReservationHistory($num_reservation, $registration, $num_activite, $date, $nbr){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("INSERT INTO reservation_history(num_reservation, registration, num_activite, date, quantite) VALUES(?, ?, ?, ?, ?)");
        $lines = $statement->execute(array($num_reservation, $registration, $num_activite, $date, $nbr));
        return ($lines > 0);
    }

    // to fetch nbr reservation
    public function getNumberReservation($number, $date){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("SELECT SUM(quantite) FROM reservation WHERE num_activite = ? AND date = ? AND payer = 'oui'");
        $statement->execute(array($number, $date));
        return $statement->fetch(PDO::FETCH_DEFAULT);
    }

    // to modify reservation
    public function upadeteReservation($numero, $etat){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("UPDATE reservation SET etat = ? WHERE num_reservation = ?");
        $lines = $statement->execute(array($etat, $numero));

        return ($lines > 0);
    }
}
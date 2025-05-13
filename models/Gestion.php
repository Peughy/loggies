<?php

require_once('./lib/BDConnection.php');

class Gestion{
    private BDConnection $database;

    // to fetch all users informations 
    public function getUserInformations(){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->query("SELECT * FROM utilisateur");
        
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // to fetch one users informations 
    public function getOnetUserInformations($registration){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("SELECT * FROM utilisateur WHERE registration = ?");
        $statement->execute(array($registration));
        return $statement->fetch(PDO::FETCH_DEFAULT);
    }

    // modify the users informations
    public function modifyUserInformations($registration, $username, $email, $nbr_reservation, $date_inscription)
    {
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("UPDATE utilisateur SET nom_utilisateur = ?, email = ?, nbr_reservation = ?, date_inscription = ? WHERE registration = ?");
        $lines = $statement->execute(array($username, $email, $nbr_reservation, $date_inscription, $registration));

        return ($lines > 0);
    }

    // delete user
    public function deleteUser($registration)
    {
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("DELETE FROM utilisateur WHERE registration = ?");
        $lines = $statement->execute(array($registration));

        return ($lines > 0);
    }

    // to fetch nbr reservation
    public function getNumberReservation($registration){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("SELECT SUM(quantite) AS qte, date FROM reservation WHERE registration = ? AND payer = 'oui'");
        $statement->execute(array($registration));
        return $statement->fetch(PDO::FETCH_DEFAULT);
    }


    //
    //
    //  Activity
    //
    // to fetch all activities informations 
    public function getActivityInformations(){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->query("SELECT * FROM activite");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // to fetch one activities informations 
    public function getOneActivityInformations($number){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("SELECT * FROM activite WHERE numero = ?");
        $statement->execute(array($number));
        return $statement->fetch(PDO::FETCH_DEFAULT);
    }

    // add new activity
    public function addNewActivity($nom, $prix, $type, $destinataire, $description, $cathegorie, $temps_debut, $temps_fin, $image)
    {
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("INSERT INTO activite(nom, prix, type, destinataire, description, cathegorie, heure_debut, heure_fin,  image) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $lines = $statement->execute(array($nom, $prix, $type, $destinataire, $description, $cathegorie, $temps_debut, $temps_fin, $image));

        return ($lines > 0);
    }

    // update new activity
    public function modifyActivity($number, $name, $prix, $type, $destination, $description, $cathegorie, $temps_debut, $temps_fin, $nbr_max)
    {
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("UPDATE activite SET nom = ?, prix = ?, type = ?, destinataire = ?, description = ?, cathegorie = ?, heure_debut = ?, heure_fin = ?, reservation_max = ? WHERE numero = ?");
        $lines = $statement->execute(array($name, $prix, $type, $destination, $description, $cathegorie, $temps_debut, $temps_fin, $nbr_max, $number));

        return ($lines > 0);
    }

    // delete activity
    public function deleteActivity($number)
    {
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("DELETE FROM activite WHERE numero = ?");
        $lines = $statement->execute(array($number));

        return ($lines > 0);
    }

    //
    //
    //
    // reservation
    //
    //
    //
    public function getReservation()
    {
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->query("SELECT * FROM reservation INNER JOIN utilisateur ON reservation.registration = utilisateur.registration JOIN activite ON reservation.num_activite = activite.numero ORDER BY etat");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOneReservation($number)
    {
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("SELECT * FROM reservation INNER JOIN utilisateur ON reservation.registration = utilisateur.registration JOIN activite ON reservation.num_activite = activite.numero WHERE reservation.num_reservation = ?");
        $statement->execute(array($number));
        return $statement->fetch(PDO::FETCH_DEFAULT);
    }

    // reservation and activities fechch
    public function getAllNumReservation($date)
    {
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("SELECT activite.nom, activite.numero, activite.reservation_max, reservation.num_activite, SUM(reservation.quantite) AS qte FROM activite INNER JOIN reservation ON reservation.num_activite = activite.numero WHERE reservation.date = ? AND reservation.payer = ? GROUP BY reservation.num_activite;");
        $statement->execute(array($date, "oui"));
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

   
}
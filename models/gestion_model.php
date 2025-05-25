<?php

require_once('./lib/BDConnection.php');

class Gestion{
    private BDConnection $database;

    // to fetch all users informations 
    public function getUserInformations(){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->query("SELECT * FROM users");
        
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // to fetch one users informations 
    public function getOnetUserInformations($id_user){
        $this->database = new BDConnection();

        $statement = $this->database->getConnection()->prepare("SELECT * FROM users WHERE id_user = ?");
        $statement->execute(array($id_user));
        return $statement->fetch(PDO::FETCH_DEFAULT);
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

   
}
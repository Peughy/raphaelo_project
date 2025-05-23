<?php

require_once('./lib/BDConnection.php');

class ModelInscription{

    public BDConnection $database;

    // to fetch all informations
    public function addUser(string $id_user, string $name, string $mail, string $password, string $phone): bool
    {

        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("INSERT INTO users(id_user, username, email, pwd, phone) VALUES(?, ?, ?, ?, ?)");
        $lines = $statement->execute(array($id_user, $name, $mail, $password, $phone));

        return ($lines > 0);
    }
}
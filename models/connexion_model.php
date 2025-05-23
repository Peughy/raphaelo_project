<?php

require_once('./lib/BDConnection.php');

class ModelConnexion{

    public BDConnection $database;

    public function getInformations(string $mail, string $password)
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("SELECT * FROM users WHERE email = ? AND pwd = ?");
        $statement->execute(array($mail, $password));

        return $statement->fetch();
    }
}
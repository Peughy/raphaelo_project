<?php

require_once('./lib/BDConnection.php');

class ModelLivreur{

    public BDConnection $database;

    public function getInformations(string $mail, string $password)
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("SELECT * FROM users WHERE email = ? AND pwd = ?");
        $statement->execute(array($mail, $password));

        return $statement->fetch();
    }

    // to fetch all informations
    public function addUser(string $id_user, string $name, string $mail, string $password, string $phone, string $type_account): bool
    {

        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("INSERT INTO users(id_user, username, email, pwd, phone, type_account) VALUES(?, ?, ?, ?, ?, ?)");
        $lines = $statement->execute(array($id_user, $name, $mail, $password, $phone, $type_account));

        return ($lines > 0);
    }

    // list representation
    public function getRepresentations()
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->query("SELECT * FROM representations");

        return $statement->fetchAll();
    }

    // list representation
    public function getLivreurs()
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->query("SELECT * FROM users WHERE type_account = 'livreur'");

        return $statement->fetchAll();
    }

    // affect representation
    public function affectRepresentation(string $id_livreur, int $id_representation): bool
    {

        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("INSERT INTO livreurs_representations VALUES(?, ?)");
        $lines = $statement->execute(array($id_livreur, $id_representation));

        return ($lines > 0);
    }

    public function getRepresentation(string $id_livreur)
    {

        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("SELECT * FROM representations INNER JOIN livreurs_representations ON livreurs_representations.id_representation = representations.id_representation WHERE livreurs_representations.id_livreur = ?");
        $statement->execute(array($id_livreur));

        return $statement->fetch();
    }
}


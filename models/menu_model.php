<?php

require_once('./lib/BDConnection.php');

class ModelMenu{

    public BDConnection $database;

    public function getInformations()
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->query("SELECT * FROM produits WHERE DATEDIFF(CURRENT_DATE, date_ajout) > 15");
        return $statement->fetchAll();
    }

    public function getOneInformations($id_produit)
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("SELECT * FROM produits WHERE id_produit = ?");
        $statement->execute(array($id_produit));
        return $statement->fetch();
    }

    public function getAllLast()
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->query("SELECT * FROM produits WHERE DATEDIFF(CURRENT_DATE, date_ajout) < 15");
        return $statement->fetchAll();
    }
}
<?php

require_once('./lib/BDConnection.php');

class ModelProduit{

    public BDConnection $database;

    public function getExist(string $nom_produit, string $type_pizza)
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("SELECT * FROM produits WHERE nom_produit = ? AND type_pizza = ?");
        $statement->execute(array($nom_produit, $type_pizza));

        return $statement->fetch();
    }

    // to fetch all informations
    public function addProduit($id_produit, $nom_produit, $prix, $ingredient, $description, $type_pizza, $image): bool
    {

        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("INSERT INTO produits(id_produit, nom_produit, prix, ingredient, description, type_produit, image) VALUES(?, ?, ?, ?, ?, ?, ?)");
        $lines = $statement->execute(array($id_produit, $nom_produit, $prix, $ingredient, $description, $type_pizza, $image));

        return ($lines > 0);
    }


    // fetch all product
    public function getAll()
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->query("SELECT * FROM produits ");
        return $statement->fetchAll();
    }
}


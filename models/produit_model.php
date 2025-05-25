<?php

require_once('./lib/BDConnection.php');

class ModelProduit{

    public BDConnection $database;

    public function getExist(string $nom_produit, string $type_produit)
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("SELECT * FROM produits WHERE nom_produit = ? AND type_produit = ?");
        $statement->execute(array($nom_produit, $type_produit));

        return $statement->fetch();
    }

    public function addProduit($id_produit, $nom_produit, $prix, $ingredient, $description, $type_produit, $image): bool
    {

        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("INSERT INTO produits(id_produit, nom_produit, prix, ingredient, description, type_produit, image) VALUES(?, ?, ?, ?, ?, ?, ?)");
        $lines = $statement->execute(array($id_produit, $nom_produit, $prix, $ingredient, $description, $type_produit, $image));

        return ($lines > 0);
    }

    public function updateProduit($id_produit, $nom_produit, $prix, $ingredient, $description, $type_produit): bool
    {

        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("UPDATE produits SET nom_produit = ?, prix = ?, ingredient = ?, description = ?, type_produit = ? WHERE id_produit = ?");
        $lines = $statement->execute(array($nom_produit, $prix, $ingredient, $description, $type_produit, $id_produit));

        return ($lines > 0);
    }
    
    public function deleteProduit($id_produit): bool
    {

        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("DELETE FROM produits WHERE id_produit = ?");
        $lines = $statement->execute(array($id_produit));

        return ($lines > 0);
    }


    // fetch all product
    public function getAll()
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->query("SELECT * FROM produits");
        return $statement->fetchAll();
    }


    public function getOneProduit($id_produit)
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->query("SELECT * FROM produits WHERE id_produit = '".$id_produit."'");
        return $statement->fetch();
    }

    public function getNameProduit($nom_produit)
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->query("SELECT * FROM produits WHERE nom_produit LIKE '%".$nom_produit."%'");
        return $statement->fetchAll();
    }
}


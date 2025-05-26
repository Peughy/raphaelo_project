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

    public function addCommentaire(string $content, string $id_user, string $id_produit): bool
    {

        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("INSERT INTO commentaires(content, id_user, id_produit) VALUES(?, ?, ?)");
        $lines = $statement->execute(array($content, $id_user, $id_produit));

        return ($lines > 0);
    }

    public function getAllCommentByProduct($id_produit)
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("SELECT * FROM commentaires INNER JOIN users ON users.id_user = commentaires.id_user WHERE id_produit = ?");
        $statement->execute(array($id_produit));
        return $statement->fetchAll();
    }

    public function getAllComment()
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->query("SELECT * FROM commentaires INNER JOIN users ON users.id_user = commentaires.id_user LIMIT 3");
        return $statement->fetchAll();
    }
    
    public function getRepresentations()
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->query("SELECT * FROM representations");
        return $statement->fetchAll();
    }
}
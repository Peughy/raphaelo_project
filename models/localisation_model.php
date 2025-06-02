<?php

require_once('./lib/BDConnection.php');

class ModelLocalisation{

    public BDConnection $database;

    public function getInformations()
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->query("SELECT * FROM representations");
        return $statement->fetchAll();
    
    
    }
    public function getInformation($id_rep)
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("SELECT * FROM representations WHERE id_representation = ?");
        $statement->execute(array($id_rep));
        return $statement->fetch();
    }

    public function addRepresentation($lieu, $phone, $facebook, $instagram, $image){
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("INSERT INTO representations(lieu, tel, facebook, instagram, image) VALUES(?, ?, ?, ?, ?)");
        $lines = $statement->execute(array($lieu, $phone, $facebook, $instagram, $image));

        return ($lines > 0);
    }

    public function updateRepresentation($id, $lieu, $phone, $facebook, $instagram){
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("UPDATE representations SET lieu = ?, tel = ?, facebook = ?, instagram = ? WHERE id_representation = ?");
        $lines = $statement->execute(array($lieu, $phone, $facebook, $instagram, $id));

        return ($lines > 0);
    }

    public function deleteRepresentation($id_rep){
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("DELETE FROM representations WHERE id_representation = ? ");
        $lines = $statement->execute(array($id_rep));

        return ($lines > 0);
    }
}
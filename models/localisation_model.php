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
}
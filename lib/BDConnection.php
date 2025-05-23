<?php

class BDConnection{
    public ?PDO $database = null;

    public function getConnection(){
        try {
            if($this->database == null){
                $this->database = new PDO('mysql:host=localhost;dbname=raphaelo;charset=utf8', 'root', 'mysql2024pwd');
            }
            return $this->database;

        } catch (\Throwable $th) {
           header("Location: index.php?action=error");
        }
    }

}
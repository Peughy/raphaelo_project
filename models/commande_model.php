<?php

require_once('./lib/BDConnection.php');

class ModelCommande{
    private BDConnection $database;


    public function ajouter_commande($num_commande, $id_user, $id_produit, $id_representation, $date_recup, $heure_recup, $qte,  $supplement): bool
    {

        $this->database = new BDConnection();
        $statement_c = $this->database->getConnection()->prepare("INSERT INTO commandes(num_commande, date_recup, heure_recup, id_representation, id_user) VALUES(?, ?, ?, ?, ?)");
        $statement_mc = $this->database->getConnection()->prepare("INSERT INTO menu_commande(num_commande, id_produit, qte, supplement) VALUES(?, ?, ?, ?)");

        $line_c = $statement_c->execute(array($num_commande, $date_recup, $heure_recup, $id_representation, $id_user));
        $line_mc = $statement_mc->execute(array($num_commande, $id_produit, $qte, $supplement));

        return ($line_c > 0 && $line_mc > 0);
    }

    // fetch all product
    public function getAllCommande()
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->query("SELECT * FROM commandes INNER JOIN users ON commandes.id_user = users.id_user INNER JOIN representations ON commandes.id_representation = representations.id_representation");
        return $statement->fetchAll();
    }


    public function getCommande($num_commande)
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->query("SELECT * FROM commandes INNER JOIN menu_commande ON commandes.num_commande = menu_commande.num_commande INNER JOIN users ON commandes.id_user = users.id_user INNER JOIN representations ON commandes.id_representation = representations.id_representation INNER JOIN produits ON produits.id_produit = menu_commande.id_produit WHERE commandes.num_commande = ".$num_commande);
        return $statement->fetchAll();
    }


    public function setCommandeLivre($num_commande)
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("UPDATE commandes SET etat_commande = ? WHERE num_commande = ?");
        $line = $statement->execute(array("livre", $num_commande));

        return ($line > 0);
    }

    

}
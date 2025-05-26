<?php

require_once('./lib/BDConnection.php');

class ModelProfil
{
    private BDConnection $database;


    public function getCommandeUser($id_user)
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->query("SELECT * FROM commandes INNER JOIN users ON commandes.id_user = users.id_user INNER JOIN representations ON commandes.id_representation = representations.id_representation WHERE users.id_user = '" . $id_user . "'");
        return $statement->fetchAll();
    }

    public function getOneCommandeUser($id_user, $num_commande)
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->query("SELECT * FROM commandes INNER JOIN users ON commandes.id_user = users.id_user INNER JOIN representations ON commandes.id_representation = representations.id_representation WHERE users.id_user = '" . $id_user . "' AND commandes.num_commande = " . $num_commande);
        return $statement->fetchAll();
    }


    public function getCommentaires($id_user)
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->query("SELECT * FROM commentaires WHERE id_user = '" . $id_user . "'");
        return $statement->fetchAll();
    }

    public function getAllCommandeUserInfos($id_user)
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("SELECT * FROM commandes INNER JOIN menu_commande ON commandes.num_commande = menu_commande.num_commande INNER JOIN users ON commandes.id_user = users.id_user INNER JOIN representations ON commandes.id_representation = representations.id_representation INNER JOIN produits ON produits.id_produit = menu_commande.id_produit WHERE commandes.num_commande IN (SELECT num_commande FROM commandes WHERE id_user = ?)");
        $statement->execute(array($id_user));

        return $statement->fetchAll();
    }

    public function getOneCommandeUserInfos($id_user, $num_commande)
    {
        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("SELECT * FROM commandes INNER JOIN menu_commande ON commandes.num_commande = menu_commande.num_commande INNER JOIN users ON commandes.id_user = users.id_user INNER JOIN representations ON commandes.id_representation = representations.id_representation INNER JOIN produits ON produits.id_produit = menu_commande.id_produit WHERE users.id_user = ? AND commandes.num_commande = ?");
        $statement->execute(array($id_user, $num_commande));

        return $statement->fetchAll();
    }

    public function updateUser(string $id_user, string $name, string $mail, string $password, string $phone): bool
    {

        $this->database = new BDConnection();
        $statement = $this->database->getConnection()->prepare("UPDATE users SET username = ?, email = ?, pwd = ?, phone = ? WHERE id_user = ?");
        $lines = $statement->execute(array($name, $mail, $password, $phone, $id_user));

        return ($lines > 0);
    }
}

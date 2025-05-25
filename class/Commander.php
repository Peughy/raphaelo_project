<?php

require_once(MODEL."commande_model.php");

class Commander{

    public function ajouter_commande($id_user, $id_produit, $id_representation, $date_recup, $heure_recup, $qte, $supplement)
    {
        if(!empty($qte) && $date_recup != null && $heure_recup != null){
            try {
               $qte_Convert = (int) $qte;
               if($qte_Convert > 1){
                    $num_commande = rand(111111, 999999);
                    $modelCommande = new ModelCommande();

                    $supplement = (empty($supplement)) ? "--" : $supplement;
                    $rep = $modelCommande->ajouter_commande($num_commande, $id_user, $id_produit, $id_representation, $date_recup, $heure_recup, $qte,  $supplement);

                    if($rep){
                        header("Location: index.php?action=menu");
                    }
                    else{
                        header("Location: index.php?action=menu&id_produit=".$id_produit."&error=error");
                    }
               }else{
                header("Location: index.php?action=menu&id_produit=".$id_produit."&error=qteInf");
               }
            } catch (Exception $e) {
                header("Location: index.php?action=menu&id_produit=".$id_produit."&error=qteInvalid");
            }
        }
        else{
            header("Location: index.php?action=menu&id_produit=".$id_produit."&error=emptyfield");
        }
    }
}
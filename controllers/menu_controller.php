<?php
session_start();

require_once MODEL."menu_model.php";
require_once MODEL."livreur_model.php";
require_once CLASSES."Commander.php";

$menu_model = new ModelMenu();
$model_infos = $menu_model->getInformations();
$model_last_infos = $menu_model->getAllLast();

$pass_info = false;
if(isset($_GET["id_produit"]) && !empty($_GET["id_produit"])){
    $pass_info = true;
    $product_one = $menu_model->getOneInformations($_GET["id_produit"]);
}

// fetch representation
$livreur_model = new ModelLivreur();
$representations = $livreur_model->getRepresentations();

// commander

if(isset($_POST["commander_btn"])){

    if(isset($_SESSION["access"]) && $_SESSION["access"]){


        $id_user = $_SESSION["id_user"];
        $id_produit = $_GET["id_produit"];
        $id_representation = htmlspecialchars($_POST["representation"]);
        $date_recup = htmlspecialchars($_POST["recup_date"]);
        $heure_recup = htmlspecialchars($_POST["recup_heure"]);
        $qte = htmlspecialchars($_POST["qte_commande"]);
        $supplement = htmlspecialchars(($_POST["supplement"]));

        $commander = new Commander();
        $commander->ajouter_commande($id_user, $id_produit, $id_representation, $date_recup, $heure_recup, $qte, $supplement);
    }
    else{
        header("Location: index.php?action=signIn");
    }
}

// error message
if(isset($_GET["error"]))
{
    $error_msg = "";
    if($_GET["error"] == "emptyfield")
        $error_msg = "Veuillez completer tous les champs";
    if($_GET["error"] == "qteInvalid")
        $error_msg = "Veuillez renseigner une quantite valide";
    if($_GET["error"] == "qteInf")
        $error_msg = "Veuillez renseigner une quantite superieur a zero (0)";
    if($_GET["error"] == "error")
        $error_msg = "Nous avons rencontre une erreur. Veuillez recommencer";
    
}
 
require_once VIEW."menu.php";

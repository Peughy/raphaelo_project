<?php

session_start();

require_once MODEL . "gestion_model.php";
require_once MODEL . "produit_model.php";
require_once MODEL . "commande_model.php";

require_once "class/AjouterLivreur.php";
require_once "class/AjouterProduit.php";
require_once "class/ModifierProduit.php";

if (!isset($_SESSION["access"]) || !$_SESSION["access"]) {
    header("Location: index.php?action=signIn");
}


$model_gestion = new Gestion();

// users informations
$nbrs_client = 0;
$users_informations = $model_gestion->getUserInformations();

foreach ($users_informations as $users_information) {
    if ($users_information["type_account"] == "client") {
        $nbrs_client  += 1;
    }
}


// logout

if (isset($_POST["logout_btn"])) {
    $_SESSION["access"] = false;
    session_destroy();
    header("Location: index.php?action=signIn");
}


// fetch user loget
$id_user = $_SESSION["id_user"];
$user_prop = $model_gestion->getOnetUserInformations($id_user);

if ($user_prop["type_account"] != "gest") {
    $_SESSION["access"] = false;
    session_destroy();
    header("Location: index.php?action=signIn");
}

/*

Traitement produit

*/

// ajouter produit
if (isset($_POST["ajouter_produit"])) {
    $name = $_POST["name"];
    $prix = $_POST["prix"];
    $ingredient = $_POST["ingredient"];
    $description = $_POST["description"];
    $type_produit = $_POST["type_produit"];
    $image = $_FILES["image"];

    $add_produit = new AjouterProduit();
    $add_produit->setInformations($name, $prix, $ingredient, $description, $type_produit, $image);
}


if (isset($_POST["modifier_produit"])) {
    $name = $_POST["name"];
    $prix = $_POST["prix"];
    $ingredient = $_POST["ingredient"];
    $description = $_POST["description"];
    $type_produit = $_POST["type_produit"];
    $image = $_FILES["image"];
    $id_produit = $_GET["id_produit"];

    $add_produit = new ModifierProduit();
    $add_produit->updateInformations($id_produit, $name, $prix, $ingredient, $description, $type_produit, $image);
}


if (isset($_GET["error"]) && !empty($_GET["error"]) && isset($_GET["choice"])) {
    $msg = $_GET["error"];

    if ($_GET["error"] == "emptyfield")
        $msg = "Veuillez remplir tout les champs!";

    if ($_GET["error"] == "sizeError")
        $msg = "La taille du nom de produit depasser 100 caracteres!";

    if ($_GET["error"] == "accountExist")
        $msg = "Le produit existe deja!";

    if ($_GET["error"] == "error")
        $msg = "Nous avons rencontres une erreur!";

    if ($_GET["error"] == "errorImage")
        $msg = "Erreur lors du traitement de la photo!";
}

$choice = "";
$produit_model = new ModelProduit();
$products_infos = $produit_model->getAll();

if (isset($_GET["choice"])) {
    $choice = $_GET["choice"];
}

if (isset($_GET["choice"]) && $_GET["choice"] == "modif") {
    $id_produit = $_GET["id_produit"];
    $produit = $produit_model->getOneProduit($id_produit);
}

if (isset($_POST["supprimer_produit"])) {
    $rep = $produit_model->deleteProduit($_GET["id_produit"]);

    if ($rep) {
        header("Location: index.php?action=gestion");
    } else {
        $msg = "Erreur lors de la suppression";
    }
}

if (isset($_POST["search_menu_btn"])) {
    $name_menu_search = htmlspecialchars($_POST["name_menu_search"]);
    $products_infos = $produit_model->getNameProduit($name_menu_search);
}

if(isset($_POST["cancel_menu_btn"])){
    $_POST["name_menu_search"] = null;
    $products_infos = $produit_model->getAll();
}


/*
*
*   Traitement commande
*
*/

$model_commande = new ModelCommande();
$commande_infos = $model_commande->getAllCommande();

//

$commande = [];
if (isset($_GET["numero_commande"]) && $_GET["numero_commande"] != null) {
    $commande = $model_commande->getCommande($_GET["numero_commande"]);
}


if (isset($_POST["brn_commande_livre"])) {
    $rep = $model_commande->setCommandeLivre($_GET["numero_commande"]);
    if ($rep) {
        header("Location: index.php?action=gestion&numero_commande=" . $_GET["numero_commande"] . "&commande_msg=ok");
    }
}

if (isset($_GET["commande_msg"])) {
    $commande_msg = $_GET["commande_msg"];
}

if (isset($_POST["search_commande_btn"])) {
    $num_commande_search = htmlspecialchars($_POST["num_commande_search"]);
    $commande_infos = [
        $model_commande->getCommande($num_commande_search)
    ];
}

if(isset($_POST["cancel_commande_btn"])){
    $_POST["num_commande_search"] = null;
    $commande_infos = $model_commande->getAllCommande();
}

require_once(VIEW . "gestion.php");

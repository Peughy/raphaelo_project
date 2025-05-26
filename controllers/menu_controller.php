<?php
session_start();

require_once MODEL . "menu_model.php";
require_once MODEL . "livreur_model.php";
require_once MODEL . "gestion_model.php";
require_once MODEL . "produit_model.php";
require_once CLASSES . "Commander.php";

$menu_model = new ModelMenu();
$produit_model = new ModelProduit();

$menu_infos = $menu_model->getInformations();
$menu_last_infos = $menu_model->getAllLast();


if (isset($_SESSION["access"])) {
    $id_user = $_SESSION["id_user"];
    $gestion_model = new Gestion();

    $user = $gestion_model->getOnetUserInformations($id_user);
    if ($user["type_account"] == "gest") {
        session_destroy();
        header("Location: index.php?action=menu");
    }
}

$pass_info = false;
if (isset($_GET["id_produit"]) && !empty($_GET["id_produit"])) {
    $pass_info = true;
    $product_one = $menu_model->getOneInformations($_GET["id_produit"]);
}

// representations
$representations = $menu_model->getRepresentations();

// commander

if (isset($_POST["commander_btn"])) {

    if (isset($_SESSION["access"]) && $_SESSION["access"]) {


        $id_user = $_SESSION["id_user"];
        $id_produit = $_GET["id_produit"];
        $id_representation = htmlspecialchars($_POST["representation"]);
        $date_recup = htmlspecialchars($_POST["recup_date"]);
        $heure_recup = htmlspecialchars($_POST["recup_heure"]);
        $qte = htmlspecialchars($_POST["qte_commande"]);
        $supplement = htmlspecialchars(($_POST["supplement"]));

        $commander = new Commander();
        $commander->ajouter_commande($id_user, $id_produit, $id_representation, $date_recup, $heure_recup, $qte, $supplement);
    } else {
        header("Location: index.php?action=signIn");
    }
}

// error message

if (isset($_GET["error"])) {
    $error_msg = "";
    if ($_GET["error"] == "emptyfield")
        $error_msg = "Veuillez completer tous les champs";
    if ($_GET["error"] == "qteInvalid")
        $error_msg = "Veuillez renseigner une quantite valide";
    if ($_GET["error"] == "qteInf")
        $error_msg = "Veuillez renseigner une quantite superieur a zero (0)";
    if ($_GET["error"] == "error")
        $error_msg = "Nous avons rencontre une erreur. Veuillez recommencer";
}

// commenter 

if (isset($_POST["comment_btn"])) {
    if (isset($_SESSION["access"]) && $_SESSION["access"]) {
        if (!empty($_POST["content_comment"])) {
            $rep = $menu_model->addCommentaire(htmlspecialchars($_POST["content_comment"]), $_SESSION["id_user"], $_GET["id_produit"]);
            if ($rep < 0) {
                $error_msg_comment = "Nous avons rencontre une erreur";
            }
        } else {
            $error_msg_comment = "Veuilez renseigner un commentaire";
        }
    } else {
        header("Location: index.php?action=signIn");
    }
}

$commentaires = [];
if (isset($_GET["id_produit"])) {
    $commentaires = $menu_model->getAllCommentByProduct($_GET["id_produit"]);
}


// rechercher le menu
if(isset($_POST["search_menu_btn"])){
    if(!empty($_POST["nom_menu"])){
        $menu_infos = $produit_model->getNameProduit($_POST["nom_menu"]);
        $menu_last_infos = null;
    }
}

require_once VIEW . "menu.php";

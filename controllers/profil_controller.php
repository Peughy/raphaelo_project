<?php
session_start();

require_once MODEL . "gestion_model.php";
require_once MODEL . "profil_model.php";
require_once CLASSES . "UpdateProfil.php";

if (!isset($_SESSION["access"]) || !$_SESSION["access"]) {
    header("Location: index.php?action=signIn");
}

$gestion_model = new Gestion();
$profil_model = new ModelProfil();

$user = $gestion_model->getOnetUserInformations($_SESSION["id_user"]);

$commandes = $profil_model->getCommandeUser($_SESSION["id_user"]);
$commentaires = $profil_model->getCommentaires($_SESSION["id_user"]);

// commandes
$nbr_commandes_livre = 0;
$nbr_commandes_encours = 0;

foreach ($commandes as $commande) {
    if ($commande["etat_commande"] == "attente") {
        $nbr_commandes_encours++;
    } else {
        $nbr_commandes_livre++;
    }
}

$commandes_infos = $profil_model->getAllCommandeUserInfos($_SESSION["id_user"]);

if (isset($_GET["num_commande"]) && $_GET["num_commande"] != null) {
    $commande_all_infos = $profil_model->getOneCommandeUserInfos($_SESSION["id_user"], htmlspecialchars($_GET["num_commande"]));
}

// search commande
if (isset($_POST["search_commande_btn"])) {
    $commandes = $profil_model->getOneCommandeUser($_SESSION["id_user"], htmlspecialchars($_POST["num_commande_search"]));
}

if (isset($_POST["cancel_commande_btn"])) {
    $commandes = $profil_model->getCommandeUser($_SESSION["id_user"]);
    $_POST["num_commande_search"] = null;
}

// deconnexion

if (isset($_POST["deconnexion_btn"])) {
    session_destroy();
    header("Location: index.php?action=signIn");
}

// update profil
if (isset($_POST["updateBtn"])) {
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $mdp = htmlspecialchars($_POST["mdp"]);
    $tel = htmlspecialchars($_POST["tel"]);

    $update_profil = new UpdateProfil();
    $update_profil->update_user($_SESSION["id_user"], $username, $email, $mdp, $tel);
}

if (isset($_GET["error"])) {
    
    if ($_GET["error"] == "mailError")
        $error_msg = "L'addresse mail est pas valide!";

    if ($_GET["error"] == "sizeError")
        $error_msg = "Le mot de passe doit avoir au moins 8 caracteres";

    if ($_GET["error"] == "emptyfield")
        $error_msg = "veuillez completer tout les champs!";
}

require_once VIEW . "profil.php";

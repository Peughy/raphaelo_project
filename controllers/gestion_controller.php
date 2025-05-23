<?php

$nbrs_users  = 0;
$reservation_informations  = [];
$activity_informations = [];
$reservation_numbers = [];
$date_searching  ="";


require_once MODEL."gestion_model.php";
require_once MODEL."produit_model.php";
require_once "class/AjouterLivreur.php";
require_once "class/AjouterProduit.php";

$model_gestion = new Gestion();

// users informations
$nbrs_client = 0 ;
$users_informations = $model_gestion->getUserInformations();
foreach($users_informations as $users_information){
    if($users_information != "gest"){
        $nbrs_users  += 1;
    }
    if($users_information == "client"){
        $nbrs_client  += 1;
    }
}

/*

Traitement livreurs

*/

// fetch representation
$livreur_model = new ModelLivreur();
$representations = $livreur_model->getRepresentations();

// ajouter livreur
if(isset($_POST["ajouter"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $pwd = $_POST["pwd"];
    $representation = $_POST["representation"];

    $add_livreur = new AjouterLivreur();
    $add_livreur->setInformations($name, $email, $pwd, $tel, $representation);

    
}

if(isset($_GET["error"]) && !empty($_GET["error"]) && isset($_GET["addLivreur"]) && $_GET["addLivreur"]="true"){
    if($_GET["error"] == "emptyfield")
        $msg = "Veuillez remplir tout les champs!";

    if($_GET["error"] == "sizeError")
        $msg = "La taille de nom ou de l'email ne doit pas depasser 100 caracteres!";

    if($_GET["error"] == "mailError")
        $msg = "L'addresse mail est invalide!";

    if($_GET["error"] == "accountExist")
        $msg = "Le livreur existe deja!";

    if($_GET["error"] == "error")
        $msg = "Nous avons rencontres un problemes!";
}

$livreur_model = new ModelLivreur();
$livreurs_infos = $livreur_model->getLivreurs();

/*

Traitement produit

*/

// ajouter produit
if(isset($_POST["ajouter_produit"])){
    $name = $_POST["name"];
    $prix = $_POST["prix"];
    $ingredient = $_POST["ingredient"];
    $description = $_POST["description"];
    $type_pizza = $_POST["type_pizza"];
    $image = $_FILES["image"];

    $add_produit = new AjouterProduit();
    $add_produit->setInformations($name, $prix, $ingredient, $description, $type_pizza, $image);
}


if(isset($_GET["error"]) && !empty($_GET["error"]) && isset($_GET["newProduct"]) && $_GET["newProduct"]=="true"){


    $msg = $_GET["error"];

    if($_GET["error"] == "emptyfield")
        $msg = "Veuillez remplir tout les champs!";

    if($_GET["error"] == "sizeError")
        $msg = "La taille du nom de produit depasser 100 caracteres!";

    if($_GET["error"] == "accountExist")
        $msg = "Le produit existe deja!";

    if($_GET["error"] == "error")
        $msg = "Nous avons rencontres une erreur!";

    if($_GET["error"] == "errorImage")
        $msg = "Erreur lors du traitement de la photo!";

}

$produit_model = new ModelProduit();
$products_infos = $produit_model->getAll();


require_once(VIEW."gestion.php");


<?php

require_once('class/Connexion.php');

if(isset($_GET["error"]))
{
    if($_GET["error"] == "emptyfield")
        $error_msg = "Veuillez remplir tout les champs !";

    if($_GET["error"] == "accountExist")
        $error_msg = "Le n'existe pas veuillez reessayer!";

    require_once VIEW."connexion.php";
}


// submit 
if(isset($_POST["connexion"])){
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];

    $connexion = new Connexion();
    $connexion->getInformations($email, $mdp);
}


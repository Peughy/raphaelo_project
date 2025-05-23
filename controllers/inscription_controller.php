<?php

session_start();

if(isset($_GET["error"])){

    if($_GET["error"] == "accountExist")
        $error_msg = "Le compte exite deja!";

    if($_GET["error"] == "mailError")
        $error_msg = "L'addresse mail est pas valide!";

    if($_GET["error"] == "sizeError")
        $error_msg = "La taille ne doit pas exceder 100 caracteres!";

    if($_GET["error"] == "emptyfield")
        $error_msg = "veuillez completer tout les champs!";

    require_once VIEW."inscription.php";
}

// to add the user
if(isset($_POST["inscription"]))
{
    require_once('class/Inscription.php');

    $username = $_POST["username"];
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
    $tel = $_POST["tel"];

    var_dump($_POST);
    
    $inscription = new Inscription();
    $inscription->setInformations($username, $email, $mdp, $tel);
}


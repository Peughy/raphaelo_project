<?php

$user_connection = false;

if(isset($_SESSION["access"]) && isset($_SESSION["id_user"]))
    $user_connection = true;


$action = "home";
if(isset($_GET["action"])){

    if($_GET["action"] == "menu")
        $action = "menu";
    if($_GET["action"] == "localisation")
        $action = "localisation";
}


require_once VIEW."header.php";
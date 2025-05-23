<?php
session_start();

$user_connection = false;

if(isset($_SESSION["access"]) && isset($_SESSION["id_user"]))
    $user_connection = true;


require_once VIEW."header.php";
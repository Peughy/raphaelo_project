<?php

require_once('config.php');

try{
    if(isset($_GET["action"]) && ($_GET["action"] !== ""))
    {
            $action = $_GET["action"];

            if($action == "signIn")
                require_once VIEW."connexion.php";

            if($action == "connexion")
                require_once CONTROLLER."connexion_controller.php";

            if($action == "signUp")
                require_once VIEW."inscription.php";

            if($action == "inscription")
                require_once CONTROLLER."inscription_controller.php";

            if($action == "menu")
                require_once(CONTROLLER.'menu_controller.php');

            if($action == "gestion")
                require_once(CONTROLLER.'gestion_controller.php');

            if($action == "localisation")
                require_once(CONTROLLER.'localisation_controller.php');
            

    }
    else
        require_once(CONTROLLER.'home_controller.php');
}

catch(Exception $e){
    echo $e->getMessage();
}
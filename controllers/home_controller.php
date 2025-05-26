<?php

session_start();

require_once MODEL."menu_model.php";

$model_menu = new ModelMenu();

$commentaires = $model_menu->getAllComment();

require_once VIEW."home.php";
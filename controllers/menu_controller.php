<?php

require_once MODEL."menu_model.php";
require_once MODEL."livreur_model.php";

$menu_model = new ModelMenu();
$model_infos = $menu_model->getInformations();

$pass_info = false;
if(isset($_GET["id_produit"]) && !empty($_GET["id_produit"])){
    $pass_info = true;
    $product_one = $menu_model->getOneInformations($_GET["id_produit"]);
}

// fetch representation
$livreur_model = new ModelLivreur();
$representations = $livreur_model->getRepresentations();

require_once VIEW."menu.php";

<?php

require_once MODEL."localisation_model.php";

$localisation_model = new ModelLocalisation();
$localisations = $localisation_model->getInformations();

require_once VIEW."localisation.php";
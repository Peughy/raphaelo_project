<?php

$root = $_SERVER["DOCUMENT_ROOT"];
$host = $_SERVER["HTTP_HOST"];

define('HOST', "http://".$host."/WEB APPS/raphaelo_project/");
define('ROOT', $root."/WEB APPS/raphaelo_project/");

// dossiers
define('CONTROLLER', ROOT."controllers/");
define('VIEW', ROOT."views/");
define('MODEL', ROOT."models/");

// assets
define('CSS', HOST."assets/css/");
define('JS', HOST."assets/js/");
define('IMG', HOST."assets/images/");
define('PROFIL', HOST."profil/");
define('DOCUMENT', HOST."document/");


//class
define('CLASSES', ROOT."class/");

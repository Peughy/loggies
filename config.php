<?php

$root = $_SERVER["DOCUMENT_ROOT"];
$host = $_SERVER["HTTP_HOST"];

define('HOST', "http://".$host."/WEB APPS/hobbies/");
define('ROOT', $root."/WEB APPS/hobbies/");

// dossiers
define('CONTROLLER', ROOT."controllers/");
define('VIEW', ROOT."views/");
define('MODEL', ROOT."models/");

// assets
define('CSS', HOST."assets/css/");
define('JS', HOST."assets/js/");
define('RES', HOST."assets/res/");


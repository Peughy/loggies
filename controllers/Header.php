<?php

$connect = (isset($_SESSION["access"]) && $_SESSION["access"]) ? true : false;

require_once(VIEW.'header.php');
<?php


use Routeur\Routeur;

define("ROOT", dirname(__DIR__));
require_once ROOT . "/vendor/autoload.php";
Routeur::Routes();

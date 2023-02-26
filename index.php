<?php
//FRONT CONTROLLER

//General settings
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Including system files
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Router.php');
//Connection to DB


//Method call
$router = new Router();
$router->run();




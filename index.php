<?php

// FRONT CONTROLLER

// 1. General settings
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

// 2. Including project files
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');



// 4. start Router
$router = new Router();
$router->run();
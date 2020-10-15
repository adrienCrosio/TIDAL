<?php
session_start();

require('./libs/smarty/Smarty.class.php');
require('./src/router/router.php');

try {
    $bdd = new PDO("mysql:host=localhost;dbname=webapp", "adrien",  "crosio");
    $bdd->query("SET NAMES UTF8");
} catch (Exception $e) {
    echo "Problème de connexion à la bassse de donnée !";
    die();
}

echo("Ça marche !!!!!!\n");
// $string = "goto";
$router = new Router();
// $router->$string($_SERVER['REQUEST_URI']);
$router->goto($_SERVER['REQUEST_URI']);

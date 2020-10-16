<?php
session_start();

require('./libs/smarty/Smarty.class.php');
require('./src/router/router.php');
require('./src/router/config-router.php');

$router = new Route();
generateRoute($router);
$router::run();
try {
    $bdd = new PDO("mysql:host=localhost;dbname=webapp", "adrien",  "crosio");
    $bdd->query("SET NAMES UTF8");
} catch (Exception $e) {
    echo "Problème de connexion à la bassse de donnée !";
    die();
}
// $string = "goto";
// $router->$string($_SERVER['REQUEST_URI']);

<?php
session_start();

require('./libs/smarty/Smarty.class.php');

try {
    $bdd = new PDO("mysql:host=localhost;dbname=webapp", "adrien",  "crosio");
    $bdd->query("SET NAMES UTF8");
} catch (Exception $e) {
    echo "Problème de connexion à la bassse de donnée !";
    die();
}

echo("Ça marche !!!!!!");
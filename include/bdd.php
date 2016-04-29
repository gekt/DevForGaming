<?php

/*  +------------------------------------------------------------------------+
    |                                                                        |
    |                   IDENTIFIANTS DE CONNEXION MYSQL                      |
    |                                                                        |
    +------------------------------------------------------------------------+ */

$db_ip       =      "62.210.244.80";
$db_port     =      "3306";
$db_database =      "devforgaming";
$db_username =      "root";
$db_password =      "dhNJ7W476Z";

/*  +------------------------------------------------------------------------+
    |                                                                        |
    |          INITIALISATION DE LA CONNEXION A LA BASE DE DONNÉES           |
    |                                                                        |
    +------------------------------------------------------------------------+ */

try {
    $DB = new PDO('mysql:host=' . $db_ip . ';port=' . $db_port . ';dbname=' . $db_database, $db_username, $db_password);
    $DB->exec('SET NAMES utf8');
} catch (PDOException $e) {
    echo 'Erreur lors de la connexion à la base de données :<br><br>' . $e;
    die();
}
?>
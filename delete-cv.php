<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 29/04/2016
 * Time: 15:47
 */
session_start();
require_once 'include/bdd.php';
$req2 = $DB->prepare('DELETE FROM cv WHERE id= ?');
$req2->execute([$_GET['id']]);
$answer = $req2->fetch(PDO::FETCH_OBJ);
$_SESSION['flash']['error'] = "Votre CV a bien été supprimé";
header('location: compte.php')
?>
<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 29/04/2016
 * Time: 00:53
 */

session_start();
require_once 'include/bdd.php';
$req2 = $DB->prepare('UPDATE messagerie SET hidden=1, lu=0 WHERE id= ?');
$req2->execute([$_GET['id']]);
$answer = $req2->fetch(PDO::FETCH_OBJ);
$_SESSION['flash']['error'] = "Ce message à bien été supprimé";
header('location: messagerie.php')
?>
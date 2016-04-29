<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 29/04/2016
 * Time: 00:53
 */

require_once 'include/bdd.php';
$req2 = $DB->prepare('DELETE FROM messagerie WHERE id= ?');
$req2->execute([$_GET['id']]);
$answer = $req2->fetch(PDO::FETCH_OBJ);
header('location: messagerie.php')
?>
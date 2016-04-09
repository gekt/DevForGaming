<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 08/04/2016
 * Time: 17:37
 */
session_start();
include 'bdd.php';
if (isset($_POST['connexion'])){
    $login = "";
    $mdp = "";
    $req = $DB->query('SELECT * FROM membres WHERE pseudo="' . $_POST["pseudo"] . '"');
    while ($d = $req->fetch(PDO::FETCH_OBJ)) {
        $login = $d->pseudo;
        $mdp = $d->mdp;
    }
    $pass_hache_co = sha1($_POST['mdp_co']);
    if ($pass_hache_co != $mdp) {
        $erreur = "<div><div class=\"row center-align\"><div class=\"header\"><strong>Erreur!</strong> Le mot de passe est incorrect !</div></div></div>";
    }else{
        session_start();
        $_SESSION['login'] = $_POST['pseudo'];
        header('Location: index.php');
        exit();

    }
}
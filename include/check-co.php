<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 08/04/2016
 * Time: 17:37
 */
session_start();
if (isset($_POST['connexion'])){
    require_once 'bdd.php';
    $req = $DB->prepare("SELECT * FROM membres WHERE pseudo= ?");
    $req->execute([$_POST["pseudo"]]);
    $user = $req->fetch(PDO::FETCH_OBJ);
    $pass_hache_co = sha1($_POST['mdp_co']);
    if ($user == null){
        $erreur = "<div><div class=\"row center-align\"><div class=\"header\"><strong>Erreur!</strong> Identifiant incorrect !</div></div></div>";
    }else {
    if ($pass_hache_co != $user->mdp) {
        $erreur = "<div><div class=\"row center-align\"><div class=\"header\"><strong>Erreur!</strong> Identifiant incorrect !</div></div></div>";
    }else{
        session_start();
        $_SESSION['login'] = $_POST['pseudo'];
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['error'] = "Vous êtes connécté";
        header('Location: compte.php');
        exit();

    }
    }
}
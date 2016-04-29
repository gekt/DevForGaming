<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 29/04/2016
 * Time: 16:14
 */
session_start();

if (isset($_POST['update-cv'])) {
    require_once 'bdd.php';
    $req = $DB->prepare("UPDATE cv SET id_user= ?, pseudo= ?, role= ?, niveau= ?, jeu= ?, desc_perso= ?, desc_prjt= ?, exp= ?, date_add= ? WHERE id= ?");
    $req->execute([$_SESSION['auth']->id, $_SESSION['auth']->pseudo, $_POST['role'], $_POST['niveau'], $_POST['Jeu'], $_POST['desc_perso'], $_POST['desc_prjt'], $_POST['exp'], $_POST['date'], $_POST['id']]);
    $_SESSION['flash']['error'] = "Votre CV à bien été mis à jour";
    header('location: ../compte.php');
}

?>
<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 08/04/2016
 * Time: 17:10
 */
session_start();
include 'bdd.php';
require 'recaptcha.php';

$login = "";
$captcha = new Recaptcha('6Lc78xwTAAAAAMmMXuI0C0jSpB5A71_fruVkSArw', '6Lc78xwTAAAAAKYCf9r-6_SXAyMIWpUbi6tDg_yd');

if (!empty($_POST)) {
    if ($captcha->isValid($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']) === false) { $erreur = "<div><div class=\"row center-align\"><div class=\"header\"><strong>Erreur!</strong> Captcha incorrect !</div></div></div>"; } 
    else {

        $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $req = $DB->query('SELECT * FROM membres WHERE pseudo="' . $_POST["pseudo"] . '"');
        while ($d = $req->fetch(PDO::FETCH_OBJ)) {
            $login = $d->pseudo;
        }
        if ($_POST['pseudo'] == $login) {
            $erreur = "<div><div class=\"row center-align\"><div class=\"header\"><strong>Erreur!</strong> Ce pseudo est déja pris !</div></div></div>";
        } elseif ($_POST['mdp1'] != $_POST['mdp2']) {
            $erreur = "<div><div class=\"row center-align\"><div class=\"header\"><strong>Erreur!</strong> Les mots de passe ne corresponde pas!</div></div></div>";
        } else {
            // Hachage du mot de passe
            $pass_hache = sha1($_POST['mdp1']);
            // Autres variables
            $pseudo = $_POST['pseudo'];
            $email = $_POST['email'];
            $date = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));

            // Insertion
            $req = $DB->prepare('INSERT INTO membres(pseudo, nom, prenom, mdp, email, datedenaissance, sexe, date_inscription) VALUES(:pseudo, :nom, :prenom, :mdp, :email, :datedenaissance, :sexe, :date_inscription)');
            $req->execute(array(
                'pseudo' => $pseudo,
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'mdp' => $pass_hache,
                'email' => $email,
                'datedenaissance' => $_POST['date'],
                'sexe' => $_POST['genre'],
                'date_inscription' => $date));
            @mkdir ('user-folder/' . $_POST['pseudo'] . '');
            header('Location: login.php');
            exit();
        }
    }
}

?>


<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 28/04/2016
 * Time: 23:03
 */

session_start();
if (!isset($_SESSION['login'])){
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="theme-color" content="#444444">

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/custom.css" media="screen,projection"/>
</head>
<body>

<!-- Preloader V2 -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<!-- INCLUDE NAVBAR -->
<?php include 'include/navbar.php';
    $dontshownewmsg = true; 
?>

<!-- PARALLAX PRINCIPAL -->
<div class="parallax-container">
    <div class="parallax"><img src="http://www.developpeur-informatique.fr/bundles/alexwebsiteindex/img/code.jpg"></div>
    <div class="row">
        <div class="center-align col offset-l7 l4" style="padding-top: 50px;">
            <h2 id="AnimTitle1" class="white-text">Right Aligned Caption</h2>
            <h5 id="AnimSubtitle1" class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
        <div class="center-align col offset-l1 l4" style="padding-top: 50px;">
            <h2 id="AnimTitle2" class="white-text hideText">Right Aligned Caption</h2>
            <h5 id="AnimSubtitle2" class="light grey-text text-lighten-3 hideText">Here's our small slogan.</h5>
        </div>
    </div>
</div>

<!-- CONTENT REGISTER -->
<div class="row white z-depth-3">
    <h2 class="header center-align title-blue">Messagerie</h2>
</div>
<div class="row">
    <?php
    require_once 'include/bdd.php';
    $req = $DB->prepare("SELECT * FROM messagerie WHERE destinataire= ?");
    $req->execute([$_SESSION['login']]);
    $user = $req->fetch(PDO::FETCH_OBJ);
    ?>
    <div class="col s12">
        <div class="white col z-depth-3 offset-l1 l10 m12 s12">
            <ul class="tabs">
                <li class="tab col s6"><a class="active" href="#msg_received">Message(s) reçu(s)</a></li>
                <li class="tab col s6"><a href="#msg_sent">Message(s) envoyé(s)</a></li>
            </ul>
        </div>
    </div>
    <div class="col s12">
        <section id="msg_received" class="messagerie z-depth-3 white col offset-l1 l10 m12 s12 messagerie-content">
            <table class="bordered">
                <thead>
                <tr>
                    <th>Sujet</th>
                    <th>De</th>
                    <th>État</th>
                    <th>Date d'envoi</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                <?php
                require_once 'include/bdd.php';
                $req = $DB->prepare('SELECT * FROM messagerie WHERE destinataire=? AND hidden=0');
                $req->execute([$_SESSION['auth']->pseudo]);
                    while ($d = $req->fetch(PDO::FETCH_OBJ)) {?>
                        <tr>
                            <td><?= $d->sujet ?></td>
                            <td><?= $d->expediteur ?></td>
                            <?php if ($d->lu == 1) { ?>
                            <td><i class="red-text text-darken-2 material-icons tooltipped" data-position="right" data-delay="50" data-tooltip="Nouveau !">new_releases</i></td>
                            <?php }else { ?>
                            <td><i class="green-text material-icons tooltipped" data-position="right" data-delay="50" data-tooltip="Lu !">done</i></td>
                            <?php } ?>
                            <td><?= date('d/m/y à H:i:s', $d->time); ?></td>
                            <td><a href="read.php?id=<?= $d->id ?>" title="Lire le message"><i class="material-icons">remove_red_eye</i></a><a href="delete-mp.php?id=<?= $d->id ?>" title="Supprimer le message"><i class="material-icons">delete_forever</i></a><a href="send-mp.php?id=<?= $d->id ?>&repondre=1" title="Repondre"><i class="material-icons">send</i></a></td>
                        </tr>
                <?php } ?>
                </tbody>
            </table>
            <?php $req = $DB->prepare('SELECT * FROM messagerie WHERE destinataire=? AND hidden=0');
            $req->execute([$_SESSION['auth']->pseudo]);
            $d = $req->fetch(PDO::FETCH_OBJ);
            if ($d == null){?>
                <p class="center-align">Aucun message</p>
            <?php } ?>
            <a class="waves-effect waves-light btn btn-ecrire" onclick="changePage('send-mp.php')">Ecrire</a>
        </section>
        <section id="msg_sent" class="messagerie z-depth-3 white col offset-l1 l10 m12 s12 messagerie-content">
            <table class="bordered">
                <thead>
                <tr>
                    <th>Sujet</th>
                    <th>À</th>
                    <th>État</th>
                    <th>Date d'envoi</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                <?php
                require_once 'include/bdd.php';
                $req = $DB->prepare('SELECT * FROM messagerie WHERE expediteur=?');
                $req->execute([$_SESSION['auth']->pseudo]);
                    while ($d = $req->fetch(PDO::FETCH_OBJ)) {?>
                        <tr>
                            <td><?= $d->sujet ?></td>
                            <td><?= $d->destinataire ?></td>

                            <?php if ($d->lu == 1) { ?>
                            <td><i class="red-text text-darken-4 material-icons tooltipped" data-position="right" data-delay="50" data-tooltip="Non-lu !">priority_high</i></td>
                            <?php } else { ?>
                            <td><i class="green-text material-icons tooltipped" data-position="right" data-delay="50" data-tooltip="Lu !">done</i></td>
                            <?php } ?>
                            <td><?= date('d/m/y à H:i:s', $d->time); ?></td>
                            <td><a href="read.php?id=<?= $d->id ?>" title="Lire le message"><i class="material-icons">remove_red_eye</i></a></td>
                        </tr>
                <?php } ?>
                </tbody>
            </table>
            <?php $req = $DB->prepare('SELECT * FROM messagerie WHERE expediteur=?');
            $req->execute([$_SESSION['auth']->pseudo]);
            $d = $req->fetch(PDO::FETCH_OBJ);
            if ($d == null){?>
                <p class="center-align">Aucun message envoyé</p>
            <?php } ?>
        </section>
    </div>
</div>
<div class="parallax-container parallax-little">
    <div class="parallax"><img src="https://images8.alphacoders.com/413/413114.jpg" style="display: block; transform: translate3d(-50%, 492px, 0px);"></div>
</div>

<!-- FOOTER -->
<?php include 'include/footer.php';?>

<!-- SCRIPTS JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.4/SmoothScroll.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include 'include/alert.php';?>

</body>
</html>


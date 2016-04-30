<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 29/04/2016
 * Time: 00:15
 */
session_start();
if (!isset($_SESSION['login'])){
    header('Location: index.php');
}



require_once 'include/bdd.php';
$req1 = $DB->prepare("SELECT * FROM messagerie WHERE id= ?");
$req1->execute([$_GET['id']]);
$owner = $req1->fetch(PDO::FETCH_OBJ);
if ($owner->destinataire == $_SESSION['auth']->pseudo) {
    $req2 = $DB->prepare("UPDATE messagerie SET lu=0 WHERE id= ?");
    $req2->execute([$_GET['id']]);
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
<?php include 'include/navbar.php'; ?>

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
    <?php require_once 'include/bdd.php';
    $req = $DB->prepare("SELECT * FROM messagerie WHERE id= ?");
    $req->execute([$_GET['id']]);
    $message = $req->fetch(PDO::FETCH_OBJ);?>
    <h2 class="header center-align title-blue">Message de <?= $message->expediteur ?></h2>
</div>
<div class="row">
    <section class="white z-depth-3 col offset-l2 l8 s12 m12">
        <h3 class="center-align">Sujet:</h3><br><p class="center-align text-mp"><?= $message->sujet ?></p>
        <h3 class="center-align">Message:</h3><br> <p class="center-align text-mp"><?= $message->message ?></p>
    </section>
</div>
<div class="fixed-action-btn top" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li><a href="send-mp.php?id=<?= $_GET['id'] ?>&repondre=1" class="btn-floating green"><i class="material-icons" title="Répondre à ce message">mode_edit</i></a></li>
        <li><a href="delete-mp.php?id=<?= $_GET['id'] ?>" class="btn-floating red darken-1"><i class="material-icons" title="Supprimer ce message">delete_forever</i></a></li>
    </ul>
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


</body>
</html>



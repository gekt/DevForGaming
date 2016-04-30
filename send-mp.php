<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 28/04/2016
 * Time: 23:57
 */
session_start();
if (!isset($_SESSION['login'])){
    header('Location: index.php');
}

if (isset($_POST['envoyer'])) {
    require_once 'include/bdd.php';
    $time_now = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
    $req = $DB->prepare("INSERT INTO messagerie SET destinataire= ?, expediteur= ?, sujet= ?, message= ?, time= ?");
    $req->execute([$_POST['destinataire'], $_SESSION['login'], $_POST['sujet'], $_POST['Message'], $time_now]);
    $user = $req->fetch(PDO::FETCH_OBJ);
    $_SESSION['flash']['error'] = "Votre message à été envoyé";
    header('location: messagerie.php');
}

if (isset($_GET['repondre'])) {
    require_once 'include/bdd.php';
    $req2 = $DB->prepare('SELECT * FROM messagerie WHERE id=?');
    $req2->execute([$_GET['id']]);
    $answer = $req2->fetch(PDO::FETCH_OBJ);
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
    <h2 class="header center-align title-blue">Envoyer un message</h2>
</div>
<div class="row">
    <section class="white z-depth-3 col offset-l2 l8 s12">
        <form action="send-mp.php" method="post" class="col s12">
            <div class="row">
                <div class="input-field col offset-l2 l8 s12" style="margin-top: 35px;">
                    <input name="destinataire" id="destinataire" type="text" class="validate" value="<?php if (isset($_GET['repondre']) == 1){echo $answer->expediteur; } ?>" required="">
                    <label class="label-inscription" for="destinataire">Destinataire</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col offset-l2 l8 s12">
                    <input name="sujet" id="sujet" type="text" class="validate" required="">
                    <label class="label-inscription" for="sujet">Sujet</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col offset-l2 l8 s12">
                    <textarea id="Message" name="Message" class="materialize-textarea" required></textarea>
                    <label class="label-inscription" for="Message">Message</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 center-align">
                    <button class="btn btn-register waves-effect waves-light" name="envoyer" type="submit">Envoyer
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
    </section>
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


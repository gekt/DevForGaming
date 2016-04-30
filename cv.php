<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 28/04/2016
 * Time: 17:56
 */

session_start();
if (!isset($_SESSION['login'])){
    header('Location: index.php');
}

require_once 'include/bdd.php';
$req = $DB->prepare("SELECT * FROM cv WHERE id= ?");
$req->execute([$_GET['id']]);
$data = $req->fetch(PDO::FETCH_OBJ);

if (isset($_POST['engager'])) {
    require_once 'include/bdd.php';
    $time_now = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
    $req2 = $DB->prepare("INSERT INTO messagerie SET destinataire= ?, expediteur= ?, sujet= ?, message= ?, time= ?");
    $req2->execute([$_POST['destinataire'], $_SESSION['auth']->pseudo, $_POST['sujet'], $_POST['message'], $time_now]);
    $_SESSION['flash']['success'] = "Offre envoyée";
    header('location: messagerie.php');
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
    <script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
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

<!-- CONTENT CV -->
<div class="row cv-box-content">
    <article class="col offset-l2 l8 s12 m12 white z-depth-3">
        <section class="col l12 m12 s12 center-align">
            <?php
            $avatar = "user-folder/" . $data->pseudo . "/" . $data->pseudo . "_avatar.png";
            if (file_exists($avatar)) {?>
                <img src='<?php echo $avatar ?>' alt="profile image" class="circle responsive-img cv-img z-depth-2" style="width: 200px;border-radius: 100px;height: 200px;"> <!-- notice the "circle" class -->
            <?php } else { ?>
                <img src="img/avatar_unknow.png" alt="profile image" class="circle responsive-img cv-img z-depth-2" style="width: 200px;border-radius: 100px;height: 200px;"> <!-- notice the "circle" class -->
            <?php } ?>
        </section>
        <section class="col l12 m12 s12 center-align">
            <h2><?= $data->pseudo ?></h2>
        </section>
        <section class="col offset-l2 offset-s2 offset-m2 l8 s8 m8">
            <span class="col l12 s12 m12 center-align cv-text"><?= $data->role ?> <?= $data->niveau ?></span>
        </section>
        <section class="col offset-l2 offset-s2 offset-m2 l8 s8 m8">
            <div class="divider"></div>
        </section>
        <section class="col l12 s12 m12">
            <h4 class="center-align l12 s12 m12">Jeu:</h4>
            <span class="col l12 s12 m12 center-align cv-text"><?= $data->jeu ?></span>
        </section>
        <section class="col l12 s12 m12">
            <ul class="collapsible col l12 s12 m12" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header active "><i class="material-icons">filter_drama</i><span class="title-collapse-cv">Ma description</span></div>
                    <div class="collapsible-body"><p class="text-collapse-cv"><?= html_entity_decode(nl2br(htmlentities(trim($data->desc_perso)))) ?></p></div>
                </li>
                <li>
                    <div class="collapsible-header active "><i class="material-icons">place</i><span class="title-collapse-cv">Je recherche</span></div>
                    <div class="collapsible-body"><p class="text-collapse-cv"><?= html_entity_decode(nl2br(htmlentities(trim($data->desc_prjt)))) ?></p></div>
                </li>
                <li>
                    <div class="collapsible-header active "><i class="material-icons">whatshot</i><span class="title-collapse-cv">Mon expérience</span></div>
                    <div class="collapsible-body"><p class="text-collapse-cv"><?= html_entity_decode(nl2br(htmlentities(trim($data->exp)))) ?></p></div>
                </li>
            </ul>
        </section>
        <?php if ($data->id_user != $_SESSION['auth']->id){ ?>
        <section class="col l12 s12 m12 center-align cv-submit-bt">
            <a data-target="modal_engager" class="waves-effect waves-light btn modal-trigger">Engager<i class="material-icons right">mail</i></a>
        </section>
        <?php } ?>
    </article>
</div>
<!-- CONTENT CV -->
<div class="parallax-container parallax-little">
    <div class="parallax"><img src="https://images8.alphacoders.com/413/413114.jpg" style="display: block; transform: translate3d(-50%, 492px, 0px);"></div>
</div>

<!-- FOOTER -->
<?php include 'include/modal/engager.php';?>
<?php include 'include/footer.php';?>

<!-- SCRIPTS JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.4/SmoothScroll.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>


</body>
</html>

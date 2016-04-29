<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 29/04/2016
 * Time: 15:52
 */

session_start();

require_once 'include/bdd.php';
$req2 = $DB->prepare("SELECT * FROM cv WHERE id= ?");
$req2->execute([$_GET['id']]);
$cv = $req2->fetch(PDO::FETCH_OBJ);


if (!isset($_SESSION['login']) && (!isset($_GET['id'])) || (isset($_SESSION['login']) && (!isset($_GET['id'])))) {
    header('Location: index.php');
} else {
    if ($cv->id_user != $_SESSION['auth']->id){
        header('Location: index.php');
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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

<!-- CONTENT CV -->
<div class="row cv-box-content">
    <section class="col offset-l2 offset-m1 l8 s12 m10 white z-depth-3">
        <section class="col l12 m12 s12 center-align">
            <h1>Modifier mon CV</h1>
        </section>
        <form action="include/query-edit-cv.php" method="post" class="col s12">
            <div class="row">
                <div class="input-field col offset-l2 offset-m2 l8 m8 s12">
                    <input name="role" id="role" type="text" class="validate" value='<?= $cv->role ?>' placeholder="Ex. Developpeur Web, Graphiste, Builder, etc..." required="">
                    <label class="label-inscription" for="role">Role</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col offset-l2 offset-m2 l8 m8 s12">
                    <select class="browser-default styled-select" name="niveau">
                        <option value='<?= $cv->niveau ?>'><?= $cv->niveau ?></option>
                        <option value="Débutant">Débutant</option>
                        <option value="Amateur">Amateur</option>
                        <option value="Expérimenté">Expérimenté</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-field col offset-l2 offset-m2 l8 m8 s12">
                    <input name="Jeu" id="Jeu" type="text" class="validate" value='<?= $cv->jeu ?>' placeholder="Sur quel jeu voulez-vous trouver un projet" required="">
                    <label class="label-inscription" for="Jeu">Jeu</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col offset-l2 offset-m2 l8 m8 s12">
                    <textarea id="desc_perso" name="desc_perso" class="materialize-textarea"><?= $cv->desc_prjt ?></textarea>
                    <label class="label-inscription" for="desc_perso">Description de vous</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col offset-l2 offset-m2 l8 m8 s12">
                    <textarea id="desc_prjt0" name="desc_prjt" class="materialize-textarea"><?= $cv->desc_prjt ?></textarea>
                    <label class="label-inscription" for="desc_prjt">Description du projet que vous recherchez</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col offset-l2 offset-m2 l8 m8 s12">
                    <textarea id="exp" name="exp" class="materialize-textarea"><?= $cv->desc_prjt ?></textarea>
                    <label class="label-inscription" for="exp">Parlez de votre expérience</label>
                </div>
            </div>
            <div class="row center-align">
                <button class="btn waves-effect waves-light btn-register" type="submit" name="update-cv">Mettre à jour mon CV
                    <i class="material-icons right">add</i>
                </button>
            </div>
            <input name="id" type="hidden" class="validate" value='<?= $cv->id ?>'>
            <input name="date" type="hidden" class="validate" value='<?= $cv->date_add ?>'>
        </form>
    </section>
</div>
<section class="col l12 s12 m12 center-align cv-submit-bt">

</section>
<!-- CONTENT CV -->
<div class="parallax-container parallax-little">
    <div class="parallax"><img src="https://images8.alphacoders.com/413/413114.jpg" style="display: block; transform: translate3d(-50%, 492px, 0px);"></div>
</div>


<div class="row">

</div>
<!-- FOOTER -->
<?php include 'include/footer.php';?>

<!-- SCRIPTS JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.4/SmoothScroll.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>


</body>
</html>


<?php
/**
 * Created by G.E.K.T & Arthix
 * Date: 08/04/2016
 * Time: 03:43
*/
    session_start();
    require_once 'include/bdd.php';
    require_once 'include/functions.php';
    //var_dump($_POST);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="theme-color" content="#444444">

        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link type="text/css" rel="stylesheet" href="css/custom.css"  media="screen,projection"/>
    </head>
    <body>

        <!-- Preloader V2 -->
        <div id="loader-wrapper">
            <div id="loader"></div>        
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>

        <!-- INCLUDE NAVBAR -->
        <?php require_once 'include/navbar.php'; ?>

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

        <div class="section white">
            <div class="row container center-align">
                <h2 class="header">Résultat de la recherche</h2>
            </div>
        </div>

        <div class="row">
            <?php if (isset($_POST['choice'])) {
                if ($_POST['choice'] == "cv") {
                    $req = $DB->prepare("SELECT * FROM cv WHERE pseudo=? OR jeu=?");
                    $req->execute([$_POST["search"], $_POST["search"]]);
                    while ($cv = $req->fetch(PDO::FETCH_OBJ)) { ?>
                        <div class="col l3">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="img/parallax1.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4"><?= $cv->pseudo ?><i class="material-icons right">more_vert</i></span>
                                    <p><a onclick="changePage('cv.php?id=<?= $cv->id ?>')">Voir plus</a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><?= $cv->pseudo ?><i class="material-icons right">close</i></span>
                                    <p><?= $cv->desc_perso ?></p>
                                </div>
                            </div>
                        </div> <?php
                    }
                    $req->execute([$_POST["search"], $_POST["search"]]);
                    $cv = $req->fetch(PDO::FETCH_OBJ);
                    if ($cv == null) { ?>
                        <p class="center-align">Aucun résultat, fromage.</p> <?php
                    }
                }
                elseif ($_POST['choice'] == "jeu") {
                    $req1 = $DB->prepare("SELECT * FROM cv WHERE jeu=?");
                    $req2 = $DB->prepare("SELECT * FROM projet WHERE jeu=?");
                    $req1->execute([$_POST["search"]]);
                    $req2->execute([$_POST["search"]]);
                    while ($jeu1 = $req1->fetch(PDO::FETCH_OBJ)) { ?>
                        <div class="col l3">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="img/parallax1.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4"><?= $jeu1->pseudo ?><i class="material-icons right">more_vert</i></span>
                                    <p><a onclick="changePage('cv.php?id=<?= $jeu1->id ?>')">Voir plus</a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><?= $jeu1->pseudo ?><i class="material-icons right">close</i></span>
                                    <p><?= $jeu1->desc_perso ?></p>
                                </div>
                            </div>
                        </div> <?php
                    }
                    while ($jeu2 = $req2->fetch(PDO::FETCH_OBJ)) { ?>
                        <div class="col l3">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="img/parallax1.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4"><?= $jeu2->titre_prjt ?><i class="material-icons right">more_vert</i></span>
                                    <p><a onclick="changePage('projet.php?id=<?= $jeu2->id ?>')">Voir plus</a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><?= $jeu2->titre_prjt ?><i class="material-icons right">close</i></span>
                                    <p><?= $jeu2->desc_prjt ?></p>
                                </div>
                            </div>
                        </div> <?php
                    }
                    $req1->execute([$_POST["search"]]);
                    $req2->execute([$_POST["search"]]);
                    $jeu1 = $req1->fetch(PDO::FETCH_OBJ);
                    $jeu2 = $req2->fetch(PDO::FETCH_OBJ);
                    if ( ($jeu1 == null) && ($jeu2 == null) ) { ?>
                        <p class="center-align">Aucun résultat, fromage.</p> <?php
                    }
                }
                elseif ($_POST['choice'] == "projet") {
                    $req = $DB->prepare("SELECT * FROM projet WHERE pseudo=? OR titre_prjt=? OR jeu=?");
                    $req->execute([$_POST["search"], $_POST["search"], $_POST["search"]]);
                    while ($projet = $req->fetch(PDO::FETCH_OBJ)) { ?>
                        <div class="col l3">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="img/parallax1.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4"><?= $projet->titre_prjt ?><i class="material-icons right">more_vert</i></span>
                                    <p><a onclick="changePage('projet.php?id=<?= $projet->id ?>')">Voir plus</a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><?= $projet->titre_prjt ?><i class="material-icons right">close</i></span>
                                    <p><?= $projet->desc_prjt ?></p>
                                </div>
                            </div>
                        </div> <?php
                    }
                    $req->execute([$_POST["search"], $_POST["search"], $_POST["search"]]);
                    $projet = $req->fetch(PDO::FETCH_OBJ);
                    if ($projet == null) { ?>
                        <p class="center-align">Aucun résultat, fromage.</p> <?php
                    }
                }
            } ?>
        </div>

        <!-- PARALLAX SECONDAIRE -->
        <div class="parallax-container parallax-little">
            <div class="parallax"><img src="https://images8.alphacoders.com/413/413114.jpg"></div>
        </div>

        <?php include 'include/footer.php';?>

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.4/SmoothScroll.min.js"></script>

    </body>
</html>



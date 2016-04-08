<?php
/**
 * Created by G.E.K.T & Arthix
 * Date: 08/04/2016
 * Time: 03:43
*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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

        <div class="section white">
            <div class="row container center-align">
                <h2 class="header">Résultat de la recherche</h2>
            </div>
        </div>

        <div class="row">
            <div class="col l3">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/parallax1.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Eria-Network<i class="material-icons right">more_vert</i></span>
                        <p><a href="#">Voir plus</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Eria-Network<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col l3">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/parallax1.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Eria-Network<i class="material-icons right">more_vert</i></span>
                        <p><a href="#">Voir plus</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Eria-Network<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col l3">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/parallax1.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Eria-Network<i class="material-icons right">more_vert</i></span>
                        <p><a href="#">Voir plus</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Eria-Network<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col l3">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/parallax1.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Eria-Network<i class="material-icons right">more_vert</i></span>
                        <p><a href="#">Voir plus</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Eria-Network<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'include/footer.php';?>

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.4/SmoothScroll.min.js"></script>

    </body>
</html>



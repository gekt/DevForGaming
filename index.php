<?php
/**
 * Created by G.E.K.T & Arthix
 * Date: 08/04/2016
 * Time: 03:43
*/
    session_start();
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

        <!-- MISES EN AVANT -->
        <div class="row para-main">
            <div class="col l6 m12 s12">
                <div class="white row z-depth-2">
                    <h3 class="header center-align title-blue">CVs en vitrine !</h3>
                    <p class="center-align" style="color: rgb(119, 119, 119);">Ces CVs ont été mis en avant !</p>
                    <div class="col l4">
                        <div class="card small">
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
                    <div class="col l4">
                        <div class="card small">
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
                    <div class="col l4">
                        <div class="card small">
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
                    <div class="col l4">
                        <div class="card small">
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
                    <div class="col l4">
                        <div class="card small">
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
                    <div class="col l4">
                        <div class="card small">
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
            </div>
            <div class="col l6 m12 s12">
                <div class="white row z-depth-2">
                    <h3 class="header center-align title-blue">Projets en vitrine !</h3>
                    <p class="center-align" style="color: rgb(119, 119, 119);">Ces projets ont été mis en avant !</p>
                    <div class="col l4">
                        <div class="card small">
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
                    <div class="col l4">
                        <div class="card small">
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
                    <div class="col l4">
                        <div class="card small">
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
                    <div class="col l4">
                        <div class="card small">
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
                    <div class="col l4">
                        <div class="card small">
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
                    <div class="col l4">
                        <div class="card small">
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
            </div>
        </div>

        <!-- PARALLAX SECONDAIRE -->
        <div class="parallax-container parallax-little">
            <div class="parallax"><img src="https://images8.alphacoders.com/413/413114.jpg"></div>
        </div>

        <!-- DERNIER PROJETS / CV -->
        <div class="row para-main">
                <div class="col l6 m12 s12">
                    <div class="white center-align z-depth-2">
                        <h3 class="header title-blue">Derniers CVs</h3>
                        <ul class="collection border-left-right">
                            <li class="collection-item avatar">
                                <i class="material-icons circle">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle green">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle red">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle red">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle red">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle red">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle red">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle red">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle red">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col l6 m12 s12">
                    <div class="white center-align z-depth-2">
                        <h3 class="header title-blue">Derniers Projets</h3>
                        <ul class="collection border-left-right">
                            <li class="collection-item avatar">
                                <i class="material-icons circle">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle green">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle red">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle red">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle red">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle red">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle red">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle red">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle red">account_circle</i>
                                <span class="title">Titre</span>
                                <p>Catégorie</p>
                                <a class="waves-effect waves-light btn light-blue secondary-content">voir<i class="material-icons right">send</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>

        <!-- INCLUDE FOOTER -->
        <?php include 'include/footer.php';?>

        <!-- SCRIPTS JS -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.4/SmoothScroll.min.js"></script>

    </body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 09/04/2016
 * Time: 01:32
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
    <h2 class="header center-align title-blue">Mon compte</h2>
</div>
<div class="row">
    <div class="col l2 s12 z-depth-3 white">
        <div class="center-align col l12 s12"><h2>Mon profil</h2></div>
        <div class="center-align col l12 s12"><img src="img/avatar.jpg" alt="profile image" class="circle responsive-img z-depth-2" style="width: 110px;"></div>
        <div class="center-align col l12 s12">
        <ul id="profile-page-about-details" class="collection z-depth-1" style="font-size: 20px; color: #1a237e">
            <li class="collection-item">
                <div class="row">
                    <div class="col s5"><i class="mdi-action-wallet-travel"></i> Pseudo</div>
                    <div class="col s7 right-align">gekt</div>
                </div>
            </li>
            <li class="collection-item">
                <div class="row">
                    <div class="col s5 darken-5"><i class="mdi-social-poll"></i> Nom</div>
                    <div class="col s7 right-align">Torre</div>
                </div>
            </li>
            <li class="collection-item">
                <div class="row">
                    <div class="col s5 darken-1"><i class="mdi-social-domain"></i> Prénom</div>
                    <div class="col s7 right-align">Kevin</div>
                </div>
            </li>
            <li class="collection-item">
                <div class="row">
                    <div class="col s5 darken-1"><i class="mdi-social-cake"></i> Date de naissance</div>
                    <div class="col s7 right-align">26th June, 1997</div>
                </div>
            </li>
            <li class="collection-item">
                <div class="row">
                    <div class="col s5 darken-1"><i class="mdi-social-cake"></i> Date d'inscription</div>
                    <div class="col s7 right-align">26th June, 1997</div>
                </div>
            </li>
        </ul>
    </div>
    </div>
    <div class="col l8 s12 offset-l1 z-depth-3 white box-compte-contenu">
        <div class="center-align"><h2>Mon activitée</h2></div>
        <div class="row">
            <div class="col s12">
                <ul class="tabs tabs-compte-cv-pj">
                    <li class="tab col s3"><a href="#test1">Mes CVs</a></li>
                    <li class="tab col s3"><a class="active" href="#test2">Mes Projets</a></li>
                    <li class="tab col s3"><a href="#test3">Tab</a></li>
                    <li class="tab col s3"><a href="#test4">Test 4</a></li>
                </ul>
            </div>
            <div id="test1" class="col s12">
                <div class="col s12 m12 l12">
                    <table class="bordered">
                        <thead>
                        <tr>
                            <th data-field="id">Nom</th>
                            <th data-field="name">Visites</th>
                            <th data-field="price">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Alvin</td>
                            <td>Eclair</td>
                            <td>$0.87</td>
                        </tr>
                        <tr>
                            <td>Alan</td>
                            <td>Jellybean</td>
                            <td>$3.76</td>
                        </tr>
                        <tr>
                            <td>Jonathan</td>
                            <td>Lollipop</td>
                            <td>$7.00</td>
                        </tr>
                        <tr>
                            <td>Shannon</td>
                            <td>KitKat</td>
                            <td>$9.99</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="test2" class="col s12">
                <div class="col s12 m12 l12">
                    <table class="bordered">
                        <thead>
                        <tr>
                            <th data-field="id">Nom</th>
                            <th data-field="name">Visites</th>
                            <th data-field="price">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Alvin</td>
                            <td>Eclair</td>
                            <td>$0.87</td>
                        </tr>
                        <tr>
                            <td>Alan</td>
                            <td>Jellybean</td>
                            <td>$3.76</td>
                        </tr>
                        <tr>
                            <td>Jonathan</td>
                            <td>Lollipop</td>
                            <td>$7.00</td>
                        </tr>
                        <tr>
                            <td>Shannon</td>
                            <td>KitKat</td>
                            <td>$9.99</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            <div id="test3" class="col s12">Test 3

            </div>
            <div id="test4" class="col s12">Test 4

            </div>
        </div>
    </div>
</div>
</div>
<div class="parallax-container parallax-little">
    <div class="parallax"><img src="https://images8.alphacoders.com/413/413114.jpg" style="display: block; transform: translate3d(-50%, 492px, 0px);"></div>
</div>
<!------- ONLY BOUTON EDIT MED AND DOWN ----->
<div class="fixed-action-btn top" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
        <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
        <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
        <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
</div>



<div class="row">

</div>
<!-- FOOTER -->
<?php include 'include/footer.php';?>

<!-- SCRIPTS JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.4/SmoothScroll.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="js/index.js"></script>

</body>
</html>

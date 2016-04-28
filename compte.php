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
<!--<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>-->

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
    <?php
        require_once 'include/bdd.php';
        $req = $DB->prepare("SELECT * FROM membres WHERE pseudo= ?");
        $req->execute([$_SESSION['login']]);
        $user = $req->fetch(PDO::FETCH_OBJ);
    ?>
    <div class="col l2 s12 z-depth-3 white box-compte-contenu">
        <div class="center-align col s12 m12 l12"><h3>Mes infos</h3></div>
        <div class="center-align col s12 m12 l12"><img src="img/avatar.jpg" alt="profile image" class="circle responsive-img z-depth-2" style="width: 110px;"></div>
        <div class="center-align col s12 m12 l12">
            <div class="row" style="margin-top: 20px;">
                <div class="col s12 m12 l12">
                    <i class="left material-icons pink-text accent-4" style="font-size: 34px; line-height: 48px;">assignment_ind</i>
                    <div class="col s9 m9 l9 left-align profil-text"><?= $user->pseudo ?></div>
                </div>
                <div class="col s12 m12 l12" style="margin: 5px 0; border: 0; height: 1px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(150, 150, 150, 0.75), rgba(0, 0, 0, 0));"></div>
                <div class="col s12 m12 l12">
                    <i class="left material-icons pink-text accent-4" style="font-size: 34px; line-height: 54px;">people</i>
                    <div class="col s9 m9 l9 left-align profil-text"><?= $user->nom ?></div>
                    <div class="col s9 m9 l9 left-align profil-text"><?= $user->prenom ?></div>
                </div>
                <div class="col s12 m12 l12" style="margin: 5px 0; border: 0; height: 1px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(150, 150, 150, 0.75), rgba(0, 0, 0, 0));"></div>
                <div class="col s12 m12 l12">
                    <i class="left material-icons pink-text accent-4" style="font-size: 34px; line-height: 48px;">cake</i>
                    <div class="col s9 m9 l9 left-align profil-text"><?= $user->datedenaissance ?></div>
                </div>
                <div class="col s12 m12 l12" style="margin: 5px 0; border: 0; height: 1px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(150, 150, 150, 0.75), rgba(0, 0, 0, 0));"></div>
                <div class="col s12 m12 l12">
                    <i class="left material-icons pink-text accent-4" style="font-size: 34px; line-height: 48px;">edit</i>
                    <div class="col s9 m9 l9 left-align profil-text"><?= date('d/m/y', $user->date_inscription) ?></div>
                </div>
                <div class="col s12" style="margin: 5px 0; border: 0; height: 1px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(150, 150, 150, 0.75), rgba(0, 0, 0, 0));"></div>
                <div class="col s12">
                    <i class="left material-icons pink-text accent-4" style="font-size: 34px; line-height: 48px;">mail</i>
                    <div class="col s9 m9 l9 left-align profil-text-email"><?= $user->email ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col l8 s12 offset-l1 z-depth-3 white box-compte-contenu">
        <div class="center-align"><h3>Mon activitée</h3></div>
        <div class="row">
            <div class="col s12">
                <ul class="tabs tabs-compte-cv-pj">
                    <li class="tab col s6"><a class="active waves-effect waves-red btn-flat" href="#test1">Mes CVs</a></li>
                    <li class="tab col s6"><a class="waves-effect waves-red btn-flat" href="#test2">Mes Projets</a></li>
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
                            <td>Alvin & les j'sais plus quoi</td>
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

<?php
/**
 * Created by G.E.K.T & Arthix
 * Date: 08/04/2016
 * Time: 03:43
*/

    $erreur = "";
    include 'include/check-ins.php';
    if (isset($_SESSION['login'])){
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
        <div class="row container white z-depth-3">
            <h2 class="header center-align title-blue">Inscription</h2>
            <?php echo $erreur?>
            <form action="register.php" method="post" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="pseudo" id="pseudo" type="text" class="validate" required="">
                        <label class="label-inscription" for="pseudo">Pseudo</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input name="nom" id="first_name" type="text" class="validate" required="">
                        <label class="label-inscription" for="first_name">Nom</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="prenom" id="last_name" type="text" class="validate" required="">
                        <label class="label-inscription" for="last_name">Prénom</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col l6 s6">
                        <input name="mdp1" id="1" type="password" class="validate" required="">
                        <label class="label-inscription" for="1">Mot de passe</label>
                    </div>
                    <div class="input-field col l6 s6">
                        <input name="mdp2" id="mdp2" type="password" class="validate" required="">
                        <label class="label-inscription" for="mdp2">Confirmation mot de passe</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" id="email" type="email" class="validate" required="">
                        <label class="label-inscription" for="email">E-mail</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="date" id="date" type="date" class="datepicker" required="">
                        <label class="label-inscription" for="date">Date de naissance</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 label-inscription">
                        <input name="genre" type="radio" id="homme" value="Homme" required=""/>
                        <label for="homme">Homme</label>
                        <input name="genre" type="radio" id="Femme" value="Femme" required=""/>
                        <label for="Femme">Femme</label>
                    </div>
                </div>
                <div class="g-recaptcha" data-sitekey="6Lc78xwTAAAAAMmMXuI0C0jSpB5A71_fruVkSArw"></div>
                <div class="row">
                    <div class="input-field col s12 center-align">
                        <button class="btn btn-register waves-effect waves-light" type="submit">M'inscrire
                        <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
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




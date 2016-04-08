<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
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
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Custom css-->
    <link type="text/css" rel="stylesheet" href="css/custom.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status" class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>

        <div class="spinner-layer spinner-red">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>

        <div class="spinner-layer spinner-yellow">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>

        <div class="spinner-layer spinner-green">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>
<?php include 'include/navbar.php'; ?>

<div class="parallax-container">
    <div class="parallax"><img src="img/parallax2.jpg"></div>
    <div class="row">
        <div class="center-align col offset-l8 l4" style="padding-top: 50px;">
            <h2 id="AnimTitle1" class="white-text">Right Aligned Caption</h2>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
        <div class="center-align col l4" style="padding-top: 50px;">
            <h2 id="lgdgol" class="white-text">Right Aligned Caption</h2>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
    </div>
</div>
<div class="section white">
    <div class="row container center-align">
        <h2 class="header">Inscription</h2>
    </div>
</div>
<?php echo $erreur?>

<div class="row container">
    <form action="register.php" method="post" class="col s12 z-depth-3">
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
        <div class="row">
            <div class="input-field col s12 center-align">
                <button class="btn waves-effect waves-light" type="submit" name="inscription">M'inscrire
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </form>
</div>




<?php include 'include/modal/modal-login.php'; ?>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.4/SmoothScroll.min.js"></script>
<script type="text/javascript">
    $(".button-collapse").sideNav();
    $('.modal-trigger').leanModal();
    $('#aside').pushpin({ top:110, bottom:500 });
</script>
<?php include 'include/footer.php';?>

</body>
<!-- Preloader -->
<script type="text/javascript">
    //<![CDATA[
    jQuery(window).load(function() {
        jQuery("#status").fadeOut();
        jQuery("#preloader").delay(600).fadeOut("fast");
        $("body").removeClass("anti-scroll");
        $('.modal-trigger').leanModal();
    })
    //]]>
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.parallax').parallax();
    });
</script>
<script>
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 200 // Creates a dropdown of 15 years to control year
    });
</script>
</html>




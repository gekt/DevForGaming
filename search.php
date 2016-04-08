<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 07/04/2016
 * Time: 21:41
 */
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
<body class="anti-scroll">
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

<?php include 'include/modal/modal-login.php'; ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.4/SmoothScroll.min.js"></script>
<?php include 'include/footer.php';?>
</body>
</html>



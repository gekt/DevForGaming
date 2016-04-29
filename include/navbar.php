<!-- NAVBAR -->
<div class="navbar-fixed">
    <nav class="orange">
        <div class="nav-wrapper container">
            <a onclick="changePage('index.php')" class="brand-logo">DevForGaming</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
            	<?php if (!isset($_SESSION['login'])){?>
                <li><a onclick="changePage('login.php')"><i class="material-icons" title="Me connecter">lock</i></a></li>
                <li><a onclick="changePage('register.php')"><i class="material-icons" title="M'inscrire">mode_edit</i></a></li>
                <?php } ?>
                <?php if (isset($_SESSION['login'])){?>
                    <li><a class="waves-effect waves-light btn" onclick="changePage('add-cv.php')">Ajouter mon CV</a></li>
                    <li><a class="waves-effect waves-light btn" onclick="changePage('compte.php')">Ajouter mon Projet</a></li>
                    <li><a onclick="changePage('messagerie.php')"><i class="material-icons" title="Messagerie">mail</i></a></li>
                    <li><a onclick="changePage('compte.php')"><i class="material-icons" title="Mon compte">person</i></a></li>
                    <!--<li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons">add</i></a></li>-->
                    <!--<li><a href="upload-module.php"><i class="material-icons">cloud_upload</i></a></li>-->
                    <li><a onclick="changePage('logout.php')"><i class="material-icons" title="Me déconnecter">power_settings_new</i></a></li>
                <?php } ?>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li>
                    <a href="#">
                        <input id="search" type="search" placeholder="search">
                    </a>
                </li>
                <?php if (!isset($_SESSION['login'])){?>
                <li><a onclick="changePage('login.php')">Login</a></li>
                <li><a onclick="changePage('register.php')">S'inscrire</a></li>
                <?php } ?>
                <?php if (isset($_SESSION['login'])){?>
                    <li><a onclick="changePage('add-cv.php')">Ajouter mon CV</a></li>
                    <li><a onclick="changePage('messagerie.php')">Ajouter mon Projet</a></li>
                <li><a onclick="changePage('messagerie.php')">Messagerie</a></li>
                <li><a onclick="changePage('compte.php')">Mon compte</a></li>
                <li><a onclick="changePage('logout.php')">Deconnexion</a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</div>

<!-- BARRE DE RECHERCHE V2 -->
<div class="row para-main">
  	<nav class="orange lighten-2 flat hide-on-med-and-down">
    	<div class="nav-wrapper">
      		<form id="recherche" action="search.php" method="post">
        		<div id="search-div" class="input-field">
          			<input id="search" type="search">
          			<label id="search-active-detect" for="search" type="submit"><i id="search-logo" class="material-icons ico-search">search</i></label>
          			<div id="div-search-label" class="right valign-wrapper" style="right: 64px; margin-top: 20px;">
						<input name="choice" type="radio" id="cv" value="cv" required=""/>
						<label id="input-cv" class="search-choice hide-label" for="cv">CV</label>
						<input name="choice" type="radio" id="projet" value="projet" required=""/>
						<label id="input-projet" class="search-choice hide-label" for="projet">Projet</label>
						<input name="choice" type="radio" id="jeu" required="" value="jeu"/>
						<label id="input-jeu" class="search-choice hide-label" for="jeu">Jeu</label>
          			</div>
          			<i id="search-submit-btn" class="material-icons right" style="pointer-events: none;" onclick="document.getElementById('recherche').submit();">send</i>
        		</div>
      		</form>
    	</div>
  	</nav>
</div>


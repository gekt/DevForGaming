<!-- NAVBAR -->
<div class="navbar-fixed">
    <nav class="orange">
        <div class="nav-wrapper container">
            <a onclick="changePage('index.php')" class="brand-logo">DevForGaming</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            	  <ul id="dropdown1" class="dropdown-content">
				  <li><a href="logout.php">Deconnexion</a></li>
				</ul>
            <ul class="right hide-on-med-and-down">
            	<?php if (!isset($_SESSION['login'])){?>
                <li><a onclick="changePage('login.php')"><i class="material-icons">lock</i></a></li>
                <li><a onclick="changePage('register.php')"><i class="material-icons">mode_edit</i></a></li>
                <?php } ?>
                <?php if (isset($_SESSION['login'])){?>
                <li><a href="compte.php"><i class="material-icons">person</i></a></li>
                <li><a href="upload-module.php"><i class="material-icons">cloud_upload</i></a></li>
                <li><a href="logout.php"><i class="material-icons">power_settings_new</i></a></li>
                <!--<li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons">more_vert</i></a></li>-->
                <?php } ?>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
				  <li><a href="logout.php">Deconnexion</a></li>
				  <!--<li><a href="#!">two</a></li>
				  <li class="divider"></li>
				  <li><a href="#!">three</a></li>-->
				</ul>
            <ul class="side-nav" id="mobile-demo">
                <li>
                    <a href="#">
                        <input id="search" type="search" placeholder="search">
                    </a>
                </li>
                <?php if (!isset($_SESSION['login'])){?>
                <li><a href="#modalLogin" class="modal-trigger">Login</a></li>
                <!--<li><a class="dropdown-button" href="#!" data-activates="dropdown2">Autre</a></li>-->
                <li><a href="#signup" class="modal-trigger">S'inscrire</a></li>
                <?php } ?>
                <?php if (isset($_SESSION['login'])){?>
                <li><a href="upload-module.php">Uploader</a></li>
                <li><a href="compte.php">Mon compte</a></li>
                <li><a href="logout.php">Deconnexion</a></li>
                <?php } ?>
                <!---<li><a href="#">Link</a></li>-->
            </ul>
        </div>
    </nav>
</div>

<!-- BARRE DE RECHERCHE V2 -->
<div class="row para-main">
  	<nav class="orange lighten-2 flat hide-on-med-and-down">
    	<div class="nav-wrapper">
      		<form id="recherche" action="index.php" method="post">
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
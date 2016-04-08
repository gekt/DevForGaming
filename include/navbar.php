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
		                <li><a onclick="changePage('login.php')"><i class="material-icons">perm_identity</i></a></li>
		                <li><a onclick="changePage('register.php')"><i class="material-icons">mode_edit</i></a></li>
		                <?php } ?>
		                <?php if (isset($_SESSION['login'])){?>
		                <li><a href="compte.php"><i class="material-icons">perm_identity</i></a></li>
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
		<div class="row para-main">
			<nav class="orange lighten-2 flat hide-on-med-and-down">
		    	<div class="nav-wrapper">
					<form action="search.php" method="post">
						<input name="choice" type="radio" id="cv" value="cv" required=""/>
						<label for="cv">CV</label>
						<input name="choice" type="radio" id="projet" value="projet" required=""/>
						<label for="projet">Projet</label>
						<input name="choice" type="radio" id="jeu" required="" value="jeu"/>
						<label for="jeu">Jeu</label>
							<div class="input-field with-gap col l10 search-nav-field">
								<input class="search-nav" id="search" type="search" required="" placeholder="(ex. pseudo, projet, jeu)">
								<label id="search" for="search"><i class="material-icons ico-search">search</i></label>
								<i class="mdi-navigation-close"></i>
							</div>
		        	</form>
				</div>
			</nav>
		</div>
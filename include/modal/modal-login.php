		<!--login modal-->
		<div id="modalLogin" class="modal">
		    <div class="modal-content">
		        <h2 class="center-align">Login</h2>
		        <div class="center-align">
		            <div class="divider"></div>
		            <form action="include/co-ins.php" class="col s12" method="post">
		                <div class="row center-align">
		                    <div class="input-field col m10 offset-m1 blue-text">
		                        <i class="mdi-action-account-circle prefix"></i>
		                        <input id="icon_prefix" type="text" class="validate" name="pseudo">
		                        <label class="left-align" for="icon_prefix">Pseudo</label>
		                    </div>
		                    <div class="input-field col m10 offset-m1 blue-text ">
		                        <i class="mdi-action-lock-open prefix"></i>
		                        <input id="icon_password" type="password" class="validate" name="mdp_co">
		                        <label class="left-align" for="icon_password">Password</label>
		                    </div>
		                    <!---<div class="input-field col m10 offset-m1 blue-text">
		                        <input type="checkbox" class="blue-text" id="filled-in-box" checked="checked">
		                        <label for="filled-in-box">Remember me next time</label>
		                    </div>-->
		                </div>

		            <div class="divider"></div>
		            <p class="center-align">
		                <a href="#" class="btn btn-flat white modal-close">Cancel</a> &nbsp;
		                <button type="submit" name="connexion" class="waves-effect waves-blue blue btn btn-flat modal-action modal-close">Connexion</button>
		            </p>
		            </form>
		        </div>
		    </div>
		</div>
				<!--signup modal-->
		<div id="signup" class="modal">
		    <div class="modal-content">
		        <h2 class="center-align">Inscription</h2>
		        <div class="center-align">
		            <div class="divider"></div>
		            <form action="include/co-ins.php" method="post" class="col s12">
		                <div class="row center-align">
		                    <div class="input-field col m10 offset-m1 blue-text">
		                        <i class="mdi-action-account-circle prefix"></i>
		                        <input id="icon_prefix" type="text" class="validate" name="pseudo">
		                        <label class="left-align" for="icon_prefix">Pseudo</label>
		                    </div>
		                    <div class="input-field col m10 offset-m1 blue-text ">
		                        <i class="mdi-action-lock-open prefix"></i>
		                        <input id="icon_password" type="email" class="validate" name="email">
		                        <label class="left-align" for="icon_password">E-mail</label>
		                    </div>
		                    <div class="input-field col m10 offset-m1 blue-text ">
		                        <i class="mdi-action-lock-open prefix"></i>
		                        <input id="icon_password" type="password" class="validate" name="mdp1">
		                        <label class="left-align" for="icon_password">Password</label>
		                    </div>
		                    <div class="input-field col m10 offset-m1 blue-text ">
		                        <i class="mdi-action-lock-open prefix"></i>
		                        <input id="icon_password" type="password" class="validate" name="mdp2">
		                        <label class="left-align" for="icon_password">Password</label>
		                    </div>
		                </div>
		            <div class="divider"></div>
		            <p class="center-align">
		                <a href="#" class="btn btn-flat white modal-close">Fermer</a> &nbsp;
		                <button type="submit" class="waves-effect waves-blue blue btn btn-flat modal-action modal-close" name="inscription">M'inscrire</button>
		            </p>
		            </form>
		        </div>
		    </div>
		</div>
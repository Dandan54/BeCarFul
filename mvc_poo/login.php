<h2>Connexion à votre espace</h2>


<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Connexion</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Inscription</label>
		<div class="login-form">
			<form method="post" action="">
				<div class="sign-in-htm">
					<div class="group">
						<input id="user" type="text" name="email" class="input" placeholder="ADRESSE E-MAIL">
					</div>
					<div class="group">
						<input id="pass" type="password" name="mdp" class="input" data-type="password" placeholder="MOT DE PASSE">
					</div>
					<div class="group">
						<input type="submit" name="seconnecter" class="button" value="Se connecter">
					</div>
				</div>
			</form>

			<form method="post" action="">
				<div class="sign-up-htm">
					<div class="group">
						<input id="user" type="text" name="prenom" class="input" placeholder="PRENOM">
					</div>
					<div class="group">
						<input id="user" type="text" name="nom" class="input" placeholder="NOM">
					</div>
					<div class="group">
						<input id="user" type="text" name="email" class="input" placeholder="ADRESSE E-MAIL">
					</div>
					<div class="group">
						<input id="pass" type="password" name="mdp" class="input" data-type="password" placeholder="MOT DE PASSE">
					</div>
					<div class="group">
						<select name="formule" class="select" id="user">
							<option value="">CHOISISSEZ UNE FORMULE</option>
							<option value="1">Conduite 20h</option>
							<option value="2">Conduite 25h</option>
							<option value="3">Conduite 30h</option>
							<option value="4">Consuite accompagnée</option>
							<option value="5">Consuite supervisée</option>
						</select>
					</div>
					<div class="group">
						<input type="submit" name="inscrire" class="button" value="S'inscrire">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


<footer>
    © 2020 - TOUS DROITS RÉSERVÉS
</footer>
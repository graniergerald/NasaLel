<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Nasa : Nos Missions Agent secret 3.90 </title>
		<link rel="stylesheet" href="Css/style.css"/>
	</head>

	<body class="homepage">
		
		<!-- Header -->
		<?php include("Structure/header.php"); ?>

		<!-- crée plusieurs paragraphe stylé pour expliquer l'interet du mot de passe -->

		<div class="CITATION">
			<!--CITATION + IMG--> 
			<h2> La chance sourit aux audacieux </h2>

		</div>


		<div class="ZONEDESAISIEmdp">
			<!--ZONE DE SAISIE mdp-->
			<form class= "ZonedePassword" method="post" action="PageDuPasswordsecret.php">
				<p>
					<label for="passwordsecret"> Mot de passe secret</label>	
					<input type="password" name="passwordsecret" id="passwordsecret" maxlength="15" placeholder="La connaissance c'est le pouvoir" size="28" />
				</p>
				<input type="submit" value="Envoyer"/>
			</form>

		</div>

		<?php include("Structure/footer.php"); ?>

	</body>

</html>
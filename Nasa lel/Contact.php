<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Nasa : Contact Agent secret 3.90 </title>
		<link rel="stylesheet" href="Css/style.css"/>
	</head>

	<body class="homepage">
		
		<!-- Header -->
		<?php include("Structure/header.php"); ?>

		<div class="IntroContact">
			Des retours, des commentaires, une envie de nous contacter ? Voici un formulaire pour nous écrire.
		</div>

		<form class= "NousContacter" method="post" action="traitement.php">
			<fieldset>
				<legend>Commentaire</legend>
				<p>
					<label for="mailducontact"> Votre Adresse mail</label>
					<input type="email" name="mailducontact" id="mailducontact" maxlength="50" placeholder="tantouzedu33@hotmail.fr ??" size="35" required />
				</p>

				<p>
					<label for="prenomducontact"> Votre Prénom</label>
					<input type="text" name="prenomducontact" id="prenomducontact" maxlength="50" size="43" />
				</p>

				<p>
					<label for="nomducontact"> Votre Nom</label>
					<input type="text" name="nomducontact" id="nomducontact" maxlength="50" size="48" required />
				</p>

				<p>
			       <textarea name="commentaires" id="commentaires" rows="10" cols="50" placeholder="Améliorer ton site ?! Mais enfin ! Il est gavéééé bien, il n'est pas nécessaire de l'améliorer !"></textarea>
			    </p>

				<input type="submit" value="Envoyer"/>

			</fieldset>
		</form>

		<?php include("Structure/footer.php"); ?>

	</body>

</html>
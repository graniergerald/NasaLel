<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Nasa : Accueil Agent secret 3.90 </title>
		<link rel="stylesheet" href="Css/style.css"/>
	</head>

	<body class="homepage">
		<!-- Header -->
		<?php include("Structure/header.php"); ?>

		<?php
    		if (isset($_POST['passwordsecret']) AND $_POST['passwordsecret'] ==  "kangourou")
    		{	?>

				<div class="Mdptrouver">

					<a href="img/Voyagesecretgm.jpg" title="Prêt pour le grand voyage ?" target="_blank"> <img src="img/Voyagesecretpm.jpg" /> </a>

					<p class="ArticleduMdptrouver">
						Bravo tu a maintenant accés aux missions secrètes les plus dangereuse et périlleuse !!
						Es-tu prêt à relever le défis?
					</p>

					<a href="img/Planetsecretegm.jpg" title="Une nouvelle planète vous attend !!" target="_blank"> <img src="img/Planetsecretepm.jpg" /> </a>
				</div>

			<?php }

			else
    		{
        	echo '
        		<div class="Mdppastrouver">

        			<a href="img/Chaosgm.jpg" title="La fin est proche !!" target="_blank"> <img src="img/Chaospm.jpg" /> </a>

        			<p class="ArticleduMdppastrouver">
        				Mot de passe incorrect
        			</p>

        			<a href="img/Incepstellargm.jpg" title="Votre mission vous aurais envoyé ici si vous aviez trouve le mot de passe" target="_blank"> <img src="img/Incepstellarpm.jpg" /> </a>

        		</div>
        	';
   			}
    	?>
    	
		<!--footer-->
		<?php include("Structure/footer.php"); ?>

	</body>

</html>
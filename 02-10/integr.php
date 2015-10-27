<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Intégrité des données en PHP</title>
		</head>
		<body>
			<?php
				include "../01-10/Header.php";

				$chaine = "<strong>L'avion</strong> est prêt à décoller.";
				$chaine2 = "JavaScript<script type='text/javascript'>alert('OK');</script>";
				$email = "abracadabra@magic-academy.com";
				$url = "http://www.gymagic.fitness.com";

				/* Addslashes rajoute des backslashes (\) dans le string ; Stripslashes les retire */
				echo addslashes($chaine);
				echo $chaine2;
				echo "<hr/>";

				/* HTMLEntities convertit les entités telles < > et lettres à accent, etc. */
				echo htmlentities($chaine);
				echo htmlentities($chaine2);
				echo "<hr/>";

				/* Idem mais seulement pour les caractères spéciaux */
				echo htmlspecialchars($chaine);
				echo htmlspecialchars($chaine2);
				echo "<hr/>";

				/* Supprimer toutes les balises HTML & JS */
				echo strip_tags($chaine);
				echo strip_tags($chaine2);

				/* Validation de données */
				echo filter_var($email, FILTER_VALIDATE_EMAIL)."<br/>";
				echo filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED);

				include "../01-10/Footer.php";

			?>
		</body>
	</html>
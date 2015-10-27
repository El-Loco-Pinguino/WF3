<?php
	// Connexion à PDO
	$dbb = "mysql:host=localhost;dbname=noteforce3";
	$dbu = "root";
	$dbp = "";
	$dbh = new PDO($dbb,$dbu,$dbp);

	// Récupération des données saisies via le formulaire
	$identifiant = $_POST["login"];
	$passe = $_POST["pwd"];

	// Interprétation de ces données: correspondent-elles à celles présentes dans le fichier SQL ?
	$identifiant.strchr();
	$passe.strchr();
	$verifConnex = "SELECT * FROM noteforce3.personnes
					WHERE loginPersonne=".$identifiant." AND passPersonne=".$passe;
	$correspConnex = $dbh->prepare($verifConnex);
	$correspConnex->execute();
	print_r($correspConnex);

	// Vérification connexion
	if ($identifiant === $verifConnex[0] && $passe === $verifConnex[1]) {
		echo ("Connecté sous le login ".$identifiant);
	} else {
		echo ("Erreur de login/mot de passe. Merci de réessayer.");
	}
?>
<?php
	$titrePage = "Résultats GoogleForce3";
	include "header.php";

	// Récupération de l'info à chercher
	$motCle = htmlentities(strip_tags($_GET['search']));
	$requete = "SELECT * FROM wf3.insee WHERE nomCommune=?";
	// Connexion BDD
	require_once "connexion.php";
	// Exécution de la requête
	$curseur = $dbh->prepare($requete);
	$curseur->execute(array($motCle));
	$resultatRecherche = $curseur->fetchALL(PDO::FETCH_ASSOC);

	include "Fonction.php";
	include "includes.php";
	echo afficheTableau2D($resultatRecherche);
	include "footer.php";
?>
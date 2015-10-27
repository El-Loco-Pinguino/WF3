<?php
	/*
	echo date("14/07/1789 15:21:14")."<br/>"; // Date et heure précises (précéder les nombres d'un 0 si ils n'ont qu'un chiffre)
	echo date("d/m/Y H:i:s")."<br/>"; // Date et heure actuelles
	echo date("d/m/Y H:i:s", rand(1000000000,1999999999))."<br/>"; // Pour un timestamp précis, date et heure précises
	echo time(); // Timestamp à l'instant
	*/

	/*
	echo date("21/01/1793 10:20:00")."<p>";
	echo("Louis XVI est guillotiné sur la Place de la Révolution.")."</p>";

	echo date("16/10/1793")."<p>";
	echo("Marie-Antoinette est guillotinée sur la Place de la Révolution, neuf mois après son époux Louis XVI.")."</p>";


	echo date("02/11/1979 15:15:00")."<p>";
	echo("Jacques Mesrine, l'ennemi public numéro 1, est abattu dans sa voiture par la Brigade de Recherche et d'Intervention")."</p>";

	echo date("18/09/1981")."<p>";
	echo("La peine de mort est abolie en France, suite au projet de loi de Robert Badinter.")."</p>";

	echo date("08/01/1996")."<p>";
	echo("L'ancien président de la République François Mitterrand décède des suites d'un cancer de la prostate.")."</p>";

	echo date("07/09/2015 09:20:00")."<p>";
	echo("WebForce3 a officiellement débuté à Buire. Les développeurs Web vont suer sang et eau pour près de 3 mois et demi.")."</p>";
	*/

	/* $t_Feries = array("1 January 2015", "1 May 2015", "8 May 2015", "15 August 2015", "1 November 2015", "11 November 2015", "25 December 2015");
	$t_Jours = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

	// Boucle de traitement des jours fériés //
	foreach($t_Feries as $d_Ferie) {
		$numJour = date("w", strtotime($d_Ferie));
		echo "<li>".$d_Ferie.": ".$t_Jours[$numJour]."</li>";
	}
	echo "</ul>"; */

	$t_Jours = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
	$t_Mois = array("","Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");

	$nomJour = $t_Jours[date("w")];
	$nomMois = $t_Mois[date("n")];
	$numJour = date("j");

	if ($numJour == 1) $numJour .="<sup>er</sup>";

	$annee = date("Y");
	$heure = date("H\hi");

	echo "Aujourd'hui nous sommes le ".$nomJour." ".$numJour." ".$nomMois." ".$annee." et il est ".$heure;

	include "Footer.php";
?>
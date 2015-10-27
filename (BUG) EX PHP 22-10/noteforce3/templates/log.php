<?php
	if (isset($_POST["subbtn"])) {
		// On va récupèrer login et MdP saisis dans le formulaire
		$id = $_POST["login"];
		$pwd = $_POST["pass"];

		// Connexion au PDO pour pouvoir vérifier les champs //
		$dsn = "mysql:host=localhost;dbname=noteforce3;charset=utf8";
		$bddUser = "root";
		$bddPass = "";
		$dbh = new PDO($dsn, $bddUser, $bddPass);
		// Récupération & Vérification login/Mdp via requête:
		$loginPersonne = "SELECT loginPersonne FROM noteforce3.personnes";
		$passPersonne = "SELECT passPersonne FROM noteforce3.personnes";
		$lancerReqLog = $dbh->prepare($loginPersonne);
		$lancerReqLog->execute(array($loginPersonne));
		$lancerReqPass = $dbh->prepare($passPersonne);
		$lancerReqPass->execute(array($passPersonne));
		if ($loginPersonne == ("QV" || "BT" || "BG" || "MD" || "PM" || "AP") && $pwd === "webforce3") {
			echo("Connecté avec succès sous le login ".$id." !<br/>");
			// Récupérer les droits d'utilisation spécifiques
			$privileges = "SELECT typePersonne FROM noteforce3.personnes WHERE loginPersonne= ".$id;
			$lancerReqPriv = $dbh->query($privileges);
			$privilegePrecis = $lancerReqPriv->execute(array($privileges));
			echo($privilegePrecis);
			switch ($privilegePrecis) {
				case "A": include "admin.php";
				break;
				case "F": include "forma.php";
				break;
				case "E": include "eleve.php";
				break;
			}
			echo("Connecté en tant que ".$privilegePrecis.".");
		} else {
			echo("Le login ou/et le mot de passe est incorrect. Veuillez réessayer."."<br/>");
			echo("Login saisi: ".$id."</br>");
		}
	}
?>
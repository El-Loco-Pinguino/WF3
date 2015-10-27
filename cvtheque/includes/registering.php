<?php
	/* Récupération des champs du formulaire d'inscription */
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$naissance = $_POST["naissance"];
	$email = $_POST["email"];
	$adresse = $_POST["adresse"];
	$codepostal = $_POST["codepostal"];
	$mdpa = $_POST["mdpa"];
	$mdpb = $_POST["mdpb"];
	$btnSub = $_GET["btnSub"];

	/* Vérification de ces champs (vide ou saisie incorrecte ! >_<) */
	if ($btnSub && empty($_POST)) {
		$retour=1;
		foreach($_POST as $cle=>$val) {
			if(!empty($val)) {
				echo "Le champ ".$cle." n'a pas été rempli.<br />";
				$retour=0;
			}
		}
		if($retour==0) {
			echo "Merci de bien vouloir compléter les champs non remplis.";
		}
	} else {
		$dbhcvu = new PDO('mysql:host=localhost;dbname=cvu_membres;charset=utf8',"root","");
		$sql = "INSERT INTO cvu_membres.membres ('NOM','PRENOM','MOTDEPASSE') VALUE ('$nom','$prenom','$mdpa')";
	}

?>
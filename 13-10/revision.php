<?php
	if(isset($_POST["btnSub"])) {
		// Récupération de l'identifiant et du mot de passe
		$login = $_POST["utilisateur"];
		$pwd = $_POST["motDePasse"];

		// Connexion au PDO
		$dsn = "mysql:host=localhost;dbname=exomerise;charset=utf8";
		$bddUser = "WF3";
		$bddPass = "webforce3";
		$dbh = new PDO($dsn, $bddUser, $bddPass);

		// Vérification login
		$reqLogin = "SELECT ID FROM securite WHERE LOGIN = ?";
		$curseurLogin = $dbh->prepare($reqLogin);
		$curseurLogin->execute(array($login, $pwd));
		$resultatLogin = $curseurLogin->fetchColumn();
		// Si pas de résultat
		var_dump($resultatLogin);
		if($resultatLogin === false) {
			header("location: FORM_PHP.php?msg=login incorrect");
		} else {
			$reqPass = "SELECT ID FROM securite WHERE LOGIN = ? AND PASSWORD = password(?)";
			$curseurPass = $dbh->prepare($reqPass);
			$curseurPass->execute(array($login, $pwd));
			$resultatPass = $curseurPass->fetchColumn();
			if($resultatPass === false) {
				header("location: FORM_PHP.php?msg=mot de passe inocrrect");
			} else {
				echo "It works !<br/>Bravo.";
			}
		// Déconnexion
		unset($dbh);
		}
	}
?>
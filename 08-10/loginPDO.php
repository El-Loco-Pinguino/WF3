<?php
	$dbh = new PDO("mysql:host=localhost;dbname=exomerise;charset=UTF8","root","");

	$login = $_POST["login"];
	$pwd = $_POST["pwd"];
	$sql = "SELECT count(*) as ok FROM exomerise.securite WHERE login='".$login."' AND password=PASSWORD('".$pwd."')";

	$resultat = $dbh->query($sql)->fetch();
	print_r($resultat);
	if($resultat['ok']==0)
		{
			echo "Login/Mot de passe invalide";
		}
	else echo "Connecté.";

	unset($dbh);
?>
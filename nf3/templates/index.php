<!DOCTYPE html>
<html>
<head>
	<title>NoteForce3</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<img src="../images/logo.png" alt="WF3">
	<!-- Ce fichier PHP servira de template aux autres fichiers (sera appelé par INCLUDE) -->
	<h1>NoteForce3, application de gestion de WebForce3</h1>
	<form method="post" action="log.php">
		<p><strong>Veuillez vous connecter avec votre login et votre mot de passe:</strong></p>

		<label for="login">Login: <input type="text" name="login"></label>
		<label for="pass">Mot de passe: <input type="password" name="pass"></label>
		<input type="submit" value="Se connecter" name="subbtn">
	</form>
</body>
</html>
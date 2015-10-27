<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Révision Formulaire en PHP</title>
			<meta charset="utf-8">
			<script type="text/javascript">
				function verif(form) {
					alert("Ok");
					return false;
					// Vérification JS du formulaire
				}
			</script>
		</head>
	<body>
		<form method="post" action="revision.php">
			<p>
				<label>Login:</label>
				<input type="text" name="utilisateur">
			</p>
			<p>
				<label>Mot de passe:</label>
				<input type="password" name="motDePasse">
			</p>
			<p>
				<input type="submit" name="btnSub" value="Go !" onclick="verif(this);">
			</p>
		</form>
		<img src="separateur.png" alt="Séparateur">
		<p>Copyright HOURLIER 2015. Ne pas reproduire sans autorisation de l'auteur.</p>
	</body>
</html>
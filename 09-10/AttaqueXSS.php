<!DOCTYPE html>
<html>
<head>
	<title>Attaque XSS</title>
</head>
<body>
	<form method='post' action="xss.php">
	<input type="text" name="recherche">
	<input type="submit" value="Go!">
	</form>
</body>
</html>
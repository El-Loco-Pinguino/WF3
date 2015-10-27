<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaire via PDO</title>
	<style>
		label {
			float: left;
			width: 100px;
			display: block;
		}

		#btnSub {
			background-color: red;
			color: white;
			border-color: white;
			margin-left: 80px;
			width: 100px;
			height: 50px;
		}
	</style>
</head>
<body>
	<form method="post" action="loginPDO.php">
		<p>
			<label for="login">Login:</label>
			<input type="text" name="login">
		</p>
		<p>
			<label for="pwd">MdP:</label>
			<input type="password" name="pwd">
		</p>
		<input type="submit" id="btnSub" name="btnSub" value="Connexion">
	</form>
</body>
</html>
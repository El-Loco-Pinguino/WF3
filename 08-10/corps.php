	<?php
		include "header.php";
		$dbh = new PDO("mysql:host=localhost;dbname=exomerise;charset=utf8","root","");

		$sql = "SELECT NOM, PRENOM FROM ELEVE WHERE IDELEVE > 1 AND IDELEVE < 10";
		echo "<pre>";
		foreach ($dbh->query($sql))
			"<p>".$sql."</p>";
		echo "</pre>";

		unset($dbh);
		include "footer.php";
	?>
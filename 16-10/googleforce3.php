<?php
	$titrePage = "GoogleForce3";
	include "header.php";
?>
	<form method="get" action="recherche.php">
		<input type="text" name="search">
		<input type="submit" value="Va chercher !" name="btnSub">
	</form>
<?php
	include "footer.php";
?>
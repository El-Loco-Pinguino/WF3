<?php
	$dbh = new PDO("mysql:host=localhost;dbname=wf3;charset=UTF8","root","");
	$title = "Fetch all";
	$rq = "SELECT * FROM insee WHERE codePostal='02500' ORDER BY nomCommune ASC";
	$stmt = $dbh->query($rq);
	$row = $stmt->fetchALL(PDO::FETCH_ASSOC);
	echo "<pre>";
	print_r($row);
	echo "</pre>";
	$dbh = null;
?>
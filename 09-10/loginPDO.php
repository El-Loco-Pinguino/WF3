<?php
	$dbh = new PDO("mysql:host=localhost;dbname=xss;charset=UTF8","root","");
	print_r($dbh);
	$login = $_POST["login"];
	$pwd = $_POST["pwd"];
	$age = $_POST["age"];

	$sth = "SELECT * FROM xss
			INSERT INTO xss.profil(login, pwd, age) value($login,$pwd,$age)";
	$dbh->prepare($sth);
	$dbh = null;
?>
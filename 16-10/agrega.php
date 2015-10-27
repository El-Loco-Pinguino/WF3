<?php
	$titrePage = "Agrégation SQL";
	include "header.php";
	$bddUser = "root";
	$bddPass = "";

	require_once "connexion.php";

	$rqMoyEleve = "SELECT AVG(note) FROM exomerise.note WHERE idEleve=1";
	$curMoyEleve = $dbh->query($rqMoyEleve);
	if(!$curMoyEleve) print_r($dbh->errorInfo());
	else echo $curMoyEleve->fetchColumn();
	echo '<hr/>';
	$rqMoyMatiere = "SELECT AVG(note) FROM exomerise.note WHERE idMatiere=3";
	$curMoyMatiere = $dbh->query($rqMoyMatiere);
	if(!$curMoyMatiere) print_r($dbh->errorInfo());
	else echo $curMoyMatiere->fetchColumn();

	include "footer.php";
?>
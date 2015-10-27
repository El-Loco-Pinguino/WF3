<?php
	include "Header.php";
	include "Double.php";

	echo double(19)."<br/>";
	echo half(60)."<br/>";

	echo datefr("2015-10-05")."<br/>";
	echo dateus("05/10/2015")."<br/>";

	$tnombres = array(1,2,3,4,5,6,7,8,9,10);
	print_r(array_filter($tnombres, "pair"));
	
	print_r(array_filter($tnombres, "impair"));
	include "Footer.php";
?>
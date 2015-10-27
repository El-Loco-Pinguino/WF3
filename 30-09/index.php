<!DOCTYPE html>
<html>
<head>
	<title>Première page PHP</title>
	<style type="text/css">body{background-color: silver;}</style>
</head>
<body>
	<?php
		echo "<h1>Hello World !</h1>";
		$sBr = "</br>";
		$i_Gagaga = "75.$sBr"; // i <==> Integer / Nombre entier
		$s_Gogogo = "kakaka.$sBr."; // s <==> String / Chaîne de caractères
		$b_Achacha = "".false.".$sBr."; // b <==> Booléen
		$f_Dododo = "835.01.$sBr."; // f <==> Float / Nombre décimal
		$a_Zozozo = array("Bibibi", "Bobobo", "Bububu", "Bababa");
		echo $i_Gagaga;
		echo $s_Gogogo;
		echo $b_Achacha;
		echo $f_Dododo;
		// echo $a_Zozozo; Erreur: affiche le tableau comme string...
		echo "<pre>";
		print_r($a_Zozozo);
		echo "</pre>";
		echo $a_Zozozo[0].$sBr;

		print_r($b_Achacha);
		var_dump($b_Achacha);
		echo "</hr>";
		var_dump($a_Zozozo);

		echo "Le nombre vaut: $i_Gagaga".$sBr; // Les variables sont interprétées si elles sont incluses dans des doubles guillemets
		echo 'Le nombre vaut $i_Gagaga'.$sBr; // Le texte est affiché tel quel si guillemets simples
		echo "Le nombre vaut: ".$i_Gagaga.$sBr; // Concaténation ; recommandé pour des raisons de performance

		$sMoi = "moi";
		echo '<script type="text/javascript">alert("Bonjour '.$sMoi.'!");</script>'
	?>
</body>
</html>
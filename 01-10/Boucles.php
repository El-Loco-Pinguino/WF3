<!DOCTYPE html>
	<?php
		include "Header.php";

		$t_Noms = array("Ababa", "Obobo", "Ibibi", "Ububu", "Rororo", "Zuzuzu", "Mumuluru");
		$i_NombreElements = count($t_Noms); // count(VAR) récupère tous les éléments de l'array. Préférable qu'un integer fixe (risque d'oubli d'entrées)
		echo "<ul>"; // Début de la liste HTML
		for($i=0; $i<$i_NombreElements; $i++) {
			echo "<li>".$t_Noms[$i]."</li>";
		}
		echo "</ul>"; // Fin de la liste HTML

		include "Footer.php";
	?>
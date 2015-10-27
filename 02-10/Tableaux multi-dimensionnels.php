<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tableaux multi-dimensionnels</title>
		<style>
			table {
				border: 8px solid olive;
				border-radius: 4px;
				text-align: center;
			}
			th {
				background-color: green;
			}
		</style>
	</head>
</html>

<?php
	$t2Dim = array(array("Buire", array(880, 4.13)),
				array("Hirson", array(9348, 33.77)),
				array("Amiens", array(135449, 49.46)),
				array("Lille", array(184647, 30.18))
			);
	echo "<pre>";
	print_r($t2Dim);
	echo "</pre>";

	echo "<table>
			<tr>
				<th>Ville</th>
				<th>Population</th>
				<th>Superficie (km²)</th>
			</tr>";
	$iNbEnreg = count($t2Dim);
	for ($i=0; $i<$iNbEnreg; $i++) {
		echo "<tr>";
		foreach($t2Dim[$i] as $Dim2) {
			if(is_string($Dim2)) echo "<td>".$Dim2."</td>";
			else foreach($Dim2 as $Dim3) {
				echo "<td>".$Dim3."</td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";

	include "../01-10/footer.php";
?>
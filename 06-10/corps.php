	<?php
		$tableau = array(array("Nom"=>"ANTOINE Sylvain", "Francais"=>15, "Maths"=>20, "Anglais"=>mt_rand(0,20), "Philosophie"=>mt_rand(0,20)),
						array("Nom"=>"ARCOLE David", "Francais"=>mt_rand(0,20), "Maths"=>mt_rand(0,20), "Anglais"=>mt_rand(0,20), "Philosophie"=>mt_rand(0,20)),
						array("Nom"=>"BESANCON J-B", "Francais"=>mt_rand(0,20), "Maths"=>mt_rand(0,20), "Anglais"=>mt_rand(0,20), "Philosophie"=>mt_rand(0,20)),
						array("Nom"=>"CHERFI Ali", "Francais"=>mt_rand(0,20), "Maths"=>mt_rand(0,20), "Anglais"=>mt_rand(0,20), "Philosophie"=>mt_rand(0,20)),
						array("Nom"=>"TAVERNIER Bruno", "Francais"=>mt_rand(0,20), "Maths"=>mt_rand(0,20), "Anglais"=>mt_rand(0,20), "Philosophie"=>mt_rand(0,20)),
							);
		echo "<pre>";
		print_r($tableau);
		echo "¨</pre>";

		// Moyenne français
		$moyFr = 0;
		// Moyenne maths
		$moyMa = 0;
		// Moyenne anglais
		$moyAn = 0;
		// Moyenne philo
		$moyPh = 0;
		echo "<table><tr><th>Nom</th><th>Francais</th><th>Maths</th><th>Anglais</th><th>Philosophie</th><th>Moyenne</th></tr>";
		$nbElem = count($tableau);
		for($i=0; $i<$nbElem; $i++)
		{
			echo "<tr>";
			// Boucle intérieure
			$moyenne = 0;
			foreach ($tableau[$i] as $cle=>$elem)
			{
				echo "<td>".$elem."</td>";
				if($cle=="Francais")
				{
					$moyenne += $elem;
					$moyFr += $elem;
				}
				if($cle=="Maths")
				{
					$moyenne += $elem;
					$moyMa += $elem;
				}
				if($cle=="Anglais")
				{
					$moyenne += $elem;
					$moyAn += $elem;
				}
				if($cle=="Philosophie")
				{
					$moyenne += $elem;
					$moyPh += $elem;
				}
			}
			$totalFr = round($moyFr/$nbElem, 2);
			$totalMa = round($moyMa/$nbElem, 2);
			$totalAn = round($moyAn/$nbElem, 2);
			$totalPh = round($moyPh/$nbElem, 2);
			$totalGeneral = round((($totalFr + $totalMa + $totalAn + $totalPh) / 4), 2);

			echo "<td id='note'>".($moyenne/(count($tableau[$i])-1))."</td>";
			echo "</tr>";
		}
		echo "<tr><td id='note'><strong>Moyenne</strong></td>"; // &nbsp équivaut à un espace insécable
		echo "<td id='note'>".$totalFr."</td><td id='note'>".$totalMa."</td><td id='note'>".$totalAn."</td><td id='note'>".$totalPh."</td><td id='note'>".$totalGeneral."</tr>";
		echo "</table>";
	?>
		<script src='couleurnotes.js'></script>
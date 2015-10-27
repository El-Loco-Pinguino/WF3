<!DOCTYPE html>
<html>
<head>
	<title>Conditions en PHP</title>
	<style type="text/css">p {text-align: center;}</style>
</head>
<body>
	<?php
		$note = rand(0,10);
		switch($note)
		{
			case 0: $appreciation = "<p>".'Fail.'."</p>"."<p>"."<img src=mauvais.jpg>"."</p>"."<p>".$note.'/10'."</p>";
				break;
			case 1: $appreciation = "<p>".'Exécrable.'."</p>"."<p>"."<img src=mauvais.jpg>"."</p>"."<p>".$note.'/10'."</p>";
				break;
			case 2: $appreciation = "<p>".'Aucun travail ! Ressaisissez-vous.'."</p>"."<p>"."<img src=mauvais.jpg>"."</p>"."<p>".$note.'/10'."</p>";
				break;
			case 3: $appreciation = "<p>".'Faible et fragile.'."</p>"."<p>"."<img src=mauvais.jpg>"."</p>"."<p>".$note.'/10'."</p>";
				break;
			case 4: $appreciation = "<p>".'De la bonne volonté.'."</p>"."<p>"."<img src=normal.png>"."</p>"."<p>".$note.'/10'."</p>";
				break;
			case 5: $appreciation = "<p>".'Juste au-dessus de la moyenne. Persévérez !'."</p>"."<p>"."<img src=normal.png>"."</p>"."<p>".$note.'/10'."</p>";
				break;
			case 6: $appreciation = "<p>".'Ensemble honnête.'."</p>"."<p>"."<img src=normal.png>"."</p>"."<p>".$note.'/10'."</p>";
				break;
			case 7: $appreciation = "<p>".'Travail satisfaisant, continuez comme ça.'."</p>"."<p>"."<img src=normal.png>"."</p>"."<p>".$note.'/10'."</p>";
				break;
			case 8: $appreciation = "<p>".'Très bien !'."</p>"."<p>"."<img src=content.jpg>"."</p>"."<p>".$note.'/10'."</p>";
				break;
			case 9: $appreciation = "<p>".'Super !'."</p>"."<p>"."<img src=content.jpg>"."</p>"."<p>".$note.'/10'."</p>";
				break;
			case 10: $appreciation = "<p>".'Magistral !'."</p>"."<p>"."<img src=content.jpg>"."</p>"."<p>".$note.'/10'."</p>";
				break;
			default: $appreciation = "<p>"."Non noté".'</p>';
				break;
		}
		echo ("$appreciation");
	?>
</body>
</html>
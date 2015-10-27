		<h1>Que pourrais-je bien mettre dans cette page ?</h1>
		<p>Hum... ... ...</p>
		<p><strong>Je sais ! Du texte en vrac pour personnaliser cette page !</strong></p>

		<h2>Le verbe VAINCRE au présent de l'indicatif:</h2>
		<ul>
			<li>Je vaincs</li>
			<li>Tu vaincs</li>
			<li>Il vainc</li>
			<li>Nous vainquons</li>
			<li>Vous vainquez</li>
			<li>Ils vainquent</li>
		</ul>

		<h2>Un pangramme:</h2>
		<p><em>Une phrase avec toutes les lettres de l'alphabet, sans les accents.</em></p>
		<p><strong>Voix ambiguë d'un c&oelig;ur qui, au zéphyr, préfère les jattes de kiwis.</strong></p>

		<h2>Un virelangue: (essayez de le lire sans bafouiller !)</h2>
		<p>Natacha n’attacha pas son chat Pacha qui s’échappa. Cela fâcha Sacha qui chassa Natacha.</p>

		<h2>Et enfin:</h2>
		<img id="pingu" src="nootnoot.gif">
		<quote><em>Merci !</em></quote>

		<?php
			$tableau = array(array('langage'=>'PHP','age'=>21),
							array('langage'=>'JAVA','age'=>20),
							array('langage'=>'C#','age'=>14),
							array('langage'=>'COBOL','age'=>56),
							array('langage'=>'BASIC','age'=>51),
							array('langage'=>'C','age'=>43),
							array('langage'=>'C++','age'=>32)
						);
			echo '<table><tr><th>Langage</th><th>Âge</th></tr>';
			foreach ($tableau as $langage)
				echo '<tr><td>'.$langage['langage'].'</td><td>'.$langage['age'].'</td></tr>';
			echo '</table>';
		?>
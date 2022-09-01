<h1>PHP Funktionen</h1>
<div>
	<?php 

		// Mit dem Return Statement gibt uns eine Funktion einen Wert zurück.
		// Dabei wird was auch immer nach dem return kommt, nicht ausgeführt.
		// return sorgt also dafür, dass die Funktion verlassen wird.
		function multiply($a, $b){
			echo "wird angezeigt";
			return $a * $b;
			echo "wird nie angezeigt, da nach dem return";
		}
		
		$result = multiply(13, 25);
		echo $result;
	?>
</div>


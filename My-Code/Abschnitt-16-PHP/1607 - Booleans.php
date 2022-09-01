<h1>PHP Booleans</h1>
<div>
	<?php 

		// Erstellung einer Variablen
		$a = true;
		// Mit der var_dump Funktion erhalten wir zusätzliche Informationen über die Variable
		var_dump($a);
		
		$b = 1;
		var_dump($b);
		
		$c = 13 < 5;
		var_dump($c);
		
		if($c){
			echo "passt";
		}
		
		// Mit der empty() Funktion können wir überprüfen ob eine Variable leer ist, oder nicht.
		// Ist hilfreich um zu testen ob eine Variable leer ist oder nicht und 
		// wenn sie leer ist nicht mit ihr zu machen
		if(empty($d)){
			echo "Variable ist leer!";
		}else{
			echo "Variable ist nicht leer!"
		}
		
		// alternativ - Das ! kehrt den Wert um.
		if(!empty($d)){
			echo "Variable ist nicht leer!";
		}else{
			echo "Variable ist leer!"
		}
	?>
</div>


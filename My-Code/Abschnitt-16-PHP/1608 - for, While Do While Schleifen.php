<h1>PHP Schleifen</h1>
<div>
	<?php 

		for($x = 0; $x <10; $x++){
			echo $x;
		}
		
		$x = 1; 
		do {
			echo "Die Zahl ist: $x <br>";
			$x++;
		} while ($x <= 5);
		
		$counter = 0;
		while($counter < 10){
			$counter++;
		}
		
		$x = 6561;
		$counter = 0;
		while($x % 3 == 0){
			// Wichtig, da wir sonst eine Endlosschleife erzeugen.
			$x = $x/3;
			$counter++;
		}
		var_dump($counter);
		

	?>
</div>


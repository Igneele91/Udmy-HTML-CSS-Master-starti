<h1>PHP Foreach</h1>
<div>
	<?php 
		// Indexed Array
		$marken = array("Audi", "BMW", "VW", "Porsche"); 
		echo $marken[0];
		echo "<br>".$marken[1];
		echo "<br> Anzahl an Marken ist " . count($marken); 
		
		
		var_dump($marken);
		
		
		// vs
		
		echo "<pre>";
		var_dump($marken);
		echo "</pre>";
		
		// VS
		
		echo "<pre>";
		print_r($marken);
		echo "</pre>";
		
		foreach ($marken as $value) {
			echo "$value <br>";
		}
		
		// Sortieren der Inhalte von Arrays
		$numbers = array(3, 5, 1, 23, 13);
		sort($numbers);
		
		$arrlength = count($numbers);
		for($x = 0; $x < $arrlength; $x++) {
			echo $numbers[$x];
			echo "<br>";
		}
		
		// Associative Array
		$age = array("Frank"=>"33", "Michi"=>"27", "Sissy"=>"23");
		// oder:
		$age['Frank'] = "33";
		$age['Michi'] = "27";
		$age['Sissy'] = "23";
		
		echo "<br>Frank ist " . $age['Frank'] . " Jahre Alt.";
		
		// Durch einen Associative Array loopen.
		foreach($age as $x => $x_value) {
			echo "Key=" . $x . ", Value=" . $x_value;
			echo "<br>";
		}
		
		
	?>
</div>


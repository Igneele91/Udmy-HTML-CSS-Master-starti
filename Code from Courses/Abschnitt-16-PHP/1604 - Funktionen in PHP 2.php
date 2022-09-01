<h1>PHP Funktionen</h1>
<div>
	<?php 
	// Anlegen einer Funktion in PHP wie auch in Javascript
		function sayHelloTo($name){
			$phrase = "Hello " . $name . " my friend!";
			echo $phrase;
		}
	
	// Aufrufen einer Funktion in PHP mit einem Parameter;
		sayHello("Frank");
		echo "<br>";
		sayHello("Michi");
		
		
	//  Herausforderung: Stelle zwei Freunde einander vor und nutze dazu eine Funktion mit zwei Parametern:
		function introduce($friend1, $friend2){
			echo "Hi " . $friend1 . " das ist mein Freund " . $friend2;
		}
		
		introduce("Manu", "Sissy");
	?>
</div>


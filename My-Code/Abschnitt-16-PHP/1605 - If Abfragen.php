<h1>PHP if Abfragen</h1>
<div>
	<?php 

		$alter = 16;
		
		if($alter >18){
			echo "Du darfst in den Club";
		}else{
			echo "Du bist zu jung!";
		}
		
		$name = "Denis";
		
		if($name !="Denis"){
			echo "Wer bist du?!";
		}else{
			echo "Hi Denis!"
		}

	?>
</div>


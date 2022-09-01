<h1>Mein PHP Dokument</h1>
<div>
	<?php 
	// Anlegen einer Variable mit dem Dollar Zeichen, danach der Name der Variablen
		$a = 13;
		$b = 11;
		$c = $a + $b;
		// Mit echo geben wir HTML aus. Also hierbei einfach 24
		echo $c;
	?>
	<br>
	<?php 
		// Wir können jederzeit einen weiteren PHP Block starten
		$satz = "Hallo Welt!";
		echo $satz;
		// Er kennt die Variable c vom anderen Block hier NICHT
		// echo "Ergebnis ist: " + $c;
		// Das ließe sich jedoch mittels superglobals lösen.
		$satz2 = "Danke";
		echo $satz . " und hallo du! " . $satz2; 
	?>
</div>

<!--
Regeln für PHP-Variablen:

Eine Variable beginnt mit dem Zeichen $, gefolgt vom Namen der Variablen.
Ein Variablenname muss mit einem Buchstaben oder dem Unterstrichzeichen beginnen.
Ein Variablenname darf nicht mit einer Zahl beginnen.
Ein Variablenname darf nur alphanumerische Zeichen und Unterstriche (A-z, 0-9 und _) enthalten.
Variablennamen sind case-sensitive ($age und $AGE sind zwei verschiedene Variablen).

-->
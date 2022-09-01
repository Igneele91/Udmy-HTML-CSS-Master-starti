<?php 
	include "const.php";
	
	echo "Heute ist $mo";
?>

<html lang="de-DE">
<head>  
    <meta charset="utf-8">
    <title>Titel</title>
	<style>
		body{
			background-color:gray;
		}
		.container{
			width 800px;
			padding 10px;
			background-color:white;
			border: 2px solid #ccc;
			border-radius: 2px;
		}
	</style>
</head>
<body>
       <div class="container">
			<ul>
				<li><a href="index.php">Startseite</a></li>
				<li><a href="about.php">About</a></li>
			</ul>
	   </div>

</body>
</html>
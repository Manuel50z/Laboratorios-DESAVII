<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	$posicion = "arriba";
	switch ($posicion) {
		case "arriba":// bloque1

		echo "La variable contiene ";
		echo "el valor arriba";
			break;
		case "abajo": //bloque2
		echo "La variable contiene ";
		echo "el valor abajo";
		break;

		default: // bloque 3
		echo "La variable contiene ";
		echo "el valor arriba y abajo";
			break;
	}
	?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Laboratorio 2.5</title>
</head>
<body>
<?php
$figuras=array ('cuadrado','triangulo','circulo');
$figuras[1]='rectangulo';
mostrar_figuras($figuras,"asignacion de rectangulo");

array_push($figuras, 'pentagono');
mostrar_figuras($figuras,"adicion del pentagono al final");

array_unshift($figuras, 'hexagono');
mostrar_figuras($figuras,"adicion del hexagono al inicio");

array_pop($figuras);
mostrar_figuras($figuras,"eliminacion de ultima");

array_shift($figuras);
mostrar_figuras($figuras,"eliminacion del primero");

function mostrar_figuras($figuras,$mensaje){
	echo "<br>arreglo despues de $mensaje <br>";
	foreach ($figuras as $figura) {
		echo "$figura <br>";
	}
}
?>
</body>
</html>
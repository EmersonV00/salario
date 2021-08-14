<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Datos calculados</title>
	<link rel="stylesheet" type="text/css" href="estilos2.css"/>
</head>
<body>

<form name="datosrecibidos">
	<?php
	$codigo = $_POST["codigo"];
	$nombre = $_POST["nombre"];
	$comisiones = $_POST["comisiones"];
	$sbase = $_POST["sbase"];
	$descjudiciales = $_POST["descjudiciales"];
	$igss = $_POST["igss"];
	$isr = $_POST["isr"];

	$porentajeigss = ($igss*$sbase)/100;
	$suma = ($sbase+$comisiones);
	$porcentajeisr = ($suma*$isr)/100;

	$tdescuentos = ($descjudiciales+$porentajeigss+$porcentajeisr);

	$sueldoliquido = ($suma-$tdescuentos);


	echo "<div class_alias(estilo) align=\"center\"> Código empleado: " .($codigo) . "</div><br>";
	echo "<div align=\"center\"> Nombre del empleado: " .$nombre . "</div><br>";
	echo "<div align=\"center\"> Sueldo base: " . "Q".number_format($sbase,2) . "</div><br>";
	echo "<div align=\"center\"> Salario liquido: " . "Q".number_format($sueldoliquido,2) . "</div><br>";
	echo "<div align=\"center\"> Total de descuentos: " . "Q".number_format($tdescuentos,2) . "</div><br>";

	?>
</form>
</body>
</html>
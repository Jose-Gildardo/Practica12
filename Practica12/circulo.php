<html>
<center><head><title>Área del circulo</title></head>
<body>
<br>

<h2> Resultado: Área del circulo</h2>
<p>
</center>
<?php
	echo "<center>";
 extract($_REQUEST, EXTR_SKIP); //Extrayendo los imputs del formulario
 $result = 3.14 *($radio * $radio);
 print "$result";
 echo "</center>";
?>
<center><a href="area.php">Regresar al menu</a></h2></center>
</body>
</html> 
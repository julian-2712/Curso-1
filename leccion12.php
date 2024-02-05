<?php
$numero = 7;

var_dump($numero); // var_dump() se usa para ver la información de la variable, en este caso "numero"

echo "<br> \n"; // Salto de línea, <br> es para cuando lo visualizamos en el navegador, \n para cuando lo visualizamos con el programa php en línea de comandos.
echo "<br> \n"; // Salto de línea, <br> es para cuando lo visualizamos en el navegador, \n para cuando lo visualizamos con el programa php en línea de comandos.
echo "<br> \n"; // Salto de línea, <br> es para cuando lo visualizamos en el navegador, \n para cuando lo visualizamos con el programa php en línea de comandos.

$numerillo = "10"; // Variable de tipo string
$numerillo = $numerillo + 7; /* Le sumamos un número (7), que es tipo integer, a la variable de tipo string.
								Al sumar un integer con un string, PHP interpretará ambos como números.
							 */

var_dump($numerillo); // Imprimimos la variable con información del tipo de dato que contiene

echo "<br> \n"; // Salto de línea, <br> es para cuando lo visualizamos en el navegador, \n para cuando lo visualizamos con el programa php en línea de comandos.
echo "<br> \n"; // Salto de línea, <br> es para cuando lo visualizamos en el navegador, \n para cuando lo visualizamos con el programa php en línea de comandos.
echo "<br> \n"; // Salto de línea, <br> es para cuando lo visualizamos en el navegador, \n para cuando lo visualizamos con el programa php en línea de comandos.

$papas = "10 papas en la bolsa";
$cuantas_papas_hay = $papas + 5;

echo $cuantas_papas_hay;
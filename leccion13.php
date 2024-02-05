<?php
$numero_string = "7"; // Esto es un string
$numero_int = (int) $numero_string; // Esto es un integer

echo $numero_string;
echo "<br> \n";
echo $numero_int;
echo "<br> \n";
var_dump($numero_string);
echo "<br> \n";
var_dump($numero_int);
echo "<br> \n";
echo "<br> \n";
$dias = 5.89; // Esto es un float
$dias = (int) $dias; // Esto es un integer

var_dump( $dias ); // Detalles de la variable
echo "<br> \n"; // Salto de línea
echo "<br> \n"; // Salto de línea
/*
Mensaje en la consola/navegador: 
int(5)
*/
echo "<br> \n"; // Salto de línea

$banderita = 0; // Integer. Puede ser "" e igual será false
$banderita = (bool) $banderita; // Casting de integer a boolean

var_dump($banderita); // Detalles de la variable
echo "<br> \n"; // Salto de línea

/*
Mensaje en la consola/navegador: 
bool(false)
*/

echo "<br> \n"; // Salto de línea
$banderita = 55; // Integer. Puder ser cualquier numero o String e igual será true
$banderita = (bool) $banderita; // Casting de  a boolean
echo "<br> \n"; // Salto de línea
var_dump($banderita); // Detalles de la variable
echo "\n"; // Salto de línea

/*
Mensaje en la consola/navegador: 
bool(true)
*/
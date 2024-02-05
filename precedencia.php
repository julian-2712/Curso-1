<?php

/*
$contador = 1;
$resultado = $contador++;

echo $resultado;

*/

// Tiene asociatividad izquierda
// echo 1 - 2 - 3;

// Tiene asociatividad derecha

/*
// $b = 5;
$c = 10;

$a = $b = $c;

echo $a;

*/

$michis_4_patas = true;
$michis_programan_con_PHP = false;

$resultado = $michis_4_patas and $michis_programan_con_PHP;
$resultado_2 = ($michis_4_patas and $michis_programan_con_PHP);

var_dump($resultado); // true
var_dump($resultado_2); // false

// Obtenemos diferentes valores por la asociatividad

echo "\n";

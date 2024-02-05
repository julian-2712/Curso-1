<?php

//leccion 18

$a = 5;
$b = 5;
$b2 = "5";
$c = 7;
$d = 1;

// OPERADOR == (Igual)

/* var_dump($a == $b);
echo "\n";
var_dump($a == $b2);
echo "\n"; */

// OPERADOR === (Idéntico)

/* var_dump($a === $b);
echo "\n";
var_dump($a === $b2);
echo "\n"; */

// OPERADOR != (Diferente)

/* var_dump($a != $b);
echo "\n";
var_dump($a != $b2);
echo "\n"; */

// OPERADOR !== (Diferente, pero comparando también tipos de datos)

/* var_dump($a !== $b);
echo "\n";
var_dump($a !== $b2);
echo "\n"; */

// OPERADOR < (Menor que)

/* var_dump($a < $b);
echo "\n";
var_dump($c < $b);
echo "\n";
var_dump($d < $b); */

// OPERADOR > (Mayor que)

/* var_dump($a > $b);
echo "\n";
var_dump($c > $b);
echo "\n";
var_dump($d > $b); */

// OPERADOR >= (Mayor o igual que)

/* var_dump($a >= $b);
echo "\n";
var_dump($c >= $b);
echo "\n";
var_dump($d >= $b); */

// OPERADOR <= (Menor o igual que)

/* var_dump($a <= $b);
echo "\n";
var_dump($c <= $b);
echo "\n";
var_dump($d <= $b); */

// OPERADOR <=> (Nave espacial)

/* 
echo 2 <=> 1; // Debería dar 1
echo 1 <=> 1; // Debería dar 0
echo -50 <=> 1; // Debería dar -1
*/

// OPERADOR ?? (Fusión de null) (Muestra la primera variable que está definida)

$edad_de_fran = 34;

echo $edad_de_pepe ?? $edad_de_fran ?? $edad_de_antonio;

echo "\n";
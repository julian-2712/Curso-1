<?php

echo "Introduciendo horas, minutos y segundos, te diré cuántos segundos hay! ";

echo "\n";

$horas = readline("Horas: ");
$minutos = readline("Minutos: ");
$segundos = readline("Segundos: ");

// echo "$horas Horas, $minutos minutos y $segundos segundos.";

echo "\n";

$horas = $horas * 3600;
$minutos = $minutos * 60;

$segundos = $horas + $minutos + $segundos;

echo "El total de segundos es de $segundos.";

echo "\n";
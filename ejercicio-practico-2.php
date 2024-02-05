<?php

echo "Introduciendo horas, minutos y segundos, te diré cuántos segundos hay! ";

echo "\n";

$horas = readline("Horas: ");
$minutos = readline("Minutos: ");
$segundos = readline("Segundos: ");

// echo "$horas Horas, $minutos minutos y $segundos segundos.";

echo "\n";

$resultado = ($horas * 3600) + ($minutos * 60) + $segundos;

echo "El total de segundos es de $resultado.";

echo "\n";
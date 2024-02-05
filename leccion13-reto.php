<?php
//Fácil
$nombre = "Carlos"; // Respuesta personal: String
$apellido = "Gómez"; // Respuesta personal: String
$edad = 18; // Respuesta personal: Integer
$aprobado = true; // Respuesta personal: Bool

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5; // Respuesta personal: Float
$nombre_completo = $nombre . " " . $apellido; // Respuesta personal: String
$presento_examen = (bool) 1; // Respuesta personal: Bool

//Avanzado
$numero_preguntas = 5 + "5"; // Respuesta personal: Integer
$numero_respuestas = "5" + 5; // Respuesta personal: Integer
$promedio_maximo = $numero_respuestas / 1.0; // Respuesta personal: Float
$michis = 3 + "5 michis"; // Respuesta personal: Int + error

//------------------------------------------
echo "Fácil <br>";
var_dump($nombre);
echo "<br>";
var_dump($apellido);
echo "<br>";
var_dump($edad);
echo "<br>";
var_dump($aprobado);
echo "<br>";
echo "<br>";
echo "Medio <br>";
var_dump($promedio);
echo "<br>";
var_dump($nombre_completo);
echo "<br>";
var_dump($presento_examen);
echo "<br>";
echo "<br>";
echo "Avanzado <br>";
var_dump($numero_preguntas);
echo "<br>";
var_dump($numero_respuestas);
echo "<br>";
var_dump($promedio_maximo);
echo "<br>";
var_dump($michis);
echo "<br>";
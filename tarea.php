<?php

// a. Declaración de Variables:
$edad = 25;
$altura = 1.75;
$nombre = "Juan Pérez";
$esEstudiante = false;
$frutas = array("mango", "fresa", "kiwi", "papaya", "sandía");

// b. Operaciones Aritméticas:
$diferencia = $edad - 5;
$division = $altura / 2;

echo "La diferencia entre $edad y 5 es: $diferencia<br>";
echo "La mitad de la altura ($altura) es: $division<br>";

// c. Manipulación de Cadenas:
$apellido = "García";
$nombreCompleto = $nombre . " " . $apellido;
$longitudNombre = strlen($nombreCompleto);

echo "Nombre completo: $nombreCompleto<br>";
echo "La longitud del nombre completo es: $longitudNombre caracteres<br>";

// d. Uso de Condicionales:
if ($esEstudiante) {
    echo "El usuario es estudiante<br>";
} else {
    echo "El usuario no es estudiante<br>";
}

// e. Creación de un Array:
echo "El cuarto elemento del arreglo es: " . $frutas[3] . "<br>";
?>

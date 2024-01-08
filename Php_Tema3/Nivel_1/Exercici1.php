<?php
/* 
Crea un array, añádele 5 números enteros y luego muestrales por pantalla de uno en uno.
*/

// Creacion de un array
$numeros = array();

// Anadiendo 5 números enteros
$numeros[] = 12;
$numeros[] = 34;
$numeros[] = 76;
$numeros[] = 90;
$numeros[] = 18;

// Mostrando los elementos del array
foreach ($numeros as $numero) {
        echo "El número es: ". $numero . "<br>";
    }
?>
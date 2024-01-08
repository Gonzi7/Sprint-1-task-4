<?php
/*

$X = array (10, 20, 30, 40, 50,60);
Mostrar por pantalla el tamaño del array anterior y 
posteriormente elimina un elemento del array anterior. 
Después de eliminar el elemento, las claves enteras deben 
ser normalizadas (se deben reorganizar sus índices). Muestra por última vez el tamaño del array.

*/
//Tamaño del array antes de eliminar elementos
$numbers = array(10, 20, 30, 40, 50, 60);

$size = count($numbers);
echo "El tamaño del array es: " . $size ."<br>";

// Eliminando un elemento random del array
unset($numbers[3]);

// Re-index
$numbers = array_values($numbers);

// Mostrando el nuevo tamaño del array 
echo "El nuevo tamaño del array es: " .count($numbers) ."<br>";

?>
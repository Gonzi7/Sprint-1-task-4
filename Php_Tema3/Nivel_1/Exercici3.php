<?php
/*
Crea una función que reciba como parámetros un array de palabras y un carácter.
 La función nos devuelve true si todas las palabras del array tienen el carácter 
 pasado como segundo parámetro.

Por ejemplo:

Si tenemos [“hola”, “Php”, “Html”] devolverá true si preguntamos por “h” 
pero falso si preguntamos por “l”.

*/
function palabrasContienenCaracter($palabras, $caracter){
    foreach($palabras as $palabra){
        if(strpos(strtolower($palabra),strtolower($caracter)) === false){
            return false;
        }
   }
   return true;
}

echo palabrasContienenCaracter(["Hola", "Php", "Html"], "h") ? "true" : "false"; // true
echo "<br>";
echo palabrasContienenCaracter(["Hola", "Php", "Html"], "a") ? "true" : "false"; // false
echo "<br>";

?>
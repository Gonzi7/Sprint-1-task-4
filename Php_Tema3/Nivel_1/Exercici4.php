<?php
/*
Haz un array asociativo que represente información de ti mismo/a. En concreto debe incluir:

nombre
edad
email
comida favorita

*/
$mi_informacion = array( 
                    "nombre" => "Benito Camela",  
                    "edad" => 30,					   
                    "email"=> "benitocamela@gmail.com",  
                    "comida_favorita" => "pizza");

//print_r($mi_informacion);
foreach($mi_informacion as $mi_informacion){
         echo "$mi_informacion<br>";
}

?>
<?php 

$texto = "El Salvador";
$variable_1=$texto;
//Asignacion por referencia
$variable_2=&$texto;

$texto ="XD";
echo $variable_1;
echo "<br>";

echo $variable_2;
<?php 
$fecha_1="2021/11/29";
$fecha_2="2021-11-30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

//convertir en array
$array_fecha = explode("/",$fecha_1);
$array_fecha1=explode("-",$fecha_2);
$array_fecha2=explode(" ",$numeros);
echo $array_fecha[0];
echo "<br>";
var_dump($array_fecha);

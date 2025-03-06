<?php 
date_default_timezone_set("America/Rainy_River");
$fecha_us=date("Y-m-d");
$fecha_us=date(("d-m-Y"));

$hora_12=date("h:i a");
$hora_24=date("H:i A");
echo $fecha_us;
echo "<br>";
echo $hora_12;
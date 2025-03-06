<?php 
$laptop=["Acer Nitro 5","Windows 11","AMD Rayzen 5 4600H","SSD 256GB","RAM 24GB"];

$frutas=[
    "Fresas"=>100,
    "Peras"=>30,
    "Sandias"=>10,
    "Melocotones"=>17,
    "Manzanas"=>9
];

foreach($laptop as $valor){
    echo $valor."<br>";
 }
 echo "<br>";

 //para array asociativo
 foreach($laptop as $clave => $valor){
    echo $clave." - ".$valor."<br>";
 }

 echo "<br>";
 foreach($frutas as $clave => $valor){
    echo "Hay ".$valor." ".$clave." en el inventario"."<br>"; 

 }
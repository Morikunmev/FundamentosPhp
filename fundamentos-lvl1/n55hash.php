<?php 
$clave="HolaMundo123";
echo md5($clave);
echo "<br>";
echo sha1($clave);
echo "<br>";
echo hash("md5",$clave);

foreach(hash_algos() as $algoritmos){
    echo $algoritmos. " - ".hash($algoritmos,$clave)."<br>";
}
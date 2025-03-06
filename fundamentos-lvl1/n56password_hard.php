<?php 
$clave="HolaMundo123";
echo password_hash($clave,PASSWORD_DEFAULT);
echo "<br>";
echo password_hash($clave,PASSWORD_BCRYPT,["cost"=>11]);
<?php 
foreach($_POST["asignatura"]as $asignatura){
    echo $asignatura."<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
$fresa = $_POST["frutas"];
foreach($fresa as $fruta){
    echo $fruta."<br>";
}
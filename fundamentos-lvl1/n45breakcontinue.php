<?php 
$c=1;
while($c<=20){
    echo $c."<br>";
    if($c==10){
        break;
    }
    $c++;
}
echo "<br>";
$pc=["S0","SSD","GPU","RAM","CPU"];
foreach($pc as $componente){
    echo $componente."<br>";
    if($componente=="GPU"){
        break;
    }
}
echo "<br>";
$pc1=["S0","SSD","GPU","RAM","CPU"];
foreach($pc1 as $componente){
    if($componente=="GPU"){
        continue;
    }
    echo $componente."<br>";
}
echo "<br>";
for($i=1;$i<=10;$i++){
    if($i==5){
        continue;
    }
    echo $i."<br>";
}
echo "<br>";
$x=1;
while($x<=10){
    if($x==3){
        $x++;
        continue;
    }
    echo $x."<br>";
    $x++;
}

<?php 

$dia=0;
if($dia){
    echo "Lunes";
}elseif($dia==2){
    echo "Martes";
}elseif($dia==3){
    echo "Miercoles";
}elseif($dia==4){
    echo "Jueves";
}elseif($dia==5){
    echo "Viernes";
}elseif($dia==6){
    echo "Sabado";
}elseif($dia==7){
    echo "Domingo";
}else{
    echo "Error ha introducido no valdddd";
}
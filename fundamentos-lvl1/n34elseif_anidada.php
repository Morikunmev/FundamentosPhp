<?php 
    $edad=60;
    $genero="M";
    if($genero=="M"){
        if($edad>=60){
            echo "Puede jubilarse";
        }else{
            echo "No puede jubilarse";
        }
    }elseif($genero=="F"){
        if($edad>54){
            echo "Puede jubilarse";
        }else{
            echo "No puede jubilarse";
        }

    }else {
        echo "Coloque una opcion valida";
    }



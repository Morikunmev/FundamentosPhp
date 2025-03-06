<?php

    $tutor_2=[
        "nombre"=>"Vanessa",
        "apellido"=>"Calles",
        "edad"=>20,
        "cursos"=>["nombre"=>"Carlos","apellido"=>"Alfaro","edad"=>27]
    ];
    echo $tutor_2["cursos"]["apellido"];
    //agregar un nuevo clave valor
    $tutor_2["pais"]="El Salvador";
    echo $tutor_2["pais"];
    echo "<br>";
    echo count($tutor_2,COUNT_RECURSIVE);
?>
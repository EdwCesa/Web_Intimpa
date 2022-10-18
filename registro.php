<?php
    
    
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $edad=$_POST['edad'];
    $nacimiento=$_POST['nacimiento'];
    $sexo=$_POST['sexo'];
    $ciudad=$_POST['ciudad'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];

    echo "los datos son los siguientes: <br>";
    echo "$nombres,$apellidos,$edad,$nacimiento,$sexo,$ciudad,$correo y $telefono";

?>
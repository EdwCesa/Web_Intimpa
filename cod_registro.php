<?php
include("conexion.php")

$v1 = $_POST['dni'];
$v2 = $_POST['nombre'];
$v3 = $_POST['apellido'];
$v4= $_POST['edad'];
$v5 = $_POST['ciudad'];
$v6 = $_POST['email'];
$v7 = $_POST['telefono'];

insertar ($v1, $v2, $v3, $v4, $v5, $v6, $v7);

function insertar($v1, $v2, $v3, $v4, $v5, $v6, $v7){
    global $conex;

    if(!mysqli_query($conex, "INSERT INTO formulario(dni, nombre, apellido, edad, ciudad, email, telefono) VALUES ('".$v1."','".$v2."','".$v3."','".$v4."','".$v5."','".$v6."','".$v7."' )"))
    {
        echo "ERROR!";
    }
    else {
        echo "Registro Realizado!";
    }
}
?>
<?php
$db_host="localhost:3307";
$db_user="root";
$db_password="";
$db_name="Formulario";
$db_table_name="tb_usuario";
$db_connection = mysqli_connect($db_host, $db_user, $db_password);

if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}
$subs_dni = utf8_decode($_POST['dni']);
$subs_name = utf8_decode($_POST['nombre']);
$subs_last = utf8_decode($_POST['apellido']);
$subs_edad = utf8_decode($_POST['edad']);
$subs_ciudad = utf8_decode($_POST['ciudad']);
$subs_email = utf8_decode($_POST['email']);
$subs_telefono = utf8_decode($_POST['telefono']);

$resultado=mysqli_query("SELECT * FROM ".$db_table_name." WHERE DNI = '".$subs_dni."'", $db_connection);

if (mysqli_num_rows($resultado)>0)
{

header('Location: Fail.html');

} else {
	
	$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`DNI`, `Nombres` , `Apellidos` , `Edad`, `Ciudad`, `Correo`, `Telefono`) VALUES ("' . $subs_dni . '", "' . $subs_name . '", "' . $subs_last . '", "' . $subs_edad . '", "' . $subs_ciudad . '", "' . $subs_email . '", "' . $subs_telefono . '")';

mysqli_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);

if (!$retry_value) {
   die('Error: ' . mysqli_error());
}
	
header('Location: Success.html');
}

mysqli_close($db_connection);
		
?>
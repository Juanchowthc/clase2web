<?php

require 'conexion.php';


	$Nombres = $_REQUEST['nombres'];
	$Apellidos = $_REQUEST['apellidos'];
	$Genero = $_REQUEST['genero'];
	$Fecha = $_REQUEST['nacimiento'];
	$Uname = $_REQUEST['usuario'];
	$Password = $_REQUEST['clave'];
	$Correo = $_REQUEST['correo'];
	$Codigo = $_REQUEST['codigo'];
	$Direccion = $_REQUEST['direccion'];
	$Telefono = $_REQUEST['telefono'];
	
	
	$insertar = "INSERT INTO registrados VALUES ('$Nombres', '$Apellidos', '$Genero', '$Fecha', '$Uname', '$Password', '$Correo', '$Codigo', '$Direccion', '$Telefono')";


$resultado = mysqli_query($conexion, $insertar);
	if($resultado) {
		
		echo "¡Se insertaron los datos correctamente!";
	} else {
		
		echo "¡No se puede insertar la informacion!"."<br>";
		echo "Error: " . $insertar . "<br>" . mysqli_error($conexion);
	}
?>

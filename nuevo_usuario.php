<?php 
	
	require('conexion.php');
	
	$nombre=$_POST['nombre'];
	$apellidos=$_POST['apellidos'];
	$matricula=$_POST['matricula'];
	$clave=$_POST['contraseña'];
	$carrera=$_POST['carrera'];
	
	$query="INSERT INTO usuarios (nombre, apellidos, matricula, clave, carrera) VALUES ('$nombre','$apellidos','$matricula','$clave','$carrera')";
	
	$resultado=$mysqli->query($query);
	
?>
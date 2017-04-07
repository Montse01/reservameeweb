<?php 
	
	require('conexion.php');
	
	$matricula=$_GET['matricula'];
	
	$query="DELETE FROM usuarios WHERE matricula='$matricula'";
	
	$resultado=$mysqli->query($query);
	
?>
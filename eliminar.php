<?php 
	
	require('conexion.php');
	
	$id_usuario=$_GET['id_usuario'];
	
	$query="DELETE FROM usuarios WHERE id_usuario='$id_usuario'";
	
	$resultado=$mysqli->query($query);
	
?>


<html>
	<head>
		<title>Eliminar Usuario</title>
	</head>
	
	<div class="conteiner">
		<div class="table-responsive">
		<table class="table table-striped table-borde table-hover table-condensed">
		<title>Eliminar Usuario</title>
		<body style="background-color:#E6E6FA;">
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Usuario Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Usuario</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="listar_usuario.php">Regresar</a>
			
		</center>

	</body>
</html>
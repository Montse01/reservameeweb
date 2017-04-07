
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Modificar o borrar usuario</title>
		
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    </head>
<body>
<div class="bg">
<div class="bg-2">

<!--==============================header=================================-->
    <header>
        <h1><a href="index.html"><img src="images/ic_launcher.png" alt=""></a></h1>
        <nav>  
            <ul class="menu">
                <li><a href="index.html">Inicio</a></li>
                <li class="current"><a href="reservaciones.html">Reservaciones</a></li>
                <li><a href="usuarios.html">Alta Usuarios</a></li>
                 <li><a href="listar_usuario.php">Usuarios</a></li>
            </ul>
         </nav>
    </header>   
  <!--==============================content================================-->


  <section id="content"><div class="ic"></div>
        <div class="slogan top-1">
           <p>Sistema <span class="clr-1">de</span> control <span class="clr-1">de</span>  reservaciones <span class="clr-1">de</span> Inglés.</p>

           
        </div>
        <div class="wrap page2-row1">
          <div class="page2-col-1 border-right">
           

            </div> 
           
              <h2><span class="clr-1">E</span>ditar o Borrar Usuarios:</h2>
                <div class="wrap">




	<table class="table table-striped table-condensed">
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<center>
				<table border="3" >
				<thead>
				<tr>
					
					<td><b>Nombre</b></td>
					<td><b>Apellidos</b></td>
					<td><b>Matricula</b></td>
					<td><b>Clave</b></td>
					<td><b>Carrera</b></td>
					
				</tr>
				</thead>
				<tbody>
<?php
	
	require('conexion.php');
	
	$query="SELECT * FROM usuarios";
	
	$resultado=$mysqli->query($query);
	while($row=$resultado->fetch_assoc())
	{

			?>
		                <tr>
							
							<td>
								<?php echo $row['nombre'];?>
							</td>
							<td>
							  <?php echo $row['apellidos'];?>
							</td>
							<td>
								<?php echo $row['matricula'];?>
							</td>
							<td>
							  <?php echo $row['clave'];?>
							</td>
							<td>
							  <?php echo $row['carrera'];?>
							</td>
							
							<td>
								<a href="modificar_usuario.php?id_usuario=<?php echo $row['id_usuario'];?>"><img src="images/modificacion.png"></a>
							</td>
							<td>
								<a href="eliminar.php?id_usuario=<?php echo $row['id_usuario'];?>"><img src="images/eliminar.png"></a>
							</td>
						</tr>

			<?php
	}
	
	
?>
</tbody>
			</table>			
				</center>	
 <footer>
      <p><strong>2017  Rersérvame</strong><br>Elaborado por: <br>Montserrat R.M y Lizeth O.V</p>
  </footer>     
		
	</body>
</html>
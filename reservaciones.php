<?php 
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reservaciones</title>
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
                <li class="current"><a href="reservaciones.php">Reservaciones</a></li>
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
           
            	<h2><span class="clr-1">R</span>eservaciones:</h2>
                <div class="wrap">
			
		
   <form  method="POST" action="reservaciones.php">
      <div class="conteiner">
      <div class="table-responsive">
      <table class="table table-striped table-borde table-hover table-condensed"> 
        <tr>
          <td width="20"><b>Fecha</b></td>
          <td width="30"><input type="text" name="fecha" size="25" value="" /></td>
        </tr> 
        <tr>

          <td><b>Hora:</b></td>
          <td><input type="text" name="hora" size="25" value="" /></td>
        </tr>
        <tr>
         <br>
        <br>
          <td><input type="submit" name="ver" size="25" value="ver" /></td>
        </tr>
      </table>
    </form>
 

	<table class="table table-striped table-condensed">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <center>
        <table border="3" >
        <thead>
        <tr>
					
					<td><b>Clave maquina </b></td>
					<td><b>Funcionamiento </b></td>
					<td><b>Laboratorio </b></td>
					<td><b>Numero maquina </b></td>
					<td><b>Observaciones</b></td>
					
				</tr>
				</thead>
				<tbody>
<?php
	
	require('conexion.php');
	$fecha=$_POST['fecha'];
	$hora=$_POST['hora'];
	$query="SELECT * FROM maquinas, reservaciones where maquinas.id_maquina=reservaciones.id_maquina and reservaciones.fecha='$fecha' AND reservaciones.hora_inicio='$hora'";
	
	$resultado=$mysqli->query($query);
	while($row=$resultado->fetch_assoc())
	{

	?>

	 <tr>
							
							<td>
								<?php echo $row['id_maquina'];?>
							</td>
							<td>
							  <?php echo $row['funcionamiento'];?>
							</td>
							<td>
								<?php echo $row['laboratorio'];?>
							</td>
							<td>
							  <?php echo $row['num_maquina'];?>
							</td>
							<td>
							  <?php echo $row['observaciones'];?>
							</td>
							
							</tr>

			<?php
	}
	
?>
</tbody>
			</table>			
				</center>	
	<!--==============================parte 

vacia=================================-->
  <aside>
    <div class="wrap">
      <div class="aside-col-1 border-right-2">
                  </div>
        <div class="aside-col-2 border-right-2">
            </div>
        </div>  
    </div>
  </aside>
<!--==============================pie de página=================================-->
  <footer>
      <p><strong>2017  Rersérvame</strong><br>Elaborado por: <br>Montserrat R.M y Lizeth O.V</p>
  </footer>        
</body>
</html>


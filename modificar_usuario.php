<!DOCTYPE html>
<html lang="en">
<head>
    <title>Editar</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
  
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
	
</head>
<body>
<div class="bg">
<div class="bg-2">
 <!--==============================encabezado=================================-->
    <header>
        <h1><a href="index.html"><img src="images/ic_launcher.png" alt=""></a></h1>
        <nav>  
            <ul class="menu">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="reservaciones.html">Reservaciones</a></li>
		<li><a href="usuarios.html">Alta Usuarios</a></li>
                <li class="current"><a href="listar_usuarios">Editar o Borrar Usuarios</a></li>
                
            </ul>
         </nav>
    </header>   
  <!--==============================contenido================================-->



 <section id="content"><div class="ic"></div>
        <div class="slogan top-1">
        	<p>Sistema <span class="clr-1">de</span> control <span class="clr-1">de</span>  reservaciones <span class="clr-1">de</span> Inglés.</p>

        	</div>
        <div class="page5-row1">
            <div class="page5-col-1 border-right">
            </div>
            <div class="page5-col-2">
            	<h2><span class="clr-1">E</span>ditar o borrar usuarios:</h2>
                 
 <?php
  
  require('conexion.php');
  $id=$_REQUEST['id_usuario'];
  $query="SELECT * FROM usuarios where id_usuario='$id'";
  
  $resultado=$mysqli->query($query);
  $row=$resultado->fetch_assoc()
  

      ?>
   <form  method="POST" action="proces_modif_usuario.php?id_usuario=<?php echo $row['id_usuario'];?>">
      <div class="table-responsive">
    <table class="table table-striped table-borde table-hover table-condensed"> 
        
        <tr>
          <td width="20"><b>Nombre:</b></td>
      <td width="30"><input type="text" name="nombre" size="25" value="<?php echo $row['nombre']; ?>" /></td>
        </tr> 
        <tr>
          
          <tr>
          <td width="20"><b>Apellidos:</b></td>
          <td><input type="text" name="apellidos" size="25" value="<?php echo $row['apellidos']; ?>" /></td>
        </tr>
        <tr>
          
          <tr>
          <td width="20"><b>Matrícula:</b></td>
          <td><input type="text" name="matricula" size="25" value="<?php echo $row['matricula']; ?>" /></td>
        </tr>
        <tr>
          
          <tr>
          <td width="20"><b>Password:</b></td>
          <td><input type="password" name="clave" size="25" value="<?php echo $row['clave']; ?>" /></td>
        </tr>
        <tr>
          
          <tr>
          <td width="20"><b>Carrera:</b></td>
          <td><input type="text" name="carrera" size="25" value="<?php echo $row['carrera']; ?>" /></td>
        </tr>
        <tr>
          <td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
        </tr>
      </table>
    </form>



       
                  </fieldset>  
              
            </div>    
        </div>
    </section> 
</div>       
</div> 


  <!--==============================parte vacia=================================-->
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
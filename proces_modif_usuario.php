 
<!DOCTYPE html>
<html lang="en">
	<head>
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

 <?php
  
  require('conexion.php');
  $id=$_REQUEST['id_usuario'];
  $nom=$_POST['nombre'];
  $ap=$_POST['apellidos'];
  $mat=$_POST['matricula'];
  $cla=$_POST['clave'];
  $carrer=$_POST['carrera'];
  $query="UPDATE usuarios SET nombre='$nom', apellidos='$ap', matricula='$mat', clave='$cla', carrera='$carrer' where id_usuario='$id'";
  
  $resultado=$mysqli->query($query);
  	if($resultado)
  	{
  		echo "El usuario se edito correctamente";
  	}else
  	{
  		echo "ERROR AL EDITAR USUARIO";
  	}
  

      ?>

     
</html>
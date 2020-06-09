<?php 
  session_start();

  unset($_SESSION['consulta']);

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesion</title>    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/Proyecto web.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script> 
</head>
<body>
    <form id = "myForm" name = "myForm" action="" onsubmit="return Validar()">
 <h2> Ingrese a su cuenta</h2>
  <input id = 'Usuario'type = "text" placeholder = "Nombre de usuario" name = "Usuario"></input>
  <input id = 'Contraseña'type = "password" placeholder = "Contraseña" name = "Contraseña"></input>
  <button id = 'Ingresar' type= "submit" value="submit" name="Ingresar">Ingresar</button>
    </form>

     
</body>
</html>

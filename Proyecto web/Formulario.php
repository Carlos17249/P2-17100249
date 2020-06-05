<?php
$host="mysql5012.site4now.net";
$port=3306;
$user="a5de1d_regmweb";
$password="MusicaDB1*";
$dbname="db_a5de1d_regmweb";

$con = new mysqli($host, $user, $password, $dbname, $port)
     or die ('Could not connect to the database server' . mysqli_connect_error());
  
     $nombre = mysqli_real_escape_string($con,$_POST["nombre"]);
$nomreArtista = mysqli_real_escape_string($con,$_POST["nombreArtista"]);
$Album = mysqli_real_escape_string($con,$_POST["Album"]);
$Fecha_1 = $_POST["Fecha"];
$Fecha = strtotime($Fecha_1);
$Fecha = date('Y-m-d',$Fecha);
$Duracion_1 = $_POST["Duracion"];
$Duracion = strtotime($Duracion_1);
$Duracion = date('H:i:s',$Duracion);
$Genero = mysqli_real_escape_string($con,$_POST["Genero"]);
$Escritor = mysqli_real_escape_string($con,$_POST["Escritor"]);
$rs= mysqli_query($con,"Insert into Cancion Values(null,'$nombre','$nomreArtista','$Album','$Fecha','$Duracion','$Genero','$Escritor')");
echo ("Se ingreso correctamente");
?>
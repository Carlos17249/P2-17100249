<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['idCancion'];
	$nombre = mysqli_real_escape_string($conexion,$_POST["nombre"]);
	$nomreArtista = mysqli_real_escape_string($conexion,$_POST["artista"]);
	$Album = mysqli_real_escape_string($conexion,$_POST["album"]);
	$Fecha_1 = $_POST["fecha"];
	$Fecha = strtotime($Fecha_1);
	$Fecha = date('Y-m-d',$Fecha);
	$Duracion_1 = $_POST["duracion"];
	$Duracion = strtotime($Duracion_1);
	$Duracion = date('H:i:s',$Duracion);
	$Genero = mysqli_real_escape_string($conexion,$_POST["genero"]);
	$Escritor = mysqli_real_escape_string($conexion,$_POST["escritor"]);
	$sql="UPDATE cancion 
	set NombreCancion = '$nombre',
	NombreArtista ='$nomreArtista',
	NombreAlbum ='$Album',
	FechaPublicacion = '$Fecha',
	Duracion = '$Duracion',
	Genero = '$Genero',
	NombreEscritor = '$Escritor'
	where idCancion ='$id'";
	
	echo $result=mysqli_query($conexion,$sql);

 ?>
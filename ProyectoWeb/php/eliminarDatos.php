
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['idCancion'];

	$sql="DELETE from cancion where idCancion='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
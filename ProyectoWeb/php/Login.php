<?php
require_once "conexion.php";
$conexion=conexion();
     
$nombre = mysqli_real_escape_string($conexion,$_POST["Usuario"]);
$pass = mysqli_real_escape_string($conexion,$_POST["Contraseña"]);

$rs= mysqli_query($conexion,"call Ingresar_a_cuenta ('$nombre',md5('$pass'))"); 

if(mysqli_num_rows($rs) == 1){  
     echo 1;
} 
else{
     echo 0;
}
$conexion->close();
?>
<?php
$host="mysql5012.site4now.net";
$port=3306;
$user="a5de1d_regmweb";
$password="MusicaDB1*";
$dbname="db_a5de1d_regmweb";

$con = new mysqli($host, $user, $password, $dbname, $port)
     or die ('Could not connect to the database server' . mysqli_connect_error());
     
/* @var $_POST type */
$nombre = mysqli_real_escape_string($con,$_POST["Usuario"]);
$pass = mysqli_real_escape_string($con,$_POST["Contraseña"]);

$rs= mysqli_query($con,"call Ingresar_a_cuenta ('$nombre',md5('$pass'))"); 

if(mysqli_num_rows($rs) == 1){  
     echo 1;
} 
else{
     echo 0;
}
$con->close();
?>
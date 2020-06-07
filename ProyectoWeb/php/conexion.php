

<?php 
		function conexion(){
			$servidor="mysql5012.site4now.net";
            $usuario="a5de1d_regmweb";
            $password="MusicaDB1*";
            $bd="db_a5de1d_regmweb";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>
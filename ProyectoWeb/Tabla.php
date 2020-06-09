<?php 
  session_start();

  unset($_SESSION['consulta']);

 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Tabla de registros</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
  <link rel="stylesheet" href="css/Proyecto web.css">
</head>
<body>


	<div class="container" id= "container">
    <div id="buscador"></div>
		<div id="tabla"></div>
  </div>

	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nueva cancion</h4>
      </div>
      <div class="modal-body">
        	<label>Nombre de la cancion</label>
        	<input type="text" name="" id="nombre" class="form-control input-sm">
        	<label>Nombre del artista</label>
        	<input type="text" name="" id="artista" class="form-control input-sm">
        	<label>Nombre del album</label>
        	<input type="text" name="" id="album" class="form-control input-sm">
        	<label>Fecha de publicacion</label>
        	<input type="date" name="" id="fecha" class="form-control input-sm">
          <label>Duracion</label>
        	<input type="time" name="" id="duracion" class="form-control input-sm" step="1">
          <label>Genero</label>
        	<input type="text" name="" id="genero" class="form-control input-sm">
          <label>Nombre del escritor</label>
        	<input type="text" name="" id="escritor" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
      <label>id</label>
        	<input type="text" name="" id="idCancion" class="form-control input-sm">
      <label>Nombre de la cancion</label>
        	<input type="text" name="" id="nombreu" class="form-control input-sm">
        	<label>Nombre del artista</label>
        	<input type="text" name="" id="artistau" class="form-control input-sm">
        	<label>Nombre del album</label>
        	<input type="text" name="" id="albumu" class="form-control input-sm">
        	<label>Fecha de publicacion</label>
        	<input type="date" name="" id="fechau" class="form-control input-sm">
          <label>Duracion</label>
        	<input type="time" name="" id="duracionu" class="form-control input-sm" step="1">
          <label>Genero</label>
        	<input type="text" name="" id="generou" class="form-control input-sm">
          <label>Nombre del escritor</label>
          <input type="text" name="" id="escritoru" class="form-control input-sm">    
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          nombre=$('#nombre').val();
          artista=$('#artista').val();
          album=$('#album').val();
          fecha=$('#fecha').val();
          duracion=$('#duracion').val();
          genero=$('#genero').val();
          escritor=$('#escritor').val();
            agregardatos(nombre,artista,album,fecha,duracion,genero,escritor);
        });



        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>
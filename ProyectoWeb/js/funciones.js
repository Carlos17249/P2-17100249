

function agregardatos(nombre,artista,album,fecha,duracion,genero,escritor){

	cadena="&nombre=" + nombre + 
			"&artista=" + artista +
			"&album=" + album +
			"&fecha=" + fecha+
			"&duracion=" + duracion +
			"&genero=" + genero +
			"&escritor=" + escritor;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				 $('#buscador').load('componentes/buscador.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos){

	d=datos.split('||');

	$('#idCancion').val(d[0]);
	$('#nombreu').val(d[1]);
	$('#artistau').val(d[2]);
	$('#albumu').val(d[3]);
	$('#fechau').val(d[4]);
	$('#duracionu').val(d[5]);
	$('#generou').val(d[6]);
	$('#escritoru').val(d[7]);

}

function actualizaDatos(){


	id=$('#idCancion').val();
	nombre=$('#nombreu').val();
	artista=$('#artistau').val();
	album=$('#albumu').val();
	fecha=$('#fechau').val();
	duracion=$('#duracionu').val();
	genero=$('#generou').val();
	escritor=$('#escritoru').val();

	cadena= "&idCancion=" + id +
	        "&nombre=" + nombre + 
			"&artista=" + artista +
			"&album=" + album +
			"&fecha=" + fecha+
			"&duracion=" + duracion +
			"&genero=" + genero +
			"&escritor=" + escritor;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="&idCancion=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}

function Validar(){
    if(document.getElementById('Usuario').value ==""){
        alertify.error("Debes ingresar tu nombre de usuario")
        return false;
    }else if(document.getElementById('Contraseña').value ==""){
        alerttify.error("Debes ingresar tu contraseña")
        return false;
    }
    Enviar();
}

function objetoAjax(){
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {

        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false; }
    }

    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
      xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function Enviar(){
		Contraseña = document.getElementById('Contraseña').value;
		Usuario = document.getElementById('Usuario').value;		
		ajax = objetoAjax();
		ajax.open("POST", "Login.php", false);
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
                Respuesta = (ajax.responseText)
			}
		}
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        ajax.send("&Usuario="+Usuario+"&Contraseña="+Contraseña)
        if (Respuesta == 0){
            alertify.error("Usuario o contraseña incorrecto")
            return false;
            }
            else{
                Mostrar_Formulario();
            }
}

function Mostrar_Formulario(){ 
alertify.success("Inicio de sesion correcto!");
event.preventDefault();
document.location.assign(document.location.origin+"/ProyectoWeb/tabla.php");
}

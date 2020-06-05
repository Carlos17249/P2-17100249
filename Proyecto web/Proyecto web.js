function Validar(){
    if(document.getElementById('Usuario').value ==""){
        alert("Debes ingresar tu nombre de usuario")
        return false;
    }else if(document.getElementById('Contraseña').value ==""){
        alert("Debes ingresar tu contraseña")
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
		ajax.open("POST", "Ingresar.php", false);
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
                Respuesta = (ajax.responseText)
			}
		}
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        ajax.send("&Usuario="+Usuario+"&Contraseña="+Contraseña)
        if (Respuesta == 0){
            alert("Usuario o contraseña incorrecto")
            return false;
            }
            else{
                Mostrar_Formulario();
            }
}

function Mostrar_Formulario(){ 
alert("Inicio de sesion correcto!");
event.preventDefault();
document.location.replace(document.location.origin+"/Proyecto web/Formulario.html");
}

function ValidarFormulario(){
    if(document.getElementById('nombre').value ==""){
        alert("Debes ingresar el nombre de la cancion")
        return false;
    }else if(document.getElementById('nombreArtista').value ==""){
        alert("Debes ingresar el nombre del artista")
        return false;
    }else if(document.getElementById('Album').value ==""){
        alert("Debes ingresar el nombre del album")
        return false;
    }else if(document.getElementById('Genero').value ==""){
        alert("Debes ingresar el genero")
        return false;
    }else if(document.getElementById('Escritor').value ==""){
        alert("Debes ingresar el nombre del escritor")
        return false;
    }
    EnviarFormulario();
}

function EnviarFormulario(){
         Nombre = document.getElementById('nombre').value;
        NombreArtista = document.getElementById('nombreArtista').value;	
        Album = document.getElementById('Album').value;
        Fecha = document.getElementById('Fecha').value;	
        Duracion = document.getElementById('Duracion').value;
        Genero = document.getElementById('Genero').value;		
        Escritor = document.getElementById('Escritor').value;
			
		ajax = objetoAjax();
		ajax.open("POST", "Formulario.php", false);
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
                Respuesta = (ajax.responseText)
                
			}
		}
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        ajax.send("&nombre="+Nombre+"&nombreArtista="+NombreArtista+"&Album="+Album+"&Fecha="+Fecha+"&Duracion="+Duracion+"&Genero="+Genero+"&Escritor="+Escritor)

        alert(Respuesta)
}
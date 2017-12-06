<!DOCTYPE html>
<html lang="es">
<head>
    <head>
    <meta charset="UTF-8">

<title>Registro Usuario</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!--Ateriormente tenemos el soporte utf-8 para caracteres 
    y demas, y el soporte para celulares y demas dispositivos-->
    
    <link rel="stylesheet" href="assets/css/main.css" />
    
    <!--Anteriormente contamos con la referencia del estilo que vamos a utilizar y el lenguaje-->

    </head>
    <body>
    <div id="page-wrapper">
      
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />
	<title>buscar</title>
</head>
<script type="text/javascript">
function validar(){
    var form= document.form;
    if(form.documentoUsuario.value==0){
        alert("ingresa el documento!!");
        form.codigo.value="";
        form.codigo.focus();
        return false;
    }
    
    form.submit();
}

function limpiar(){
    document.form.reset();
    document.form.documentoUsuario.focus();
}	
</script>
<body onload="limpiar()">
<h1>Busca</h1>
<form action="busca.php" method="POST">
<label>Codigo:</label><input type="text" name="documentoUsuario" ><br><br>
<button onclick="validar()" type="submit">Busca</button>
<button type="reset">Limpiar</button>
</form>
</body>
</html>
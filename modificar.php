<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />
	<title>modificar</title>
</head>
<script type="text/javascript">
function validar(){
    var form= document.form;
    if(form.documentoUsuario.value==0){
        alert("ingresa el documento!!");
        form.documentoUsuario.value="";
        form.documentoUsuario.focus();
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
<form action="modifica.php" method="POST">
<label>documento:</label><input type="text" name="documentoUsuario" ><br><br>
<button onclick="validar()" type="submit">Busca</button>
<button type="reset">Limpiar</button>
</form>
</body>
</html>
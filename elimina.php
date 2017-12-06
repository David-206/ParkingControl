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
<?php
require_once('usuario.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>consulta los clientes</title>
</head>
<body>
<h1 align="center">Consulta de Clientes que sera eliminado</h1> 
<?php
$documentoUsuario=$_POST['documentoUsuario'];
$busca=new  usuario();
$resp=$busca->buscar($documentoUsuario);
if ($resp) {
	?>
<center>
      <?php foreach ($resp as $row): ?> 
        <form action="elimina2.php" method="POST">
         <table border="1" cellpadding="3" cellspacing="3">
         <tr>
            <td >nombre:    
             <td><input type="text" name="nombreUsuario" value="<?php echo $row['nombreUsuario']; ?> " readonly>    
            <tr>
            <td>cargo:    
            <td><input type="text" name="idCargo" value="<?php echo $row['idCargo']; ?>" readonly>
            <tr>
            <td>apellido:    
            <td><input type="text" name="apellidoUsuario" value="<?php echo $row['apellidoUsuario']; ?>" readonly> 
            <tr>
           <td>Tipo documento:<?php 
//Conexion a la base de datos 
$conexion=mysql_connect("localhost","root",""); 
mysql_select_db("proyectoparkingcontrol",$conexion); 

////Obteniendo registros de la base de datos a traves de una consulta SQL 
$consulta="SELECT usuario.id,tipodoc.id,tipodoc.nombre from tipodoc,usuario where usuario.id=tipodoc.id"; 
$resultado=mysql_query($consulta,$conexion); 
//mostrar resultados en pantalla 
echo "".mysql_result($resultado, 0, "nombre")."<br>";  
?> <br>
            <td>N°documento:    
           <td><input type="text" name="documentoUsuario" value="<?php echo $row['documentoUsuario']; ?>" readonly>
            <tr>
            <td>Direccion:    
            <td><input type="text" name="direccionUsuario" value="<?php echo $row['direcciónUsuario']; ?> " readonly>
            <tr>
            <td>celular:    
             <td><input type="text" name="telCel" value="<?php echo $row['telCel']; ?>" readonly>
            <tr>
            <td>fijo:    
             <td><input type="text" name="telFijo" value="<?php echo $row['telFijo']; ?> " readonly>
            <tr>
            <td>correo electronico:      
            <td ><input type="text" name="correo" value="<?php echo $row['correo'];?>" readonly>
            <tr>
            <td>genero:    
           <td><input type="text" name="genero" value="<?php echo $row['genero']; ?>" readonly>
            <tr>
            <td>tipo de vehiculo:    
            <td><input type="text" name="tipoVehiculo" value="<?php echo $row['tipoVehiculo']; ?> " readonly>
            <tr> 
            <tr>
          
         </table>
         <BR>
         <button type="submit">Eliminar</button>
        <form> 
     <?php endforeach ?>     
 </center>
	<?php

}else{

echo"<script>
       alert('el usuario no existe: $documentoUsuario no exixste!! ')
        window.location='eliminar.php';
        </script>";
}

?>
</body>
</html>

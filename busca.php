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
	<title>consulta</title>
</head>
<body>
<h1 align="center">Consulta de Clientes</h1> 
<?php
$documentoUsuario=$_POST['documentoUsuario'];
$busca=new  usuario();
$resp=$busca->buscar($documentoUsuario);
if ($resp) {
	?>
<center>
      <?php foreach ($resp as $row): ?> 
         <table border="1" cellpadding="3" cellspacing="3"> 
            <tr>
            <td >nombre:    
             <td><?php echo $row['nombreUsuario']; ?>     
            <tr>
            <td>cargo:    
            <td><?php echo $row['idCargo']; ?>
            <tr>
            <td>apellido:    
            <td><?php echo $row['apellidoUsuario']; ?> 
            <tr>
            <td>tipo de documento:    
            <td><?php 
//Conexion a la base de datos 
$conexion=mysql_connect("localhost","root",""); 
mysql_select_db("proyectoparkingcontrol",$conexion); 

////Obteniendo registros de la base de datos a traves de una consulta SQL 
$consulta="SELECT usuario.id,tipodoc.id,tipodoc.nombre from tipodoc,usuario where usuario.id=tipodoc.id"; 
$resultado=mysql_query($consulta,$conexion); 
//mostrar resultados en pantalla 
echo "".mysql_result($resultado, 0, "nombre")."<br>";  
?> 
            <td>N°documento:    
           <td><?php echo $row['documentoUsuario']; ?>
            <tr>
            <td>Direccion:    
            <td><?php echo $row['direccionUsuario']; ?> 
            <tr>
            <td>celular:    
             <td><?php echo $row['telCel']; ?>
            <tr>
            <td>fijo:    
             <td><?php echo $row['telFijo']; ?> 
            <tr>
            <td>correo electronico:      
            <td ><?php echo $row['correo'];?>
            <tr>
            <td>genero:    
           <td><?php echo $row['genero']; ?>
            <tr>
            <td>tipo de vehiculo:    
            <td><?php echo $row['tipoVehiculo']; ?> 
            <tr>
         </table>
     <?php endforeach ?>     
 </center>
	<?php
}else{
echo"<script> alert('el usuario no existe: $documentoUsuario no exixste!! ')
window.location='buscar.php';
        </script>";
}

?>
</body>
</html>







        
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

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_cliente.xls");
require_once('usuario.php');

?>

<?php
	
$respuesta=new usuario();
$reg=$respuesta->listar();  

foreach($reg as $row){
?>
  <center>
    <table width="100%" border="1"> 
             <tr>
                <td bgcolor="#9ED0DB" >Nro. 
                <td bgcolor="#9ED0DB">Nombre
                <td bgcolor="#9ED0DB">cargo    
                <td bgcolor="#9ED0DB">apellido 
                <td bgcolor="#9ED0DB">tipodocumento 
                <td bgcolor="#9ED0DB">documento
                <td bgcolor="#9ED0DB">direccion    
                <td bgcolor="#9ED0DB">celular 
                <td bgcolor="#9ED0DB">fijo
                <td bgcolor="#9ED0DB">correo  
                <td bgcolor="#9ED0DB">genero 
                <td bgcolor="#9ED0DB">tipovehiculo
               
                     
<?php
            $n=0;
    foreach ($reg as $row):
             $n++;
    if($n%2 == 0){
 ?>

    <tr bgcolor="blue">  
<?php
    }else{
?> 
    <tr bgcolor="blue">
<?php   
    } 
            ?> 
         
            <tr>
                <td><?php echo $n;?> 
                <td><?php echo $row['nombreUsuario']; ?> 
                <td><?php echo $row['idCargo']; ?>
                <td><?php echo $row['apellidoUsuario']; ?> 
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
                <td><?php echo $row['documentoUsuario']; ?>
                <td><?php echo $row['direcciónUsuario']; ?> 
                <td><?php echo $row['telCel']; ?>
                <td><?php echo $row['telFijo']; ?> 
                <td><?php echo $row['correo']; ?> 
                <td><?php echo $row['genero']; ?>
                <td><?php echo $row['tipoVehiculo']; ?> 
               
            </tr>
            <?php 
            endforeach 
            ?>  

     </table><br> 
     <?php
}
?>  
</table>
</body>
</html>
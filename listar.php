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
require_once "usuario.php"; 
 $registros = 300; 
@$pagina = $_GET ['pagina']; 
if (!isset($pagina)) { 
$pagina = 1; 
$inicio = 0; 
}else { 
$inicio = ($pagina-1) * $registros; 
} 
$usuarioModel = new usuario(); 
$reg = $usuarioModel->listar();
$total_registros=$usuarioModel->paginacion();
$total_paginas = ceil($total_registros / $registros); 

if($reg){
?> 
   <!DOCTYPE html> 
   <html lang="es"> 
   <head> 
   <meta charset="utf-8">
   <link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />
    <title>Usuarios registrados</title> 
   </head> 
    <body> 
    <h1 align="center">Lista de los clientes</h1>
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

if($total_registros>$registros){ 
if(($pagina - 1) > 0) { 
echo "<span><a  href='?pagina=".($pagina-1)."'>&laquo; Anterior</a></span> "; 
} 
// Numero de paginas a mostrar 
$num_paginas=10; 
//limitando las paginas mostradas 
$pagina_intervalo=ceil($num_paginas/2)-1; 
// Calculamos desde que numero de pagina se mostrara 
$pagina_desde=$pagina-$pagina_intervalo; 
$pagina_hasta=$pagina+$pagina_intervalo; 
// Verificar que pagina_desde sea negativo 
if($pagina_desde<1){ // le sumamos la cantidad sobrante para mantener el numero de enlaces mostrados $pagina_hasta-=($pagina_desde-1); $pagina_desde=1; } // Verificar que pagina_hasta no sea mayor que paginas_totales if($pagina_hasta>$total_paginas){ 
$pagina_desde-=($pagina_hasta-$total_paginas); 
$pagina_hasta=$total_paginas; 
if($pagina_desde<1){ 
$pagina_desde=1; 
} 
} 
for ($i=$pagina_desde; $i<=$pagina_hasta; $i++){ 
if ($pagina == $i){ 
echo "<span>".$pagina."</span> "; 
}else{ 
echo "<span><a  href='?pagina=$i'>$i</a></span> "; 
} 
} 
if(($pagina + 1)<=$total_paginas) { 
echo " <span><a href='?pagina=".($pagina+1)."'>Siguiente &raquo;</a></span>"; 
} 
} 
?> 
</center>
<br><br>
<center>
<button><a href="suma.php">Detalles</a></button>
<button><a href="index.php">Menu</a></button>  
</center>
 </body> 
 </html> 
<?php
}else{

echo "<script>
       alert('no exixste registros!! ')
        window.location='listar.php';
        </script>";
}

?>




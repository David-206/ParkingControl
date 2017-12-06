<?php
require_once('usuario.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>modifica  clientes</title>
</head>
<body>
<h1 align="center">Consulta de Clientes que sera modificaso</h1> 
<?php
$documentoUsuario=$_POST['documentoUsuario'];
$busca=new  usuario();
$resp=$busca->buscar($documentoUsuario);
if ($resp) {
	?>
<center>
      <?php foreach ($resp as $row): ?> 
        <form action="modifica2.php" method="POST">
         <table border="1" cellpadding="3" cellspacing="3"> 
           <tr>
            <td >nombre:    
             <td><input type="text" name="nombreUsuario" value="<?php echo $row['nombreUsuario']; ?>"    
            <tr>
            <td>cargo:    
            <td><input type="text" name="idCargo" value="<?php echo $row['idCargo']; ?>" 
            <tr>
            <td>apellido:    
            <td><input type="text" name="apellidoUsuario" value="<?php echo $row['apellidoUsuario']; ?>"  
            <tr>
            <td>tipo de documento:    
            <td><input type="text" name="tipodoc" value="<?php echo $row['tipodoc']; ?> " 
             <tr>   
            <td>N°documento:    
           <td><input type="text" name="documentoUsuario" value="<?php echo $row['documentoUsuario']; ?>" 
            <tr>
            <td>Direccion:    
            <td><input type="text" name="direccionUsuario" value="<?php echo $row['direcciónUsuario']; ?> " 
            <tr>
            <td>celular:    
             <td><input type="text" name="telCel" value="<?php echo $row['telCel']; ?>" 
            <tr>
            <td>fijo:    
             <td><input type="text" name="telFijo" value="<?php echo $row['telFijo']; ?> "
            <tr>
            <td>correo electronico:      
            <td ><input type="text" name="correo" value="<?php echo $row['correo'];?>" 
            <tr>
            <td>genero:    
           <td><input type="text" name="genero" value="<?php echo $row['genero']; ?>" 
            <tr>
            <td>tipo de vehiculo:    
            <td><input type="text" name="tipoVehiculo" value="<?php echo $row['tipoVehiculo']; ?> " 
            <tr> 
            <tr>
         </table>
         <BR>
         <button type="submit">Modificar</button>
        <form> 
     <?php endforeach ?>     
 </center>
	<?php

}else{

echo"<script>
       alert('el documento no existe: $documentoUsuario no existe!! ')
        window.location='modificar.php';
        </script>";
}

?>
</body>
</html>

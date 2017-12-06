<?php   
require_once "usuario.php"; 
$usuarioModel = new usuario(); 
$reg = $usuarioModel->listar();
if($reg){
?> 
   <!DOCTYPE html> 
   <html lang="es"> 
   <head><meta charset="utf-8"><title>Usuarios registrados</title></head> 
    <body> 
    <h1 align="center">Lista de los clientes</h1>
    <center>
    <table width="100%" border="1"> 
               <tr>
                 <td bgcolor="#9ED0DB" >Nro. 
                <td bgcolor="#9ED0DB">nombreUsuario
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
        <?php foreach ($reg as $row): ?> 
             <tr>
                <td><?php echo $n;?> 
                <td><?php echo $row['nombreUsuario']; ?> 
                <td><?php echo $row['idCargo']; ?>
                <td><?php echo $row['apellidoUsuario']; ?> 
                <td><?php echo $row['tipodoc']; ?> 
                <td><?php echo $row['documentoUsuario']; ?>
                <td><?php echo $row['direccionUsuario']; ?> 
                <td><?php echo $row['telCel']; ?>
                <td><?php echo $row['telFijo']; ?> 
                <td><?php echo $row['correo']; ?> 
                <td><?php echo $row['genero']; ?>
                <td><?php echo $row['tipoVehiculo']; ?> 
               
            </tr>
            <?php 
            endforeach 
            ?>  
       </table>
     </center>
</body> 
 </html> 
<?php
}else{
echo "<script>alert('no existe registros!! ')window.location='listar.php';</script>";
}
?>




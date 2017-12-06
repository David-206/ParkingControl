<?php

require_once('usuario.php');

$nombreUsuario=$_POST['nombreUsuario'];
$apellidoUsuario=$_POST['apellidoUsuario'];
$tipodoc=$_POST['tipodoc'];
$documentoUsuario=$_POST['documentoUsuario'];
$direccionUsuario=$_POST['direccionUsuario'];
$telCel=$_POST['telCel'];
$telFijo=$_POST['telFijo'];
$correo=$_POST['correo'];
$tipoVehiculo=$_POST['tipoVehiculo'];
$idCargo=$_POST['idCargo'];
$genero=$_POST['genero'];

$usuario=new usuario();
$reg=$usuario->registro($nombreUsuario,$idCargo,$apellidoUsuario,$tipodoc,$documentoUsuario,$direccionUsuario,$telCel,$telFijo,$correo,$genero,$tipoVehiculo);
if ($reg) {
	header("location:listar.php");
}else{
    echo "fallo"; 
}    

?>

<?php


require("base_datos.php");



$nombreUsuario=$_POST['nombreUsuario'];
$apellidoUsuario=$_POST['apellidoUsuario'];
$tipodoc=$_POST['tipodoc'];
$documentoUsuario=$_POST['documentoUsuario'];
$direccionUsuario=$_POST['direccionUsuario'];
$telCel=$_POST['telCel'];
$telFijo=$_POST['telFijo'];
$correo=$_POST['correo'];
$confirmacionCorreo=$_POST['confirmacionCorreo'];
$tipoVehiculo=$_POST['tipoVehiculo'];
$idCargo=$_POST['idCargo'];
$genero=$_POST['genero'];

$sql="INSERT INTO usuario VALUES('$nombreUsuario','$idCargo','$apellidoUsuario','$tipodoc','$documentoUsuario','$direccionUsuario','$telCel','$telFijo','$correo','$genero','$tipoVehiculo')";



$ejecutar=mysqli_query($mysqli,$sql);


if(!$ejecutar)
{
	echo "no se pudieron registrar los datos";
}
else
{
echo"<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
<head>
<meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    
  
    
    <link rel='stylesheet' href='assets/css/main.css' />
<form action='DatosVeiculo.php' method='POST'>

</head>

<body>

				<div>
					 <div class='box'>
						<font color=black font face=papyrus font size=6>Sus datos se han guardado exitosamente
						<div class='6u 12u(mobilep)''>
                       
                         </div>
				<br>
						<form action='DatosVeiculo.php' method='POST'>
						 <li><center><input type='submit' value='Continuar'/></li>
						</div><center></form>
						<center><br><br><img src=images/images.jpg>"
						;

}
?>
	


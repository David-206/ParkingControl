<?php

require_once('usuario.php');
$documentoUsuario=$_POST['documentoUsuario'];

$eliminar=new usuario();
$reg=$eliminar->eliminar($documentoUsuario);

if($reg){
 header('location:listar.php');
}else{
echo "no se elimino nada";
}

?>
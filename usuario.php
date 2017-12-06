<?php

require_once ('modelo.php');

class usuario extends modelo{
protected $nombreUsuario;
protected $apellidoUsuario;
protected $tipodoc;
protected $documentoUsuario;
protected $idCargo;
protected $direccionUsuario;
protected $telCel;
protected $telFijo;
protected $correo;
protected $genero;
protected $tipoVehiculo;

public	function __construct(){
    parent::__construct();
}

public function registro($nombreUsuario,$idCargo,$apellidoUsuario,$tipodoc,$documentoUsuario,$direccionUsuario,$telCel,$telFijo,$correo,$genero,$tipoVehiculo){

 
$sql="INSERT INTO usuario VALUES('$nombreUsuario','$idCargo','$apellidoUsuario','$tipodoc','$documentoUsuario','$direccionUsuario','$telCel','$telFijo','$correo','$genero','$tipoVehiculo')";
$resultado=$this->_db->prepare($sql);
$re=$resultado->execute();
	if (!$re) {
	echo "el ingreso de datos ";
}else{
	return $re;
	$re->close();
	$this->_db->close();
}
}

public function buscar($documentoUsuario){

$sql="SELECT *FROM usuario WHERE documentoUsuario='".$documentoUsuario."'";
$busca=$this->_db->query($sql);
$respuesta=$busca->fetch_all(MYSQLI_ASSOC);
	if ($respuesta) {
    
 return $respuesta;
	$respuesta->close();
	$this->_db->close();
}
}


public function eliminar($documentoUsuario){

 $sql="DELETE FROM usuario where documentoUsuario='".$documentoUsuario."'";
 $elimina=$this->_db->prepare($sql);
 $re=$elimina->execute();
 if (!$re) {
	echo "fallo la eliminacion de datos ";
}else{
	return $re;
	$re->close();
	$this->_db->close();
}
}

public function modificar($nombreUsuario,$idCargo,$apellidoUsuario,$tipodoc,$documentoUsuario,$direccionUsuario,$telCel,$telFijo,$correo,$genero,$tipoVehiculo){

	$sql="UPDATE usuario SET nombreUsuario=$nombreUsuario,idCargo=,$idCargo,apellidoUsuario=$apellidoUsuario,tipodoc=$tipodoc,documentoUsuario=$documentoUsuario,direccionUsuario=$direccionUsuario,telCel=$telCel,telFijo=$telFijo,correo=$correo,genero=$correo,tipoVehiculo=$tipoVehiculo WHERE documentoUsuario='".$documentoUsuario."'";
   $modifica=$this->_db->query($sql);

  if(!$modifica){
   echo "fallo la modificacion de datos";
  }else{
  	return $modifica;
	$modifica->close();
	$this->_db->close();
  } 	
}


public function listar(){

$registros = 7; 
@$pagina = $_GET ['pagina']; 
if (!isset($pagina)) { 
$pagina = 1; 
$inicio = 0; 
}else { 
$inicio = ($pagina-1) * $registros; 
}
$total_registros=$this->paginacion(); 
$total_paginas = ceil($total_registros / $registros); 
$sql="SELECT*FROM usuario order by documentoUsuario ASC LIMIT ".$inicio." , ".$registros." ";
$resultado=$this->_db->query($sql);
$usuarios=$resultado->fetch_all(MYSQLI_ASSOC);
if ($usuarios) {
 return $usuarios;
$usuarios->close();
$this->_db->close();
}
}


public function paginacion(){
  $sql="SELECT*FROM usuario";
  $resultado=$this->_db->query($sql);
  $respuesta=$resultado->num_rows;
  return $respuesta;
  $respuesta->close();
  $this->_db->close();
}



public function suma(){

$sql="SELECT sum(deuda) as suma from clientes";
$suma=$this->_db->query($sql);
$respuesta=$suma->fetch_all(MYSQLI_ASSOC);
foreach ($respuesta as $row ) {
$suma=$row['suma'];
$cambio=number_format($suma,2);	
 return $cambio;
$cambio->close();
$this->_db->close(); 
}
}

public function cantidad(){
	
$sql="SELECT count(*) as cantidad from clientes";
$cantidad=$this->_db->query($sql);
$respuesta=$cantidad->fetch_all(MYSQLI_ASSOC);
foreach ($respuesta as $row) {
$cant=$row['cantidad'];
return $cant;
$cant->close();
$this->_db->close();	
}
}

}
?>
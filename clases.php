<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Clases</title>
</head>

<body>

<?php

function conexionn(){
$conexion=new mysqli("localhost","root","","ProyectoParkingControl");
	
	if($conexion->connect_errno){
		echo"fallo en la conexion ". $conexion->connect_errno;
	}
	
	$conexion->set_charset("utf8");

return $conexion;
}

class Usuario{
	
	//atributos
	

  public $nombre; 
  public $idCargo; 
  public $usuarioApellido; 
  public $idTipoDocumento; 
  protected $numeroDocumento; 
  public $direcciónUsuario; 
  public $telCel;
  public $telFijo; 
  public $correo;
  public $genero;
  protected $contraseña; 
  public $tipoVehiculo;
	
	//metodos
	//constructor
	
	function Usuario( $nombre,$idCargo,$usuarioApellido,$idTipoDocumento,$numeroDocumento,$direcciónUsuario,$telCel,$telFijo,$correo,$genero,$contraseña,$tipoVehiculo){
		
  $this-> $nombre=$nombre;
  $this-> $idCargo=$iDcargo;
  $this-> $usuarioApellido=$usuarioApellido; 
  $this-> $idTipoDocumento=$idTipoDocumento;
  $this-> $numeroDocumento=$numeroDocumento; 
  $this-> $direcciónUsuario=$direcciòUsuario; 
  $this-> $telCel=$telCel;
  $this-> $telFijo=$telFijo; 
  $this-> $correo=$correo;
  $this-> $genero=$genero;
  $this-> $contraseña=$contraseña;
  $this-> $tipoVehiculo=$tipoVehiculo;

   }
	
		
	public function actualizar(){
		if ($this->cargo==2){
			$consulta="UPDATE usuario SET nombre='$this->nombre', cargo=$this->idCargo,usuasrioApellido='$this->usuarioApellido',
			idTipoDocumento=$this->tipodocumento,numeroDocumento=$this->numderoDocumento, direcciónUsuario='$this->direcciòn', telCel=$this->celular, telFijo=$this->fijo,correo='$this->correo',genero=$this->genero, contraseña='$this->contraseña',tipoVehiculo=$this->vehiculo WHERE numeroDocumento=$this->documento";
		
			$resultados=mysqli_query($this->conexion,$consulta);
			if($this->conexion->errno){	
					die($this->conexion->error);
				}
		}else{
			$consulta="UPDATE usuario SET nombre='$this->nombre', idCargo=$this->cargo, usuasrioApellido='$this->apellido',
			idTipoDocumento=$this->tipodocumento,numeroDocumento=$this->documento, direcciónUsuario='$this->direccion', telCel=$this->celular, telFijo=$this->fijo,correo='$this->correo',genero=$this->genero, contraseña='$this->contraseña',tipovehiculo=$this->vehiculo WHERE numeroDocumento=$this->documento";
		
			$resultados=mysqli_query($this->conexion,$consulta);
			if($this->conexion->errno){	
					die($this->conexion->error);
				}
			
			}
	
	}
		
	public function registrar(){
			if ($this->cargo==2){
				echo "Instructor <br>";
				$sql= "INSERT INTO USUARIO (nombre, idcargo, usuarioApellido, idTipoDocumento, numeroDocumento, direcciónUsuario, telCel, telFijo,
				 correo,genero, contraseña, tipovehiculo) VALUES ('$this->nombre', $this->cargo, '$this->apellido', $this->tipodocumento,
				 $this->documento,'$this->direccion', $this->celular, $this->fijo, '$this->correo', $this->genero, '$this->contraseña', 
				 $this->vehiculo)";
				
				$resultados=$this->conexion->query($sql);
				if($this->conexion->errno){	
					die($this->conexion->error);
				}
				
			}else{
				echo "Aprendiz";
				echo "<br>","<br>";
				$sql= "INSERT INTO usuario (nombre, idcargo, usuarioApellido, idTipoDocumento, numeroDocumento, direcciónUsuario, telCel, telFijo,
				 correo,genero, contraseña, tipovehiculo) VALUES ('$this->nombre', $this->cargo, '$this->apellido', $this->tipodocumento,
				 $this->documento,'$this->direccion', $this->celular, $this->fijo, '$this->correo', $this->genero, '$this->contraseña', 
				 $this->vehiculo)";
				
				$resultados=$this->conexion->query($sql);
				if($this->conexion->errno){	
					die($this->conexion->error);
				}
					
					
			}
		
		}
	
	public function eliminarCuenta(){
		$consulta="delete from usuario where nombre='$this->nombre'";
		$resultados=mysqli_query($this->conexion,$consulta);
		
		if($resultados==false){
			echo"error en la consulta";
			}else{
				if(mysqli_affected_rows($this->conexion)==0){
				echo"este registro no existe";	
				}else{
					echo"se an eliminado ".mysqli_affected_rows($this->conexion)." registros";
					}
			}
		
		}		
		
}
	/*$usuario =new Usuario;
	$usuario->registrar();*/
	
/////////////////////////////////////////////////
?>
<br>

<?php
class moto {
	public $marca;
	public $color;
	public $cilindrage;
	public $modelo;
	protected $placa;
	protected $propietario;
	//metodos
	function Moto($marca,$color,$modelo,$cilindrage,$propietario,$placa){
		$this->marca=$marca;
		$this->color=$color;
		$this->cilindrage=$cilindrage;
		$this->modelo=$modelo;
		$this->placa=$placa;
		$this->propietario=$propietario;
		$this->conexion= conexionn();
		}
		
	public function registrarmoto(){
		echo "motodffbf";
				$registro= "INSERT INTO moto (marca, cilindrage, modelo, color, placa, propietario) VALUES ('$this->marca', $this->cilindrage,'$this->modelo',
				 '$this->color','$this->placa', $this->propietario)";
				
				$resultados=$this->conexion->query($registro);
				if($this->conexion->errno){	
					die($this->conexion->error);
				}
		
	}
	public function eliminarmoto(){
		echo"moto eliminada";
		$consulta="delete from moto where placa='$this->placa'";
		$resultados=mysqli_query($this->conexion,$consulta);
		
		if($resultados==false){
			echo"error en la consulta";
			}else{
				if(mysqli_affected_rows($this->conexion)==0){
				echo"este registro no existe";	
				}else{
					echo"<br>se an eliminado ".mysqli_affected_rows($this->conexion)." registros";
					}
			}
		
	}
	public function actializar(){
	$consulta="UPDATE moto SET marca='$this->marca', cilindrage=$this->cilindrage, modelo='$this->modelo', color='$this->color', placa='$this->placa',
	 propietario=$this->propietario WHERE placa='$this->placa'";
	
		$resultados=mysqli_query($this->conexion,$consulta);
		if($this->conexion->errno){	
				die($this->conexion->error);
			}
	}	
	}
	
	/*$obj=new Moto;*/
	/*$obj->actializarMoto();*/
	
////////////////////////////////////////////////
class bicicleta {
	public $marca;
	protected $marco;
	public $color;
	public $clase;
	protected $propietario;
	//metodos
	function bicicleta($marca,$marco,$color,$clase,$propietario){
		$this->marca=$marca;
		$this->marco=$marco;
		$this->color=$color;
		$this->clase=$clase;
		$this->conexion= conexionn();
		$this->propietario=$propietario;
		
	}
	public function registrarCicla(){
		echo "Cicla";
				$registro= "INSERT INTO bicicleta (marca, marco, color,	clase, propietario) VALUES ('$this->marca', $this->marco, '$this->color',
				 '$this->clase', $this->propietario)";
				
				$resultados=$this->conexion->query($registro);
				if($this->conexion->errno){	
					die($this->conexion->error);
				}
		
	}
	public function actializar(){
		echo"Cicla actualizada";
	$consulta="UPDATE bicicleta SET marca='$this->marca', marco=$this->marco, color='$this->color', clase='$this->clase',propietario=$this->propietario
	 WHERE marco=$this->marco";
	
		$resultados=mysqli_query($this->conexion,$consulta);
		if($this->conexion->errno){	
				die($this->conexion->error);
			}
	}
	public function eliminarbicicleta(){
		echo"cicla eliminada";
		$consulta="delete from bicicleta where marco=$this->marco";
		$resultados=mysqli_query($this->conexion,$consulta);
		
		if($resultados==false){
			echo"error en la consulta";
			}else{
				if(mysqli_affected_rows($this->conexion)==0){
				echo"este registro no existe";	
				}else{
					echo"<br>se an eliminado ".mysqli_affected_rows($this->conexion)." registros";
					}
			}
		
	}	 
	
	
}
	
	
/////////////////////////////////////

?>

</body>
</html>

<?php


		$mysqli = new MySQLi("localhost", "root","", "proyectoparkingcontrol");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
			

	$link =mysqli_connect("localhost","root","");
	if($link){
		mysqli_select_db($link,"proyectoparkingcontrol");
	}
?>
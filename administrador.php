<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
</head>
<body>
<!complementos>
<link rel="stylesheet" href="assets/css/main.css" />
     <body>
    <div id="page-wrapper">

<div class="principal">
	<!Codigo>
	<div class="w3-container" style="width:950px ; padding:20px; transform: translate(30%, 0%);">
		<div class="w3-row">
		    <!Cantidad en tiempo real>
		    <div class="w3-half w3-container w3-white w3-border w3-card-4" style="width:400px; height:400px;">
                <center><h3>Cantidad de usuarios</h3></center>
                <p align="center"><br><img src="img/Grafica.gif" style="width:200px;height:200px;"><br></p>
                <p><div class="w3-blue" style="width: 10px; height: 10px;"><div class="w3-white" style="width: 10px; height: 10px; transform: translate(150%, -50%)">Aprendices</div></div></p>
                <p><div class="w3-green" style="width: 10px; height: 10px;"><div class="w3-white" style="width: 10px; height: 10px; transform: translate(150%, -50%)">Instructores</div></div></p>
                <p><div class="w3-orange" style="width: 10px; height: 10px;"><div class="w3-white" style="width: 10px; height: 10px; transform: translate(150%, -50%)">Administradores</div></div></p>
                <p><div class="w3-red" style="width: 10px; height: 10px;"><div class="w3-white" style="width: 10px; height: 10px; transform: translate(150%, -50%)">Invitados  <form action="ingreso.php" method="post">
                    <div class="w3-container w3-white" align="right" style="transform: translate(590%, -120%);"><button type="submit" class="w3-button w3-light-green">Ver detalles</button></div>
                </form></div></div></p>
		    </div>
		    <!Estado del parqueaderi>
		    <div class="w3-half w3-container w3-white w3-border w3-card-4" style="width:400px; height:400px;">
		        <center><h3>Estado actual del parqueadero</h3></center><br/>
		        <p>Parqueadero de motos: 52/125</p>
		        <div class="w3-light-grey w3-round">
		           <div class="w3-container w3-yellow w3-round" style="width:41%">41%</div>
		        </div><br><br>
		        <p>Parqueadero de bicicletas: 25/110</p>
		        <div class="w3-light-grey w3-round">
		           <div class="w3-container w3-yellow w3-round" style="width:22%">22%</div>
		        </div><br>
		        <form action="ingreso.php" method="post"><br><br>
                    <div class="w3-container w3-white" align="right"><button type="submit" class="w3-button w3-light-green">Ver detalles</button><br/></div>
                </form>
		    </div>
	    </div>
    </div>
    <!debajo><br>
    <div class="w3-container" style="width:950px ; padding:20px; transform: translate(30%, 0%);">
		<div class="w3-row">
		    <!Gestionar usuarios>
		    <div class="w3-half w3-container w3-white w3-border w3-card-4" style="width:400px; height:400px;">
                <center><h3>Gestionar usuarios</h3></center><br>
                <p><div class="w3-blue" style="width: 10px; height: 10px;"></div>15 Usuarios pendientes para confirmar solicitud:</p>
                <p><div class="w3-green" style="width: 10px; height: 10px;"></div>8 Usuarios están en estado inactivo:</p><br/>
                <p>Barra de tareas pendientes:</p>
                <div class="w3-light-green w3-round">
		            <div class="w3-container w3-blue w3-round" style="width:43%">43%</div>
		        </div>
		        <p align="right"><button type="submit" class="w3-button w3-light-green">Ver detalles</button></p>
		    </div>
		    <!Buscar usuarios>
		    <div class="w3-half w3-container w3-white w3-border w3-card-4" style="width:400px; height:400px;">
		        <center><h3>Buscar usuario</h3></center>
		        <p><label>Ingrese identificación del usuario:</label>
                <INPUT type="text" class="w3-input w3-border w3-round" name="n_documento" placeholder="Identificación" required="required">
		    </div>
	    </div>
    </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <?php

    $conexion = mysqli_connect("localhost","root","root","proyectoparkingcontrol") or die ("error");
    ?>

    <!--
    Esta plantilla es gratuita y es de usuo comercial a continuacion se muestra la fuente y su autor.
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
    -->


        <html>
	    <head>
		

        <!--Tenemos el pie de pagina y el encabezado-->
		
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

		<!-- Header -->
				
		<header id="header">
		<h1><a href="inicio.PHP">Parking</a>Control</h1>
		<nav id="nav">
		<ul>
		
		<li><a href="inicio.PHP">Inicio</a></li>
		<li>
		<a href="#" class="icon fa-angle-down">Otras Opciones</a>
		<ul>
									
		<li><a href="generic.html">Administrador</a></li>


		<li><a href="Registro.php">Estadisticas</a></li>


		<li><a href="Registro.php">Opciones</a></li>

		<li><a href="Registro.php">Mantenimiento</a></li>
		</ul>
		</li>
		<li><a href="#" class="button">Cerrar Sesion</a></li>
		</ul>
		</nav>
		</header>

		
		<!-- Main -->
				


				<section id="main" class="container 75%">
				<header>
				<center> <font size=8><h1> Ingreso al sistema</h1></font></center>
						
				<p>dijite sus datos</p>
					
				</header>
				
				
                <div class="row uniform 50%">
                <div class="6u 12u(mobilep)">
  
               <SELECT name="idDocumento SIZE="1" required">
               <OPTION VALUE="Seleccione el Tipo de Documento">Seleccione el Tipo de Documento</OPTION>

               <?php
		
				$peticion="SELECT * FROM tipodocumento";          
				$query=mysqli_query($conexion,$peticion);
										   
				 while ($valores = mysqli_fetch_array($query)) {                  
					echo '<option value="'.$valores["idTipoDocumento"].'">'.$valores["nombreDocumento"].'</option>';                    
				  }
                 ?>
                 </select>
                 </div>
				

				<div class="6u 12u(mobilep)">
				<input type="text" name="N° de identificacion" required="required" placeholder="N° de identificacion" />
				</div>
				

				<div class="6u 12u(mobilep)">
				<input type="password" name="Contraseña" required="required" placeholder="Contraseña" />
				</div>
				</div>
							
			    <div class="row uniform 50%">
				<div class="12u">

						
							
				<div class="row uniform">
				<div class="12u">
				<ul class="actions align-center">
				<li><center><input type="submit" value="Entrar" /></li>
				</ul>
				</div>
				</div>
				</form>
				</div>
				</section>

			<!-- Footer -->
				
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Todos los derechos reservados.</li><li>Plantilla en : <a href="http://html5up.net">HTML5</a></li>
					</ul>
				</footer>

		</div>



		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
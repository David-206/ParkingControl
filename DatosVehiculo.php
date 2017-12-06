<!DOCTYPE HTML>

    <!--
    Esta plantilla es gratuita y es de usuo comercial a continuacion se muestra la fuente y su autor.
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
    -->

        <html>
	    <head>
		

        <!--Tenemos el pie de pagina y el encabezado-->
		
		<title>Datos Vehiculo</title>
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
		<h1><a href="inicio.php">Parking</a>Control</h1>
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
            			
              <!-- Moto -->

   


				<section id="main" class="container 75%">
					<header>
						<center> <font size=8><h1> Registro moto </h1></font></center>
						<p>Registra tu Moto</p>

						</header>
					    
					    <div class="box">
						
						<form method="envio.php?vehiculo=bicicleta&propietario=<?php echo $documento;?>" action="post">
                        
                        <div class="row uniform 50%">
						<div class="6u 12u(mobilep)">
						<input type="text" name="marca" required="required" placeholder="Marca" />
						</div>


						<div class="6u 12u(mobilep)">
						<input type="text" name="color" required="required" placeholder="Color" />
						</div>
								

						<div class="row uniform 50%">
						<div class="12u">
						<input type="text" name="placa" required="required" placeholder="Placa" />
						</div>
							

                        
                        <div class="6u 12u(mobilep)">
						<input type="text" name="modelo" required="required" placeholder="Modelo" />
						</div>
						
						<div class="6u 12u(mobilep)">
						<input type="text" name="cilindraje" required="required" placeholder="Cilindraje" />
						</div>
								
						

						<div class="row uniform">
						<div class="12u">
						<ul class="actions align-center">
						<li><center><input type="submit" value="Enviar" /></li>
						
						</ul>
						</div>
					</form>
					</div>
				</div>
				</section>

				

				<!--Bicicleta-->
						
                    <section id="main" class="container 75%">
					<header>
						<center> <font size=8><h1> Registro Bicicleta</h1></font></center>
						<p>Registra tu bicicleta </p>


                        </header>
					    <div class="box">
						
						<form method="post" action="#">
						<div class="row uniform 50%">
						<div class="6u 12u(mobilep)">
						<input type="text" name="marca" required="required" placeholder="Marca" />
						</div>
								

						<div class="6u 12u(mobilep)">
						<input type="text" name="color" required="required" placeholder="Color" />
						</div>
							

						<div class="row uniform 50%">
						<div class="12u">
						<input type="text" name="marco" required="required" placeholder="Numero Marco">
						</div>

						
						<div class="6u 12u(mobilep)">
						<input type="text" name="color" required="required" placeholder="Color" />
						</div>
								
						
						<div class="6u 12u(mobilep)">
						<input type="text" name="clase" required="required" placeholder="Clase" />
						</div>
							
						
						<div class="row uniform">
						<div class="12u">
						<ul class="actions align-center">
						<li><center><input type="submit" value="Enviar" /></li>

						</form>
					</div>
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
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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
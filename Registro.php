gtfrr<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <?php 
require('base_datos.php');

?>


    

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
    
    <li><a href="inicio.php">Inicio</a></li>
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


<body>
  
  <!-- formulario Usuario-->


  <section id="main" class="container 75%">
        <header>
            
        <center> <font size=8><h1> Registro de Usuarios</h1></font></center>
        
        <p>Has el registro para acceder al sitio</p>
  
  <form action="RegistroParte2.php" method="POST">
    
         <div class="box">
          <form method="post" action="#">
            <div class="row uniform 50%">
            <div class="6u 12u(mobilep)">     

      <input type="text" name="nombreUsuario" required="required" placeholder="Nombres" />
      </div>
      
      <div class="6u 12u(mobilep)">
      <input type="text" name="apellidoUsuario" required="required" placeholder="Apellidos" />
      </div>
                
        <div class="row uniform 50%">
        <div class="6u 12u(mobilep)">
  
  
    <select name="tipodoc"><br><br>
       <option value="0">Selección:</option>
        <?php
        error_reporting(0);
                    
          $query = $mysqli -> query ("SELECT * FROM tipodoc");
                      
          while ($valores = mysqli_fetch_array($query)) {
                        
            echo '<font color=black><option value="',$valores[id],'">',$valores[nombre],'</option>';
                          
          }
        ?>
        </select>
        </div>


        <div class="6u 12u(mobilep)">

        <input type="text" name="documentoUsuario" required="required" placeholder="Documento"/>
        </div>


        
        <div class="6u 12u(mobilep)">
        <input type="text" name="direccionUsuario" required="required" placeholder="Direccion" />
        </div>
      

          <div class="6u 12u(mobilep)">
          <input type="text" name="telCel" placeholder="Telefono Celular" />
            </div>

                
        <div class="6u 12u(mobilep)">
          <input type="text" name="telFijo" placeholder="Telefono Fijo" />
            </div>
      
        <div class="6u 12u(mobilep)">
        <input type="text" name="correo" required="required" placeholder="Email" />
        </div>

        <div class="6u 12u(mobilep)">
        <input type="text" name="confirmacionCorreo" required="required" placeholder="Confirmacion Email" />
        </div>

        <div class="6u 12u(mobilep)">

                            <SELECT name="idCargo">
                            <OPTION VALUE="Seleccione Genero">Seleccione Cargo</OPTION>
                            <OPTION VALUE="1">Instructor</OPTION>
                            <OPTION VALUE="2">Aprendiz</OPTION>
                            </SELECT>
                            </div> 


           
         <div class="6u 12u(mobilep)">

                            <SELECT name="genero">
                            <OPTION VALUE="Seleccione Genero">Seleccione Genero</OPTION>
                            <OPTION VALUE="1">Masculino</OPTION>
                            <OPTION VALUE="2">Femenino</OPTION>
                            </SELECT>
                            </div>                      
        
	  
                         <div class="6u 12u(mobilep)">

                            <SELECT name="tipoVehiculo">
                            <OPTION VALUE="Seleccione Vehiculo">Seleccione Vehiculo</OPTION>
                            <OPTION VALUE="1">Bicicleta</OPTION>
                            <OPTION VALUE="2">Moto</OPTION>
                            </SELECT>
                            </div>  

        <div class="row uniform">
        <ul class="actions align-center">

                            <li><center><input type="submit" value="Continuar" /></li>

                            <li><center><input type="reset" value="Limpiar" /></li>   
              
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
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!--Ateriormente tenemos el soporte utf-8 para caracteres 
    y demas, y el soporte para celulares y demas dispositivos-->
    
    <link rel="stylesheet" href="assets/css/main.css" />
    
    <!--Anteriormente contamos con la referencia del estilo que vamos a utilizar y el lenguaje-->

    
    
	<title>agregar</title>


<style type="text/css">
	input:required:invalid{
		border: 1px solid red;
	}
	input:required:valid {
        border: 1px solid green;
    }

    input:focus{
    	color: blue;
    }
</style>
</head>
 
    
    <!-- Header -->
        

<body>
<section id="main" class="container 75%">
<form action="agregar.php" method="post">
   <div class="6u 12u(mobilep)">
<input type="text" name="nombreUsuario" required="required" placeholder="Nombres" />
      </div>
      
      <div class="6u 12u(mobilep)">
      <input type="text" name="apellidoUsuario" required="required" placeholder="Apellidos" />
      </div>
                
        <div class="row uniform 50%">
        <div class="6u 12u(mobilep)">
  
  <?php
// Consultar la base de datos
$conn=mysqli_connect("localhost","root","","proyectoparkingcontrol");
$consulta_mysql='select * from tipodoc';
$resultado_consulta_mysql=mysqli_query($conn,$consulta_mysql);
 ?>
  <div class="6u 12u(mobilep)">
 <select name="tipodoc">
  </div><br>
  <?php
 while($lista=mysqli_fetch_assoc($resultado_consulta_mysql))
   echo "<option  value='".$lista["id"]."'>".$lista["nombre"]."</option>"; 
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
                    
</form>
</body>
</html>
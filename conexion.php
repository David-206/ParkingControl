 <SELECT name="idDocumento">
        <OPTION VALUE="Seleccione el Tipo de Documento">Seleccione el Tipo de Documento</OPTION>

        <?php
		  
					
// Consultar la base de datos
$conn=mysqli_connect("localhost","root","","proyectoparkingcontrol");
$consulta_mysql='select * from tipodocumento';
$resultado_consulta_mysql=mysqli_query($consulta_mysql,$conn);
 			   
				  while($lista=mysqli_fetch_assoc($resultado_consulta_mysql)){
   echo 'Obtenido: '.$lista["id"];        }    
   echo 'Obtenido: '.$lista[id];      
				  
            ?>
        </select>
        </div>
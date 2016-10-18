
				 <?php
$i=0;
	      
   function generarEstados(){  
  include ("conexionBdd.php");
   $ObjBD= new conexionBdd();
       
		   $consulta =  $ObjBD->muestraTodo();
		
echo "<select name='estado' id='estado' onChange='cargaContenido(this.id, document.comprar)'>";
        echo "<option value='-1'>Seleccione estado :)</option>";
		     foreach ($consulta as $key) {
            echo "<option value='".$key['nombre']."'>".$key['nombre']."</option>";
        }
        echo "</select>";
		}
 ?>
 
	
	

<html lang="es-US">
	<head>
		<title>Registrarse</title>
		 <meta charset="UTF-8">
		    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<script src="script_multiples_select.js"></script>
				 <script src="http://code.jquery.com/jquery-lastest.js"</script>
  
    <script src ="JavaScripts/validacionCompra.js"></script>
    
	</head>
	<body>

	
	<form name="ejemplo1" action="17-jquery-change-demo1.php" method="POST">
    <select name="color1">
   		<option value="0">Selecciona una opción</option>
		<option value="azul">Azul</option>
		<option value="rojo">Rojo</option>
	</select>
	<input type="text" name="valor1" size="40" value="Aquí saldrá el valor del select cuando cambie">
</form>
	

	
	
		<div id="formulario">
			<p>Datos De Registro</p>
			<form name="registro" method="POST" onsubmit="return validacioxcvv(document.registro)" action="JavaScripts/valid323132tro.js">
				<input type="email" class="text" id="email" name="email" tabindex="1" placeholder="Email" required><br>
				<input type="text" class="text" id="nombre" name="nombre" tabindex="2" placeholder="Nombre(s)" maxlength="30" required><br>
		
				<input type="password" class="text"  id="pass" name="pass" tabindex="7" minlength="8" maxlength="20" placeholder="Contraseña" required><br>
				<input type="password" class="text"  id="pass" name="pass2" tabindex="8" placeholder="Confirmar Contraseña" required><br>
										


					</div>
				<div id="demoIzq"><?php generarEstados(); ?></div>
			</div>
	<select disabled="disabled" name="asiento" id="asientos">
						<option value="-1">Seleccione asiento</option>
					</select>
				<input type="submit" id="enviar" name="login" tabindex="9" value="Registrarse">
			</form>


<p>Este segundo párrafo sí que contiene saltos <br/>
de <br/>
línea <br/>
<p>
<?php
echo "hola";
?>
<p>
<?php

echo "hola";
if(isset( $_POST['id_category']))
{
echo"hola";
$id_category = $_POST['id_category'];

	if($_POST['id_category'])
		echo "He recibido en el archivo.php: ".$_POST['id_category'];

		else
		echo "He recibido un campo vacio";
}
else
	echo "vale";
	?>
	<select name="subcategory" id="subcategory"></select>
	
	
	
<p>




			
			
			
		</div>
	</body>
</html>

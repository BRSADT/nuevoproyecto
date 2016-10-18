
<?php header("Content-Type: text/html;charset=utf-8"); ?>
<?php

function generaPaises()
{
	include 'conexion.php';
$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
	$consulta=mysqli_query($enlace,"SELECT id, nombre FROM estados");
mysqli_query($enlace,"SET NAMES 'utf8'");

	
	echo "<select name='paises' id='paises' onChange='cargaContenido(this.id)'>";
	echo "<option value='0'>Estado </option>";

	while($registro=mysqli_fetch_row($consulta))
	{
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	
	}
	
	echo "</select>";
	
}
?>



<head>

<script type="text/javascript" src="validacion_registro/validacionJ.js"></script>
<title>TACOrporation</title>
<link rel="stylesheet" type="text/css" href="select_dependientes.css">
<script type="text/javascript" src="select_dependientes.js"></script>



	
</head>


<body>
<p> ño</p>
<p> MÉXICO</p>

<?php
			session_start();?>
			<?php 	if(!isset($_SESSION['name'])): 
			
			?>

<form name="registrar" method="POST" onsubmit="return validacion()" action="envio_registro.php"></br>
		
		<input type="text" class="text" id="usuario" name="usuario" tabindex="4" placeholder="Usuario" minlength="5" maxlength="20" required><br>		<br>
				<input type="password" class="text"  id="pass" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un numero una Letra mayuscula una minuscula, y minimo 8 o más caracteres"  placeholder="Contraseña 1" required><br><br>
				
				<input type="password" class="text"  id="pass2" name="pass2" tabindex="8" placeholder="Confirmar Contraseña" required><br><br>
		
				<input type="text" class="text" id="nombre" name="nombre" tabindex="2" placeholder="Nombre(s)" maxlength="30" required><br><br>
				<input type="text" class="text" id="apellido" name="apellido" tabindex="3" placeholder="Apellido(s)" maxlength="30" required><br><br>
		<input type="email" class="text" id="email" name="email" tabindex="1" placeholder="Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-z]{2,3}$" required><br><br>
	
					
			<div id="demo" style="width:600px;">
				<div id="demoDer">
					<select disabled="disabled" name="estados" id="estados">
						<option value="0">Seleccionas opci&oacute;n...</option>
					</select>
				</div>
				<div id="demoIzq"><?php  generaPaises() ; ?></div>
			
			</div><br>
				<input type="text" class="text" id="calle" name="calle" tabindex="4" placeholder="Colonia-calle" minlength="5" maxlength="30" required><br><br>
				

<select  name="tarjeta" id="tarjeta">
						<option value="1">American Express</option>
						<option value="2">Visa</option>
						<option value="3">Master Card</option>
					</select>

			<input type="text" name="TarjetaN" id="TarjetaN" placeholder="Numero Tarjeta" pattern="^(?:5[1-9][0-9]{2}|222[1-9]|22[3-9][0-9]|2[3-6][0-9]{2}|27[01][0-9]|2720)[0-9]{12}$|^3[47][0-9]{13}$|^4[0-9]{12}(?:[0-9]{3})?$" required> 				
<input type="text" class="text" id="Titular" name="Titular" tabindex="2" placeholder="Titular" maxlength="30" required><br><br>			
			<input type="submit" value="Enviar">
			</form>
			
			<?php else: {
		echo "hola ";
		echo $_SESSION['name'];
		echo " ya estas  " ; 
		}
		
		?>
			<form action="../funciones/CerrarSesion.php" method="get" id="form1">
   <button type="submit">salir</button>
</form>
<?php endif;?>
</body>
</html>





			
			<html lang="es-US">
	<head>
		<title>Ingresa</title>

	</head>
	<body>
		<header>
		<?php
			session_start();?>
			<?php 	if(!isset($_SESSION['name'])): 
			
			?>
			<div id="formulario">
			<p>INGRESAR:</p>

<form name="registrar" method="POST"  action="ExistenciaUsuario.php"></br>
		
		<input type="text" class="text" id="usuario" name="usuario" tabindex="4" placeholder="Usuario" minlength="5" maxlength="20" required><br>		<br>
				<input type="password" class="text"  id="pass" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un numero una Letra mayuscula una minuscula, y minimo 8 o más caracteres"  placeholder="Contraseña 1" required><br><br>
				
							
				<input type="submit" value="Enviar">
			</form>
			</div>
		<?php else: {
		echo "hola ";
		echo $_SESSION['name'];
		echo " ya estas  " ; 
		}
			?>
		
		<form action="CerrarSesion.php" method="get" id="form1">
   <button type="submit">salir</button>
</form>
		<?php endif;?>
	</body>
</html>
			
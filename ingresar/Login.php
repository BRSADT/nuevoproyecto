

<form name="registrar" method="POST"  action="ExistenciaUsuario.php"></br>
		
		<input type="text" class="text" id="usuario" name="usuario" tabindex="4" placeholder="Usuario" minlength="5" maxlength="20" required><br>		<br>
				<input type="password" class="text"  id="pass" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un numero una Letra mayuscula una minuscula, y minimo 8 o más caracteres"  placeholder="Contraseña 1" required><br><br>
				
							
				<input type="submit" value="Enviar">
			</form>
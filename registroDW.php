<html lang="es-US">
	<head>
		<title>Registrarse</title>
		 <meta charset="UTF-8">
	
	</head>
	<body>
	
		<div id="formulario">
			<p>Datos De Registro</p>
			<form name="registro" method="POST" onsubmit="return validacioxcvv(document.registro)" action="JavaScripts/valid323132tro.js">
				<input type="email" class="text" id="email" name="email" tabindex="1" placeholder="Email" required><br>
				<input type="text" class="text" id="nombre" name="nombre" tabindex="2" placeholder="Nombre(s)" maxlength="30" required><br>
				<input type="text" class="text" id="apellido" name="apellido" tabindex="3" placeholder="Apellido(s)" maxlength="30" required><br>
				<input type="text" class="text" id="usuario" name="usuario" tabindex="4" placeholder="Usuario" minlength="8" maxlength="20" required><br>
				<script type="text/javascript">
				var hoy = new Date().toJSON().slice(0,10);
					if (Modernizr.inputtypes.date) {
						document.write('<p class="fecha">Fecha de nacimiento:</p>')
						document.write('<input type="date" class="text" id="fecha" name="fecha" tabindex="6" max="'+hoy+'" min="1905-01-01" required><br>');
					}
					else {
						('forms-ext', {types: 'date'});
						webshims.polyfill('forms forms-ext');
						document.write('<input type="date" name="fecha" class="text2" placeholder="Fecha de nacimiento" tabindex="6" auto;" required/>');
					} 
				</script>
				<input type="password" class="text"  id="pass" name="pass" tabindex="7" minlength="8" maxlength="20" placeholder="Contraseña" required><br>
				<input type="password" class="text"  id="pass" name="pass2" tabindex="8" placeholder="Confirmar Contraseña" required><br>
				

 


	   
	   



				
				<input type="submit" id="enviar" name="login" tabindex="9" value="Registrarse">
			</form>

<select name="Domicilio" form="carform">
   			
			
			 <?php
$i=0;
	
        include ("conexionBdd.php");
        $ObjBD= new conexionBdd();
        $res=$ObjBD->muestraTodo();
	
foreach ($res as $v)
        {
           ?>


                   <option>  <?php echo $v['nombre']?></option> 
    <?php 

$arr['nombre'][$i]=$v['nombre'];
 $i++;
} ?>

	  
	  

</select>     
			
<p>Domicilio</>
			
			
			
			
		</div>
	</body>
</html>

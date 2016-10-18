<?php

function generaPaises()
{
	
$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
mysqli_query($enlace,"SET NAMES 'utf8'");
	$consulta=mysqli_query($enlace,"SELECT id, nombre FROM estados");



	
	echo "<select name='paises' id='paises' onChange='cargaContenido(this.id)'>";
	echo "<option value='0'>Estado </option>";

	while($registro=mysqli_fetch_row($consulta))
	{
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	
	}
	
	echo "</select>";
	
}
?>
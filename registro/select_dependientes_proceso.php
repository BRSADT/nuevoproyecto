<?php
header('Content-Type: text/html; charset=ISO-8859-1');
// Array que vincula los IDs de los selects declarados en el HTML con el nombre de la tabla donde se encuentra su contenido
$listadoSelects=array(
"paises"=>"estados",
"estados"=>"municipios"
);

function validaSelect($selectDestino)
{
	// Se valida que el select enviado via GET exista
	global $listadoSelects;
	if(isset($listadoSelects[$selectDestino])) return true;
	else return false;
}



function validaOpcion($opcionSeleccionada)
{
	// Se valida que la opcion seleccionada por el usuario en el select tenga un valor numerico
	if(is_numeric($opcionSeleccionada)) return true;
	else return false;
}
if (isset($_GET["select"])) {
$selectDestino=$_GET["select"]; $opcionSeleccionada=$_GET["opcion"];



if(validaSelect($selectDestino) && validaOpcion($opcionSeleccionada))
{



	$tabla=$listadoSelects[$selectDestino];
	
include 'conexion.php';
$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
mysqli_query($enlace,"SET NAMES 'utf8'");

if (isset($opcionSeleccionada)) {
	$consulta=mysqli_query($enlace,"SELECT id, nombre FROM $tabla WHERE estado_id='$opcionSeleccionada'") or die(mysql_error());

		
	
	 echo "<select name='".$selectDestino."' id='".$selectDestino."' onChange='cargaContenido(this.id)'>";
	
	while($registro=mysqli_fetch_row($consulta))
	{
		// Convierto los caracteres conflictivos a sus entidades HTML correspondientes para su correcta visualizacion
		$registro[1]=htmlentities($registro[1]);
		// Imprimo las opciones del select
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	}			
	echo "</select>";
}}}

?>	 

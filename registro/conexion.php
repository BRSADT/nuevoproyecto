<?php

class BaseDeDatos {
function __construct()
{


$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
mysqli_query($enlace,"SET NAMES 'utf8'");
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


}


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


function insertarUsuario($Pass,$Usuario,$Nombre,$Apellido,$Email,$Admin,$estado,$municipio)
{
	$insert=mysqli_query($enlace,"INSERT INTO persona (Pass,Usuario,Nombre,Apellido,Email,Admin,estado,municipio) VALUES ($Edad,$Pass,$Usuario,$Nombre,$Apellido,$Email,$Admin,$estado,$municipio)");
mysqli_query($enlace,"SET NAMES 'utf8'");



	
}
}
?>



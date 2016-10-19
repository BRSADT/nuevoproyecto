<script>
function miFuncion()
{
window.history.back();

}



</script>

<?php

function verificarProducto($ID_Producto,$ID_Persona)
{

$verificar=0;

	$link = mysqli_connect("localhost", "root", "", "base_proyecto_dw");

/* verificar conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$consulta = "SELECT `Id_Producto`,`Id_Usuario` FROM `carrito` ";


	if ($sentencia = mysqli_prepare($link, $consulta)) {

    /* ejecutar la sentencia */
    mysqli_stmt_execute($sentencia);


    mysqli_stmt_bind_result($sentencia, $ID_Producto_S,$ID_Persona_S);

    /* obtener los valores */
    while (mysqli_stmt_fetch($sentencia)) {

	if($ID_Producto==$ID_Producto_S && $ID_Persona==$ID_Persona_S)
	$verificar=1;

    }

}
if($verificar==1)
  {

  return true;
  }

}












function insertarCarrito($ID_Producto,$ID_Persona,$Cantidad)
{

	$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
$STATEMENT="INSERT INTO carrito (Id_Producto,Id_Usuario,Cantidad) VALUES ('$ID_Producto','$ID_Persona','$Cantidad')";
mysqli_query($enlace,$STATEMENT);
mysqli_query($enlace,"SET NAMES 'utf8'");

}

function alterarCarrito($ID_Producto,$ID_Persona,$Cantidad)
{


	$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
$STATEMENT="UPDATE `base_proyecto_dw`.`carrito` SET `Cantidad` = '$Cantidad' WHERE `carrito`.`Id_Usuario` = '$ID_Persona' && `carrito`.`Id_Producto` = '$ID_Producto'";




mysqli_query($enlace,$STATEMENT);
mysqli_query($enlace,"SET NAMES 'utf8'");

	
	

}







if (isset($_POST["Nombre"])) {


$Nombre=$_POST["Nombre"];
$ID_Producto=$_POST["ID_Producto"];

$ID_Persona=$_POST["ID_Persona"];

$Cantidad=$_POST["cantidad"];



if(verificarProducto($ID_Producto,$ID_Persona)==true)

{

//alter:table
	alterarCarrito($ID_Producto,$ID_Persona,$Cantidad);

echo ('<script>


miFuncion()
</script>');


	}
else
{
//insert:table
insertarCarrito($ID_Producto,$ID_Persona,$Cantidad);

echo ('<script>


miFuncion()
</script>');

}



}

?>

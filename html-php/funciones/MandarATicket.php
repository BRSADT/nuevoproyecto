<script>
function miFuncion()
{
window.history.back();
}



</script>
<?php







function insertarTicket($fecha,$date_ent,$Compra,$Total)
{

	$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
$STATEMENT="INSERT INTO ticket (Compra,Total,Fecha_compra,Fecha_entrega) VALUES ('$Compra','$Total','$fecha','$date_ent')";
mysqli_query($enlace,$STATEMENT);
mysqli_query($enlace,"SET NAMES 'utf8'");

	$consulta=mysqli_query($enlace,"SELECT max(ticket.Id_ticket) as Id_ticket from ticket  ");


	while($registro=mysqli_fetch_array($consulta, MYSQLI_ASSOC))
	{
	$id_Ticket=$registro['Id_ticket'];
	}
	 insertarcompra($id_Ticket);


}




function insertarcompra($id_Ticket)
{
session_start();
 $idP=$_SESSION['ID_P'];


	$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");




	$consulta=mysqli_query($enlace,"SELECT producto.Imagen,producto.Id_Producto,producto.Nombre,producto.Descripcion,producto.Precio,carrito.Cantidad FROM `producto` inner join carrito on carrito.Id_Producto=producto.Id_Producto where carrito.ID_Usuario='$idP'");




	while($registro=mysqli_fetch_array($consulta, MYSQLI_ASSOC))
	{
$ID_PR=$registro['Id_Producto'];


$STATEMEN="INSERT INTO compra (Id_Ticket,Id_Persona,Id_producto) VALUES ('$id_Ticket','$idP','$ID_PR')";
mysqli_query($enlace,$STATEMEN);
actualizarBDD($id_Ticket,$idP);

}



}






function actualizarBDD($id_Ticket,$idP)
{

	$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");


	$consul=mysqli_query($enlace,"SELECT carrito.Id_Producto,carrito.Cantidad, producto.Stock FROM `carrito` inner join producto on producto.Id_Producto=carrito.Id_Producto where carrito.Id_Usuario='$idP'");

	while ($fila=mysqli_fetch_row($consul))
	{
	//id producto
	 $fila[0];

	//cantidad
	 $fila[1];
	//stock
		$fila[2];


$CantidadActual=$fila[2]-$fila[1];

$IDPRODUCTO=$fila[0];
$STAT="UPDATE `base_proyecto_dw`.`producto` SET `Stock` = '$CantidadActual' where producto.Id_Producto = '$IDPRODUCTO'";

mysqli_query($enlace,$STAT);
		}



eliminarCarrito($idP);

}


function eliminarCarrito ($idP){

$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");

$STAT="DELETE FROM carrito where carrito.Id_Usuario = '$idP'";

mysqli_query($enlace,$STAT);
echo ('<script>


miFuncion()
</script>');



}



/*
function insertarcompra($id_Ticket)
{
session_start();
 $idP=$_SESSION['ID_P'];


	$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");




	$consulta=mysqli_query($enlace,"SELECT producto.Imagen,producto.Id_Producto,producto.Nombre,producto.Descripcion,producto.Precio,carrito.Cantidad FROM `producto` inner join carrito on carrito.Id_Producto=producto.Id_Producto where carrito.ID_Usuario='$idP'");




	while($registro=mysqli_fetch_array($consulta, MYSQLI_ASSOC))
	{
$ID_PR=$registro['Id_Producto'];


$STATEMEN="INSERT INTO compra (Id_Ticket,Id_Persona,Id_producto) VALUES ('$id_Ticket','$idP','$ID_PR')";
mysqli_query($enlace,$STATEMEN);


}



}

*/















if (isset($_POST["fecha"])) {


$fecha=$_POST["fecha"];

$date=date_create("$fecha");
date_add($date,date_interval_create_from_date_string("8 days"));
$date_ent=date_format($date,"Y-m-d");

$Total=$_POST["Total"];
$Compra=$_POST["Compra"];



insertarTicket($fecha,$date_ent,$Compra,$Total);

}



?>

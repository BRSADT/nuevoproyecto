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

	$consulta=mysqli_query($enlace,"SELECT ticket.Id_ticket from ticket where ticket.Compra='$Compra' && ticket.Total='$Total'&& ticket.Fecha_compra='$fecha'&& ticket.Fecha_entrega='$date_ent' ");

	
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
//actualizarBDD($id_Ticket);

}



}





/*
function actualizarBDD($id_Ticket)
{

	$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");


	$consulta=mysqli_query($enlace,"SELECT `Id_Compra`,`Id_Producto` FROM `compra` where `Id_Ticket`='$id_Ticket'");

	
	while($registro=mysqli_fetch_array($consulta, MYSQLI_ASSOC))
	{ 
	$id_Ticket=$registro['Id_ticket'];
	}
	 insertarcompra($id_Ticket);


}


*/

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

















if (isset($_POST["fecha"])) {


$fecha=$_POST["fecha"];
echo $fecha;
echo "-->";
$date=date_create("$fecha");
date_add($date,date_interval_create_from_date_string("8 days"));
$date_ent=date_format($date,"Y-m-d");
echo $date_ent ;

echo "-->";
$Total=$_POST["Total"];
$Compra=$_POST["Compra"];
echo $Total ;

echo "-->";
echo $Compra ;

echo "-->";


insertarTicket($fecha,$date_ent,$Compra,$Total);

}



?>

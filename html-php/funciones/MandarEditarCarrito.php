<script>
function miFuncion()
{
window.history.back();
}



</script>

<?php

if (isset($_POST["ID_Producto2"])) {



$ID_Producto=$_POST["ID_Producto2"];
$cantidad=$_POST["cantidad"];

$ID_Persona=$_POST["ID_Persona"];





$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
$STATEMENT="UPDATE `base_proyecto_dw`.`carrito` SET `Cantidad` = '$cantidad' where Id_Producto='$ID_Producto' && `carrito`.`Id_Usuario` = '$ID_Persona' ";





mysqli_query($enlace,$STATEMENT);
mysqli_query($enlace,"SET NAMES 'utf8'");


echo ('<script>


miFuncion()
location.reload();
</script>');





}

?>
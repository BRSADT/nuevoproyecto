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





$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
$STATEMENT="UPDATE `base_proyecto_dw`.`producto` SET `Stock` = '$cantidad' where Id_Producto='$ID_Producto'";





mysqli_query($enlace,$STATEMENT);
mysqli_query($enlace,"SET NAMES 'utf8'");


echo ('<script>


miFuncion()
location.reload();
</script>');





}

?>
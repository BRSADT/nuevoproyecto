<script>
function miFuncion()
{
window.history.back();

}



</script>

<?php

if (isset($_POST["ID_Producto2"])) {



$ID_Producto=$_POST["ID_Producto2"];







$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
$STATEMENT=" Delete from  producto where Id_Producto='$ID_Producto'";




mysqli_query($enlace,$STATEMENT);
mysqli_query($enlace,"SET NAMES 'utf8'");


echo ('<script>


miFuncion()
location.reload();
</script>');




}

?>
<?php
function MostrarProductosTecnologia()
{
	$count=0;
$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
mysqli_query($enlace,"SET NAMES 'utf8'");

	$consulta=mysqli_query($enlace,"SELECT `producto`.`Id_Producto`,`Nombre`,`Descripcion`,`Stock`,`Precio`,`Imagen` FROM `producto` where `Id_Departamento`=1");




	while($registro=mysqli_fetch_array($consulta, MYSQLI_ASSOC))
	{



	echo '  <div class="col-xs-18 col-sm-6 col-md-3">


	
	
   <div class="thumbnail">
   <img src="../images/'.$registro['Imagen'].'" alt="" style="height: 300px;width: 500px;" > </img>
        <div class="caption">
          <h4>'.$registro['Nombre'].'</h4>
          <h3>$'.$registro['Precio'].'</h3>
         <p style="font-size: 10px;"> '.$registro['Descripcion'].'</p> ' ;

		 if(!isset($_SESSION['name'])): echo ' 	

		 
		 <a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#login-modal" role="button">
<span class="glyphicon glyphicon-plus-sign"></span>
<span class="glyphicon glyphicon-shopping-cart"></span></a>';

 else: 
			 if(($_SESSION['Administrador'])==1) {echo ' 	
  <form name="Seleccion2" method="POST" action="../funciones/MandarEliminar.php">
  
<input type="hidden" name="ID_Producto2" value='.$registro['Id_Producto'].'>

  <button type="submit"  class="btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>

</form>


  <form name="Seleccion3" method="POST" action="../funciones/MandarEditar.php">
  
<input type="hidden" name="ID_Producto2" value='.$registro['Id_Producto'].'>
<input type="number" style="width:80px;" class="cantidad" id="cantidad" name="cantidad" tabindex="4"  min="1"  placeholder="'.$registro['Stock'].'" required></input>

  <button type="submit"  class="btn btn-primary">
                                      <span class="glyphicon glyphicon-refresh"></span>
                                </button>

</form>









';}								
echo '								

 
		 
		 
		
<form name="Seleccion" method="POST" action="../funciones/MandarAcarrito.php">
<input type="hidden" name="Nombre" value='.$registro['Nombre'].'>
<input type="hidden" name="ID_Producto" value='.$registro['Id_Producto'].'>
<input type="hidden" name="ID_Persona" value='.$_SESSION['ID_P'].'>
<input type="number" style="width:80px;" class="cantidad" id="cantidad" name="cantidad" tabindex="4"  min="1" max='.$registro['Stock'].' placeholder="Cant" required></input>
  
  
  
								
<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-shopping-cart"></span></button>


</form>';
 endif;

	echo '

	 </div>
	 </div>

		 </div>';








	$count++;
	}

	echo "</select>";

}
?>

<?php
function MostrarProductosComestibles()
{
	$count=0;
$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
mysqli_query($enlace,"SET NAMES 'utf8'");

	$consulta=mysqli_query($enlace,"SELECT `producto`.`Id_Producto`,`Nombre`,`Descripcion`,`Stock`,`Precio`,`Imagen` FROM `producto` where `Id_Departamento`=2");




	while($registro=mysqli_fetch_array($consulta, MYSQLI_ASSOC))
	{

		echo '  <div class="col-xs-18 col-sm-6 col-md-3">


   <div class="thumbnail">
 <img src="../images/'.$registro['Imagen'].'" alt="" style="height: 300px;width: 500px;" > </img>
        <div class="caption">
          <h4>'.$registro['Nombre'].'</h4>
          <h3>$'.$registro['Precio'].'</h3>
         <p style="font-size: 10px;"> '.$registro['Descripcion'].'</p> ' ;

		 if(!isset($_SESSION['name'])): echo '
<a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#login-modal" role="button">
<span class="glyphicon glyphicon-plus-sign"></span>
<span class="glyphicon glyphicon-shopping-cart"></span></a>';





 else: 
			 if(($_SESSION['Administrador'])==1) {echo ' 	
  <form name="Seleccion2" method="POST" action="../funciones/MandarEliminar.php">
  
<input type="hidden" name="ID_Producto2" value='.$registro['Id_Producto'].'>

  <button type="submit"  class="btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>

</form>


  <form name="Seleccion3" method="POST" action="../funciones/MandarEditar.php">
  
<input type="hidden" name="ID_Producto2" value='.$registro['Id_Producto'].'>
<input type="number" style="width:80px;" class="cantidad" id="cantidad" name="cantidad" tabindex="4"  min="1"  placeholder="'.$registro['Stock'].'" required></input>

  <button type="submit"  class="btn btn-primary">
                                      <span class="glyphicon glyphicon-refresh"></span>
                                </button>

</form>









';}		 echo '
<form name="Seleccion" method="POST" action="../funciones/MandarAcarrito.php">
<input type="hidden" name="Nombre" value='.$registro['Nombre'].'>
<input type="hidden" name="ID_Producto" value='.$registro['Id_Producto'].'>
<input type="hidden" name="ID_Persona" value='.$_SESSION['ID_P'].'>
<input type="number" style="width:80px;" class="cantidad" id="cantidad" name="cantidad" tabindex="4" min="0" max='.$registro['Stock'].' placeholder="Cant" required><br><br></input>
<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-shopping-cart"></span></button>


</form>';
 endif;



	echo '

	 </div>
	 </div>

		 </div>';








	$count++;
	}

	echo "</select>";

}
?>

<?php
function MostrarProductosOferta()
{
	$count=0;
$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
mysqli_query($enlace,"SET NAMES 'utf8'");

	$consulta=mysqli_query($enlace,"SELECT `producto`.`Id_Producto`,`Nombre`,`Descripcion`,`Stock`,`Precio`,`Imagen` FROM `producto` where producto.Descuento>0");



	while($registro=mysqli_fetch_array($consulta, MYSQLI_ASSOC))
	{

		echo '  <div class="col-xs-18 col-sm-6 col-md-3">


   <div class="thumbnail">

   <img src="../images/'.$registro['Imagen'].'" alt="" style="height: 300px;width: 500px;" > </img>
        <div class="caption">

		<h4>'.$registro['Nombre'].'</h4>
          <h3>$'.$registro['Precio'].'</h3>
         <p style="font-size: 10px;"> '.$registro['Descripcion'].'</p> ';

		 if(!isset($_SESSION['name'])): echo '
<a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#login-modal" role="button">
<span class="glyphicon glyphicon-plus-sign"></span>
<span class="glyphicon glyphicon-shopping-cart"></span></a>';

 else: 
			 if(($_SESSION['Administrador'])==1) {echo ' 	
  <form name="Seleccion2" method="POST" action="../funciones/MandarEliminar.php">
  
<input type="hidden" name="ID_Producto2" value='.$registro['Id_Producto'].'>

  <button type="submit"  class="btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>

</form>


  <form name="Seleccion3" method="POST" action="../funciones/MandarEditar.php">
  
<input type="hidden" name="ID_Producto2" value='.$registro['Id_Producto'].'>
<input type="number" style="width:80px;" class="cantidad" id="cantidad" name="cantidad" tabindex="4"  min="1"  placeholder="'.$registro['Stock'].'" required></input>

  <button type="submit"  class="btn btn-primary">
                                      <span class="glyphicon glyphicon-refresh"></span>
                                </button>

</form>









';}		 echo '
<form name="Seleccion" method="POST" action="../funciones/MandarAcarrito.php">
<input type="hidden" name="Nombre" value='.$registro['Nombre'].'>
<input type="hidden" name="ID_Producto" value='.$registro['Id_Producto'].'>
<input type="hidden" name="ID_Persona" value='.$_SESSION['ID_P'].'>
<input type="number" style="width:80px;" class="cantidad" id="cantidad" name="cantidad" tabindex="4" min="0" max='.$registro['Stock'].' placeholder="Cant" required><br><br></input>
<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-shopping-cart"></span></button>


</form>';
 endif;


	echo '

	 </div>
	 </div>

		 </div>';








	$count++;
	}

	echo "</select>";

}
?>

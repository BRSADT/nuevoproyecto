<?php
function MostrarProductosTecnologia()
{
	$count=0;
$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
mysqli_query($enlace,"SET NAMES 'utf8'");
	$consulta=mysqli_query($enlace,"SELECT `Nombre`,`Descripcion`,`Stock`,`Precio`,`Imagen` FROM `producto` where `Id_Departamento`=1");
	

	while($registro=mysqli_fetch_array($consulta, MYSQL_ASSOC))
	{
		
		echo '  <div class="col-xs-18 col-sm-6 col-md-3">
 

   <div class="thumbnail">	
   <img src="../images/plantilla.png" alt=""> </img>
        <div class="caption">
          <h4>'.$registro['Nombre'].'</h4>
          <h3>$'.$registro['Precio'].'</h3>
         <p> '.$registro['Descripcion'].'</p> ' ; 

		 if(!isset($_SESSION['name'])): echo '
<a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#login-modal" role="button">
<span class="glyphicon glyphicon-plus-sign"></span>
<span class="glyphicon glyphicon-shopping-cart"></span></a>';
 else: echo ' <a href="#" class="btn btn-info btn-xs"  role="button"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-shopping-cart"></span></a>
	
<input type="number" style="width:80px;" class="cantidad" id="cantidad" name="cantidad" tabindex="4" placeholder="Cant" required><br><br></input>';
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
	$consulta=mysqli_query($enlace,"SELECT `Nombre`,`Descripcion`,`Stock`,`Precio`,`Imagen` FROM `producto` where `Id_Departamento`=2");
	

	while($registro=mysqli_fetch_array($consulta, MYSQL_ASSOC))
	{
		
		echo '  <div class="col-xs-18 col-sm-6 col-md-3">
 

   <div class="thumbnail">	
   <img src="../images/plantilla.png" alt=""> </img>
        <div class="caption">
          <h4>'.$registro['Nombre'].'</h4>
          <h3>$'.$registro['Precio'].'</h3>
         <p> '.$registro['Descripcion'].'</p> ' ; 

		 if(!isset($_SESSION['name'])): echo '
<a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#login-modal" role="button">
<span class="glyphicon glyphicon-plus-sign"></span>
<span class="glyphicon glyphicon-shopping-cart"></span></a>';
 else: echo ' <a href="#" class="btn btn-info btn-xs"  role="button"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-shopping-cart"></span></a>
	
<input type="number" style="width:80px;" class="cantidad" id="cantidad" name="cantidad" tabindex="4" placeholder="Cant" required><br><br></input>';
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
	$consulta=mysqli_query($enlace,"SELECT `Nombre`,`Descripcion`,`Stock`,`Precio`,`Imagen` FROM `producto` where producto.Descuento>0");
	

	while($registro=mysqli_fetch_array($consulta, MYSQL_ASSOC))
	{
		
		echo '  <div class="col-xs-18 col-sm-6 col-md-3">
 

   <div class="thumbnail">	
   <img src="../images/plantilla.png" alt=""> </img>
        <div class="caption">
          <h4>'.$registro['Nombre'].'</h4>
          <h3>$'.$registro['Precio'].'</h3>
         <p> '.$registro['Descripcion'].'</p> ' ; 

		 if(!isset($_SESSION['name'])): echo '
<a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#login-modal" role="button">
<span class="glyphicon glyphicon-plus-sign"></span>
<span class="glyphicon glyphicon-shopping-cart"></span></a>';
 else: echo ' <a href="#" class="btn btn-info btn-xs"  role="button"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-shopping-cart"></span></a>
	
<input type="number" style="width:80px;" class="cantidad" id="cantidad" name="cantidad" tabindex="4" placeholder="Cant" required><br><br></input>';
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
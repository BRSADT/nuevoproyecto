<?php
function MostrarProductosCarrito()
{
$totalsinDesc=0;
$Descuento=0;
$TotalR=0;
	$count=0;
$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
mysqli_query($enlace,"SET NAMES 'utf8'");


$ID_P=$_SESSION['ID_P'];


	$consulta=mysqli_query($enlace,"SELECT producto.Stock,producto.Id_Producto,producto.Imagen,producto.Nombre,producto.Descripcion,producto.Precio,carrito.Cantidad FROM `producto` inner join carrito on carrito.Id_Producto=producto.Id_Producto where carrito.ID_Usuario='$ID_P'");




	while($registro=mysqli_fetch_array($consulta, MYSQLI_ASSOC))
	{ $totalP=0;
	if($registro['Cantidad']>0){
	echo '
	 <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th class="text-center">Precio c/u</th>
                                <th class="text-center">Total</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-md-6">
                                <div class="media">
                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../images/'.$registro['Imagen'].'" style="width: 72px; height: 72px;"> </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">'.$registro['Nombre'].'</h4>
                                        <span>'.$registro['Descripcion'].' </span><span class="text-warning"><strong></strong></span>
                                    </div>
                                </div></td>
                                <td class="col-md-1" style="text-align: center">
                                <input type="email" class="form-control" id="exampleInputEmail1"  value="'.$registro['Cantidad'].'"readonly>
                                </td>
                                <td class="col-md-1 text-center"><strong>$'.$registro['Precio'].'</strong></td>' ;
								$totalP=$registro['Cantidad']*$registro['Precio'];
								$totalsinDesc=$totalP+$totalsinDesc;
								echo'
                                <td class="col-md-1 text-center"><strong>'.$totalP.'</strong></td>
                                <td class="col-md-1">
								
								.
								
								
								
								
                               <form name="Seleccion3" method="POST" action="../funciones/MandarEditarCarrito.php">
  
<input type="hidden" name="ID_Producto2" value='.$registro['Id_Producto'].'>
<input type="number" style="width:80px;" class="cantidad" id="cantidad" name="cantidad" tabindex="4"  min="1" max='.$registro['Stock'].'  placeholder="'.$registro['Cantidad'].'" required></input>
<input type="hidden" name="ID_Persona" value='.$_SESSION['ID_P'].'>
  <button type="submit"  class="btn btn-primary">
                                      <span class="glyphicon glyphicon-refresh"></span>
                                </button>
                                
		</form>						
								
						                              <form name="Seleccion3" method="POST" action="../funciones/MandarEliminarCarrito.php">
  
<input type="hidden" name="ID_Producto2" value='.$registro['Id_Producto'].'>
<input type="hidden" name="ID_Persona" value='.$_SESSION['ID_P'].'>
  <button type="submit"   class="btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span>
                                     
                                </button>
																
			</form>
					
								
								
                            </tr>
							
	';}
	$count++;
	}
						echo'	
                            <tr>
                                <td>   </td>
                                <td>   </td>
                                <td>   </td>
                                <td><h5>Subtotal</h5></td>
                                <td class="text-right"><h5><strong>'.$totalsinDesc.'</strong></h5></td>
                            </tr>
                            <tr>
                                <td>   </td>
                                <td>   </td>
                                <td>   </td>
								';
								$TotalR=$totalsinDesc;
								
								if($totalsinDesc >=  200 and $totalsinDesc<500)
								{
								$Descuento=$totalsinDesc*.1;
								$TotalR=$totalsinDesc-$Descuento;
								}
								
								if($totalsinDesc >=  500 and $totalsinDesc<1000)
								{
								$Descuento=$totalsinDesc*.2;
								$TotalR=$totalsinDesc-$Descuento;
								}
								
								if($totalsinDesc >=  1000 and $totalsinDesc<5000)
								{
								$Descuento=$totalsinDesc*.3;
								$TotalR=$totalsinDesc-$Descuento;
								}
								
								if($totalsinDesc >=  5000)
								{
								$Descuento=$totalsinDesc*.5;
								$TotalR=$totalsinDesc-$Descuento;
								}
								
								echo'
                                <td><h5>Descuento</h5></td>
                                <td class="text-right"><h5><strong>'.$Descuento.'</strong></h5></td>
                            </tr>
                            <tr>
                                <td>   </td>
                                <td>   </td>
                                <td>   </td>
                                <td><h3>Total</h3></td>
                                <td class="text-right"><h3><strong>'.$TotalR.'</strong></h3></td>
                            </tr>
                            <tr>
                              <td>   </td>
                              <td>   </td>
                              <td>   </td>
    </tr>


<form name="Compra" method="POST" action="../funciones/MandarATicket.php">
<input type="hidden" name="Compra" value='.$totalsinDesc.'>
<input type="hidden" name="Total" value='.$TotalR.'>
<input type="hidden" name="ID_Persona" value='.$_SESSION['ID_P'].'>
							<td>
                              <input type="date" class="text" id="fecha" name="fecha" tabindex="6" max="2050-10-18" min="2016-10-18" required></td>
                          
                              <td>


							  <a href="Index-index.php">

								<button type="button" class="btn btn-default">

                                  <span class="glyphicon glyphicon-shopping-cart"></span> Seguir comprando
								  

                              </button></a></td>
                              <td>
                              <button type="submit" class="btn btn-success">
                                  Comprar <span class="glyphicon glyphicon-play"></span>
                              </button></td>


</form>;


							  </tr>

						  </tbody>
                  </table>
              </div>
	';
	
	


}
?>
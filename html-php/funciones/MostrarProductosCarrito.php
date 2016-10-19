<?php
function MostrarProductosCarrito()
{

$totalsinDesc=0;
	$count=0;
$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
mysqli_query($enlace,"SET NAMES 'utf8'");


$ID_P=$_SESSION['ID_P'];


	$consulta=mysqli_query($enlace,"SELECT producto.Imagen,producto.Nombre,producto.Descripcion,producto.Precio,carrito.Cantidad FROM `producto` inner join carrito on carrito.Id_Producto=producto.Id_Producto where carrito.ID_Usuario='$ID_P'");




	while($registro=mysqli_fetch_array($consulta, MYSQLI_ASSOC))
	{ $totalP=0;
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
                                <input type="email" class="form-control" id="exampleInputEmail1" value="'.$registro['Cantidad'].'">
                                </td>
                                <td class="col-md-1 text-center"><strong>$'.$registro['Precio'].'</strong></td>' ;
								$totalP=$registro['Cantidad']*$registro['Precio'];
								$totalsinDesc=$totalP+$totalsinDesc;
								echo'
                                <td class="col-md-1 text-center"><strong>'.$totalP.'</strong></td>
                                <td class="col-md-1">
                                  <button type="button" class="btn btn-primary">
                                      <span class="glyphicon glyphicon-refresh"></span>
                                  </button>
                                <button type="button" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button></td>

                            </tr>
							
	';
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
                                <td><h5>Descuento</h5></td>
                                <td class="text-right"><h5><strong>$6.94</strong></h5></td>
                            </tr>
                            <tr>
                                <td>   </td>
                                <td>   </td>
                                <td>   </td>
                                <td><h3>Total</h3></td>
                                <td class="text-right"><h3><strong>$31.53</strong></h3></td>
                            </tr>
                            <tr>
                              <td>   </td>
                              <td>   </td>
                              <td>   </td>
                              <td>
                                <a href="Index-index.php">
                              <button type="button" class="btn btn-default">

                                  <span class="glyphicon glyphicon-shopping-cart"></span> Seguir comprando

                              </button></a></td>
                              <td>
                              <button type="button" class="btn btn-success">
                                  Comprar <span class="glyphicon glyphicon-play"></span>
                              </button></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
	';
	
	


}
?>
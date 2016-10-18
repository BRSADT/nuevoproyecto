<!DOCTYPE html>
<ntml lang="es">

  <head>
    <Title>Inicio</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/fuentes.css">
  </head>
<body>

<header>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Barra-Navegacion">
          <span class="sr-only">
            Desplegar / Ocultar Menu
          </span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">TACOrporation</a>
        
		
		
		<?php
			session_start();?>
			<?php 	if(!isset($_SESSION['name'])): 
			
			?>
		<a href="#" class="navbar-brand" data-toggle="modal" data-target="#login-modal">Iniciar sesion</a>
        <a href="#" class="navbar-brand" data-toggle="modal" data-target="#login-modal2"><span class="glyphicon glyphicon-shopping-cart"></a>
		<?php else: {	?>
		<a href="#" class="navbar-brand" ><?php 	echo $_SESSION['name'];?>  </a>
        <a href="#" class="navbar-brand" ><?php 	echo "Carrito" ?></a>
	<?php
		}
			?>
		
			<?php endif;?>
		
      </div>
      <div class="collapse navbar-collapse" id="Barra-Navegacion">
        <ul class="nav navbar-nav">
          <li><a href="#"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"> Productos <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#"><span class="glyphicon glyphicon-phone"></span> Electronica</a></li>
              <li class="divider"></li>
              <li><a href="#"><span class="glyphicon glyphicon-apple"></span> Comestibles</a></li>
              <li class="divider"></li>
              <li><a href="#"><span class="glyphicon glyphicon-tags"></span> Ofertas</a></li>
              <li class="divider"></li>

            </ul>
          </li>

          <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Contacto</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-sunglasses"></span> Acerca de nosotros</a></li>
        
		<?php 	if(!isset($_SESSION['name'])): 
			
			?>
		<li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
        <?php else: {	?>
		<li><a href="../../funciones/CerrarSesion.php" >Logout</a></li>
		<?php
		}
			?>
			<?php endif;?>
			
			
		</ul>
      </div>
    </div>
  </nav>

</header>

<br><br>


<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				
				<div class="loginmodal-container">
					<h1>Iniciar sesion</h1><br>
				  
				  
				  
				 <form name="registrar" method="POST"  action="../../funciones/ExistenciaUsuario.php"></br>
		
		<input type="text" class="text" id="usuario" name="usuario" tabindex="4" placeholder="Usuario" minlength="5" maxlength="20" required><br>		<br>
				<input type="password" class="text"  id="pass" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un numero una Letra mayuscula una minuscula, y minimo 8 o más caracteres"  placeholder="Contraseña 1" required><br><br>

					<input type="submit" name="login" class="login loginmodal-submit" value="Iniciar sesion">
				  </form>

				  
				  
				  
				  <div class="login-help">
					<a href="#" data-toggle="modal" data-target="#login-modal2">Registrar una nueva cuenta</a>
				  </div>
				</div>
				
				
			</div>
		  </div>

      <div class="modal fade" id="login-modal2" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
          	  <div class="modal-dialog">
      				<div class="loginmodal-container">
      					<h1>Registrar una nueva cuenta</h1><br>
      				  <form>
      					<input type="text" name="user" placeholder="Username">
      					<input type="password" name="pass" placeholder="Password">
      					<input type="submit" name="login" class="login loginmodal-submit" value="Registrarse">
      				  </form>
      				</div>
      			</div>
      		  </div>

      <div id="carousel-1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-1" data-slide-to="1" ></li>
          <li data-target="#carousel-1" data-slide-to="2" ></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="../images/prueba1.jpg" class="img-responsive" alt="" width="100%"/>
            <div class="carousel-caption">
              <h3>Siempre lo mas fresco</h3>
              <p>
                En TACOrporation nos preocupamos por que tus alimentos lleguen frescos a tu cocina.
              </p>

            </div>
          </div>
          <div class="item">
            <img src="../images/prueba2.jpg" class="img-responsive" alt="" width="100%"/>
            <div class="carousel-caption">
              <h3>Descuentos todo el año</h3>
              <p>
                Consideramos importante siempre dar la mejor calidad al mejor precio para tu disfrute
              </p>

            </div>
          </div>
          <div class="item">
            <img src="../images/prueba3.jpg" class="img-responsive" alt="" width="100%"/>
            <div class="carousel-caption">
              <h3>Atencion especializada</h3>
              <p>
                Nuestra atencion a clientes se especializa en brindarte el mejor servicio.
              </p>

            </div>
          </div>
        </div>

        <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>

      </div>

      <section class="jumbotron jumbotron1-index">
        <div class="container">
          <h1>Destacado</h1>
          <div class="container" id="tourpackages-carousel">

<div class="row">

  <div class="col-xs-18 col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="http://placehold.it/500x300" alt="">
        <div class="caption">
          <h2>PRODUCTO</h2>
          <h2>PRECIO</h2>
          <p>DESCRIPCION BIEN PINSHE SHIDORINA ALV</p>
          <a href="#" class="btn btn-info btn-xs" role="button"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-shopping-cart"></span></a>
      </div>
    </div>
  </div>

</div><!-- End row -->

</div><!-- End container -->
        </div>
      </section>



      <footer class="navbar-default navbar-absolute-bottom">
        <div class="container-fluid">
          <span>TACOrporation - 7A1</span>
          <hr>
          <span>Ponganos 100</span>
        </div>
      </footer>

</body>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</html>

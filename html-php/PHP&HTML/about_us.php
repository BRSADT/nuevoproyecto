
<?php
header("Content-Type: text/html;charset=utf-8");
include("../../html-php/funciones/GeneraEstado.php");
?>

<br>





<!DOCTYPE html>
<ntml lang="es">

    <head>
        <Title>Inicio</title>

        <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/fuentes.css">
        <script type="text/javascript" src="../../html-php/js/select_dependientes.js"></script>

        <script type="text/javascript" src="../../html-php/js/validacionJ.js"></script>
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



                        <?php session_start(); ?>
                        <?php if (!isset($_SESSION['name'])):
                            ?>
                            <a href="#" class="navbar-brand" data-toggle="modal" data-target="#login-modal">Iniciar sesion</a>
                            <a href="#" class="navbar-brand" data-toggle="modal" data-target="#login-modal2">Registrarse</a>
<?php else: { ?>
                                <a href="#" class="navbar-brand" ><?php echo $_SESSION['name']; ?>  </a>
                                <a href="carrito.php" class="navbar-brand" ><span class="glyphicon glyphicon-shopping-cart"><span>Carrito</span></a>
        <?php
    }
    ?>

                        <?php endif; ?>

                    </div>
                    <div class="collapse navbar-collapse" id="Barra-Navegacion">
                        <ul class="nav navbar-nav">
                            <li><a href="Index-index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"> Productos <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="Tecnologia.php"><span class="glyphicon glyphicon-phone"></span> Electronica</a></li>
                                    <li class="divider"></li>
                                    <li><a href="Comestibles.php"><span class="glyphicon glyphicon-apple"></span> Comestibles</a></li>
                                    <li class="divider"></li>
                                    <li><a href="Ofertas.php"><span class="glyphicon glyphicon-tags"></span> Ofertas</a></li>
                                    <li class="divider"></li>

                                </ul>
                            </li>

                            <li><a href="#" data-toggle="modal" data-target="#contacto"><span class="glyphicon glyphicon-envelope"></span> Contacto</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-sunglasses"></span> Acerca de nosotros</a></li>

<?php if (!isset($_SESSION['name'])):
    ?>
                                <li><a href="#" data-toggle="modal" data-target="#login-modal">      </a></li>
                            <?php else: { ?>
                                    <li><a href="../../html-php/funciones/CerrarSesion.php" >Logout</a></li>
                                    <?php
                                }
                                ?>
                            <?php endif; ?>


                        </ul>
                    </div>
                </div>
            </nav>

        </header>

        <br>


        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">

                <div class="loginmodal-container">
                    <h1>Iniciar sesion</h1><br>



                    <form name="ingresar" method="POST"  action="../../html-php/funciones/ExistenciaUsuario.php"></br>

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





                    <form name="registrar" method="POST" onsubmit="return validacion()" action="../../html-php/funciones/envio_registro.php">

                        <input type="text" class="text" id="usuario" name="usuario" tabindex="4" placeholder="Usuario" minlength="5" maxlength="20" required>

                        <input type="password" class="text"  id="pass" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un numero una Letra mayuscula una minuscula, y minimo 8 o más caracteres"  placeholder="Contraseña " required>

                        <input type="password" class="text"  id="pass2" name="pass2" tabindex="8" placeholder="Confirmar Contraseña" required>

                        <input type="text" class="text" id="nombre" name="nombre" tabindex="2" placeholder="Nombre(s)" maxlength="30" required>


                        <input type="text" class="text" id="apellido" name="apellido" tabindex="3" placeholder="Apellido(s)" maxlength="30" required>



                        <input type="email" class="text"  style='margin-top:10px;' id="email" name="email" tabindex="1" placeholder="Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-z]{2,3}$" required><br><br>







                        <div id="demo" style="width:600px;">
                            <div id="demoIzq"><?php generaPaises(); ?></div>
                            <div id="demoDer">
                                <select disabled="disabled" name="estados" id="estados">
                                    <option value="0">Seleccionas opci&oacute;n...</option>
                                </select>
                            </div>




                        </div>

                        <input type="text" class="text" id="calle" name="calle" tabindex="4" placeholder="Colonia-calle" minlength="5" maxlength="30" required><br><br>




                        <select  name="tarjeta" id="tarjeta" style='margin-bottom:20px;'><br>
                            <option value="1">American Express</option><br>
                            <option value="2">Visa</option><br>
                            <option value="3">Master Card</option><br>
                        </select><br>

                        <input type="text" name="TarjetaN" id="TarjetaN" placeholder="Numero Tarjeta" pattern="^(?:5[1-9][0-9]{2}|222[1-9]|22[3-9][0-9]|2[3-6][0-9]{2}|27[01][0-9]|2720)[0-9]{12}$|^3[47][0-9]{13}$|^4[0-9]{12}(?:[0-9]{3})?$" required>
                        <input type="text" class="text" id="Titular" name="Titular" tabindex="2" placeholder="Titular Tarjeta" maxlength="30" required><br><br>



                        <input type="submit" name="login" class="login loginmodal-submit" value="Registrarse">
                    </form>





                </div>
            </div>
        </div>



        <div class="modal fade" id="contacto" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">

                    <div id="formulario" class="loginmodal-container">
                                          <h1>Contacto</h1><br>
                                          <form role="form" action="../funciones/contacto.php" method="POST" id="contacto" title="Nombre">
                                          <label for="nombre">Nombre</label>
                                          <input name="nombre" type="text" required="required" id="nombre" placeholder="nombre" tabindex="1" title="Nombre">
                                          <br>
                                          <label for="email">Email</label>
                                          <input name="email" type="email" required="required" id="email" placeholder="email" tabindex="2" title="Email">
                                          <br>
                                          <label for="telefono">Teléfono</label>
                                          <input name="telefono" type="text" id="telefono" placeholder="telefono" tabindex="3" title="Telefono">
                                          <br>
                                          <label for="Mensaje">Mensaje</label>
                                          <textarea name="mensaje" rows="4" id="mensaje"  placeholder="mensaje" tabindex="6"></textarea>
                                          <br>
                                          <input type="submit" name="enviar" class="login loginmodal-submit" tabindex="7" value="Enviar">
                                          <input type="hidden" name="estado" value="1">
                                          </form>

                      </div>
              </div>
          </div>

          <section class="jumbotron jumbotron1-index">
              <p>
                Somo una empresa enteramente dedicada a ti bla bla bla bla bla bla bla bla
              </p>
<br>
              <p>
                Oficinas:
              </p>

          </section>


          <div id="map"></div>
          <script type="text/javascript">

      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 100
        });

        var marker= new google.maps.Marker({
          position: {lat: -34.397, lng: 150.644},
          map: map
        });
      }

          </script>
          <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNxaYp2MwoV3y_oFUH3HQBWe87vbE_R4A&callback=initMap">
          </script>


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

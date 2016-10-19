<!doctype html>
<html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario de Contacto - Script Personal</title>

<!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/estilos.css" rel="stylesheet">
          <link rel="stylesheet" href="../css/fuentes.css">

</head>

<body>
  <div id="formulario" class="loginmodal-container">
    <form role="form" action="php/contacto.php" method="POST" id="contacto" title="Nombre">
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
    <br>
    <textarea  name="mensaje" rows="4" id="mensaje" placeholder="mensaje" tabindex="6"></textarea>
    <br>
    <input type="submit" name="enviar" class="login loginmodal-submit" tabindex="7" value="Enviar">
    <input type="hidden" name="estado" value="1">
    </form>
  </div>

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

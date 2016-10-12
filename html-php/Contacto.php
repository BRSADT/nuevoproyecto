<!DOCTYPE html>
<ntml lang="es">

  <head>
    <Title>Inicio</title>
      <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" href="../css/fontello.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>

<body>
  <header>
    <input type="checkbox" id="btn-menu">
    <label for="btn-menu" class="icon-menu"></label>
    <nav class="menu">
      <ul>
        <li>
          <a href="Index.php">
            <span class="icon-home"></span>
            Inicio
          </a>
        </li>
        <li class="submenu">
          <a href="#">
            <span class="icon-shopping-basket"></span>
            Productos
            <span class="icon-down-open" id="desplegar"></span>
          </a>
          <ul>
            <li>
              <a href="Productos.php">
                <span class="icon-food">
                </span>Comestibles
              </a>
            </li>
            <li>
              <a href="Productos.php">
                <span class="icon-laptop">
                </span>
                Electronica
              </a>
            </li>
            <li>
              <a href="Productos.php">
                <span class="icon-tags">
                </span>
                Ofertas
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="Contacto.php">
          <span class="icon-phone"></span>
          Contactenos
          </a>
        </li>
        <li>
          <a href="Acerca_de_nosotros.php">
            <span class="icon-group">
            </span>
            Acerca de nosotros
          </a>
        </li>
      </ul>
    </nav>
  </header>
  <script src="..\js\menu.js"></script>
</body>
</html>

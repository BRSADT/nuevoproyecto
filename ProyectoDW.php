<html>
<head>
<title>
*Inserte_nombre_Ingenioso
</title>
  <link rel="stylesheet" href="Estilo_proyecto.css">
  <meta charset="UTF-8">
 
</head>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
function actualizarTama() {
  
  $("body").css("zoom", window.innerWidth / 1366);
  
}

$(document).ready(function() {

  // actualizaremos el zoom cuando la ventana cambie de tamaño
  $(window).on("resize", actualizarTama);
  
  // y al cargar la página
  actualizarTama();
  
});
</script>


<header>




<div class="grad-nex">
</div>

	<nav>

    <div id="logo">
    <img class="ocultar-pequeño " src="logo.png" alt="fruta" style="width: 100%;
    height: 100%;">

    </div>

	<ul id="menu">
<div id="content">
	<li class="dropdown"><a  href="ProyectoDW.php" class="hvr-underline-from-right" >Inicio</a>

<ul class="dropdown-content">

</ul>
</li>

		<li class="dropdown"><a href="#" class="hvr-underline-from-right">Productos</a>
<ul class="dropdown-content">
<li><a href"#"> Frutas </a> 
<li><a href"#"> Verduras </a> 
<li><a href"#"> Electronica </a>
<li><a href"#"> Canasta basica </a> 
<li><a href"#"> Ofertas </a>
</ul>
</li>
			<li ><a href="cursos.php" class="hvr-underline-from-right">Oficinas</a></li>
			<li class="dropdown"><a href="#" class="hvr-underline-from-right">Compras</a>
			<ul class="dropdown-content">
			<li><a href="ventas.php" class="boton">Comprar</a>
				<li><a href="ventas.php" class="boton">Ver carrito</a>
			</ul>
</li>

			
</li>
		</ul>
		</div>

	</nav>





</header>







</body>
</html>

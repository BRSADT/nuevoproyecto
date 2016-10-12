<html>
<head>
<title>
*Inserte_nombre_Ingenioso
</title>
  <link rel="stylesheet" href="Estilo_proyecto.css">
  <meta charset="UTF-8">

 
</head>
<body>



<script language="JavaScript"> 
window.parent.document.body.style.zoom="120%" 
document.writeln(screen.width + " x " + screen.height) 
document.writeln(window.parent.document.body.style.zoom) 
</script>



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
<h1>Título</h1>
<h2>Subtítulo</h2>
<p>Esta página está hecha para un ancho de 500 píxels, cuando la ventana cambia de tamaño, 
se aplica zoom para que todo se siga viendo de manera proporcional (como si la ventana 
siguiera teniendo 500px).</p>
<p>Pulsa en el botón "Página completa" y cambia el tamaño de la ventana, verás como el 
tamaño del contenido se mantiene siempre proporcional al ancho.</p>
<p>
<img src="http://lorempixel.com/400/200" alt="" />





</body>
</html>

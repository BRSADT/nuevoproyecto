function mostrarProductos($Usuario,$Pass)
{

$verificar=0;
 
	$link = mysqli_connect("localhost", "root", "", "base_proyecto_dw");

/* verificar conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

	
$consulta = "SELECT Usuario,Pass from persona ";	
	
	
	if ($sentencia = mysqli_prepare($link, $consulta)) {

    /* ejecutar la sentencia */
    mysqli_stmt_execute($sentencia);

  
    mysqli_stmt_bind_result($sentencia, $user,$pass);

    /* obtener los valores */
    while (mysqli_stmt_fetch($sentencia)) {

	if($Usuario==$user && $Pass==$pass)
	$verificar=1;

    }
	
}
if($verificar==1)
  {

  return true;
  }
  
}

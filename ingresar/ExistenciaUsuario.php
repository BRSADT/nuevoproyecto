<?php

function verificarUsuario($Usuario,$Pass)
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

		echo "adsdaaaaaaa";
    /* ejecutar la sentencia */
    mysqli_stmt_execute($sentencia);

  
    mysqli_stmt_bind_result($sentencia, $user,$pass);

    /* obtener los valores */
    while (mysqli_stmt_fetch($sentencia)) {
echo"-..." ;   
	if($Usuario==$user && $Pass==$pass)
	$verificar=1;

    }
	
}
if($verificar==1)
  {

  return true;
  }
  
}
?>


<?php



if (isset($_POST["usuario"])) {

$usuario=$_POST["usuario"];
echo $_POST["usuario"]; //email
echo " ";
$pass=$_POST['pass'];
echo $_POST['pass']; //id estado


if(verificarUsuario($usuario,$pass)==true)
echo "ya existe hiciste log";
else
{
echo "no existe";



}



}

?>
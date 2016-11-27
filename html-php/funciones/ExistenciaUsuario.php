<script>
function miFuncion()
{

window.location.replace("../PHP&HTML/Index-index.php")
}


</script>

<?php
include("conexion.php");
function verificarUsuario($Usuario,$Pass,&$Administrador)
{
$verificar=0;
	$link = mysqli_connect("localhost", "root", "", "base_proyecto_dw");

/* verificar conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}	
$consulta = "SELECT Usuario,Pass,Admin from persona ";	
	
	
	if ($sentencia = mysqli_prepare($link, $consulta)) {

    /* ejecutar la sentencia */
    mysqli_stmt_execute($sentencia);

  
    mysqli_stmt_bind_result($sentencia, $user,$pass,$Admin);

    /* obtener los valores */
    while (mysqli_stmt_fetch($sentencia)) {

	if($Usuario==$user && $Pass==$pass)
	{$verificar=1;
	$Administrador.=$Admin;
	}
    }
	 }

if($verificar==1)
  {

  return true;
  }
  
 
if($verificar==0)
  {

  return false;
  } 
  
}




if (isset($_POST["usuario"])) {

$usuario=$_POST["usuario"];

$pass=$_POST['pass'];


if(verificarUsuario($usuario,$pass,$Administrador)==true)

{
$ObjBD= new BaseDeDatos();

session_start();
$datos=datosDeSesion($ObjBD);
$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
mysqli_query($enlace,"SET NAMES 'utf8'");



 
 $_SESSION['Administrador']=$Administrador;
 $_SESSION['name']=$datos[0]['name'];
                $_SESSION['apellido']=$datos[0]['apellido'];
                   $_SESSION['email']=$datos[0]['email'];
				   $_SESSION['ID_P']=$datos[0]['ID_P'];
				    
header('Location: ../PHP&HTML/Index-index.php');
	}
else
{

echo ('<script> 
miFuncion()
alert("Datos Incorrectos") ;

</script>');




}



}





function datosDeSesion($BD){

    $datos = $BD->sessionData($_POST["usuario"]);
    return $datos;
}
?>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>AJAX, Ejemplos: Combos (select) dependientes, codigo fuente - ejemplo</title>
<link rel="stylesheet" type="text/css" href="select_dependientes.css">
<script type="text/javascript" src="select_dependientes.js"></script>
<?php include 'conexion.php'; ?>
</head>

<body>

<?php



function insertarUsuario($Pass,$Usuario,$Nombre,$Apellido,$Email,$Admin,$paises,$estados,$calle,$tarjeta,$TarjetaN)
{

$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
	
	
$resultado = mysqli_query($enlace,"SELECT nombre FROM estados where estados.id='$paises'") ;
 while ($row = mysqli_fetch_assoc($resultado)) {
        echo  $row["nombre"];
		$estado=$row["nombre"];
    }

	$resultad = mysqli_query($enlace,"SELECT nombre FROM municipios where municipios.id='$estados'") ;
 while ($row = mysqli_fetch_assoc($resultad)) {
        echo  $row["nombre"];
		$municipios=$row["nombre"];
    }
	

$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
$STATEMENT="INSERT INTO persona (Pass,Usuario,Nombre,Apellido,Email,Admin,estado,municipio) VALUES ('$Pass','$Usuario','$Nombre','$Apellido','$Email','$Admin','$estado','$municipios')";
mysqli_query($enlace,$STATEMENT);
mysqli_query($enlace,"SET NAMES 'utf8'");


}

function verificarUsuario($Usuario,$Email)
{

$verificar=0;
 
	$link = mysqli_connect("localhost", "root", "", "base_proyecto_dw");

/* verificar conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

	
$consulta = "SELECT Usuario,Email from persona ";	
	
	
	if ($sentencia = mysqli_prepare($link, $consulta)) {

		echo "adsdaaaaaaa";
    /* ejecutar la sentencia */
    mysqli_stmt_execute($sentencia);

  
    mysqli_stmt_bind_result($sentencia, $user,$email);

    /* obtener los valores */
    while (mysqli_stmt_fetch($sentencia)) {
echo"-..." ;   
	if($Usuario==$user||$Email==$email)
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



if (isset($_POST["email"])) {

$usuario=$_POST["usuario"];
//echo $_POST["usuario"]; //email
echo " ";
$pass=$_POST['pass'];
//echo $_POST['pass']; //id estado
echo " ";
$pass2=$_POST['pass2'];
//echo $_POST['pass2']; //id estado
echo " ";
$nombre=$_POST['nombre'];
//echo $_POST['nombre']; //id estado
echo " ";
$apellido= $_POST['apellido']; 
//echo $_POST['apellido']; //id estado
echo " ";
$email=$_POST["email"];
//echo $_POST["email"]; //email
echo " ";
$paises=$_POST['paises'];
//echo $_POST['paises']; //id estado
echo " ";
$estados=$_POST["estados"];
//echo $_POST["estados"]; //id municipio
echo " ";
$calle=$_POST['calle'];
//echo $_POST['calle']; //calle
echo " ";
$tarjeta=$_POST['tarjeta'];
//echo $_POST['tarjeta']; //id estado
echo " ";

$TarjetaN=$_POST['TarjetaN']; 
//echo $_POST['TarjetaN']; //id estado


echo "\n   ";
if(verificarUsuario($usuario,$email)==true)
echo "ya existe no fue insertado en la bdd";
else
{
echo "no existe";

insertarUsuario($pass,$usuario,$nombre,$apellido,$email,0,$paises,$estados,$calle,$tarjeta,$TarjetaN);

}






}


?>
</body>
</html>

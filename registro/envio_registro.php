<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>AJAX, Ejemplos: Combos (select) dependientes, codigo fuente - ejemplo</title>
<link rel="stylesheet" type="text/css" href="select_dependientes.css">
<script type="text/javascript" src="select_dependientes.js"></script>
</head>

<body>

<?php

if($_POST['paises']==0){
echo "no elegiste estado >:v";
}
else {
if (isset($_POST["email"])) {
echo $_POST["usuario"]; //email
echo " ";
echo $_POST['pass']; //id estado
echo " ";
echo $_POST['pass2']; //id estado
echo " ";
echo $_POST['nombre']; //id estado
echo " ";
echo $_POST['apellido']; //id estado
echo " ";

echo $_POST["email"]; //email
echo " ";
echo $_POST['paises']; //id estado
echo " ";

echo $_POST["estados"]; //id municipio
echo " ";
echo $_POST['calle']; //calle
echo " ";

echo $_POST['tarjeta']; //id estado
echo " ";
echo $_POST['TarjetaN']; //id estado
}else{  
    echo "N0, mail is not set";
}


}?>
</body>
</html>

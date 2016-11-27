<script>
function miFuncion()
{
window.history.back();
}



</script>
<?php

if(isset($_POST["submit"])) {
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
	
       
        $uploadOk = 1;
    } else {
	echo ('<script> alert("File is not an image.") ; </script>');
    
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
echo ('<script> alert("Sorry, file already exists.") ; </script>');
      
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
echo ('<script> alert("Sorry, your file is too large.") ; </script>');
      
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
echo ('<script> alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.") ; </script>');
         
  
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
echo ('<script> alert("Sorry, your file was not uploaded.") ; </script>');
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	$Imagen=$_FILES["fileToUpload"]["name"];

	echo ('<script> alert("Se ha agregado el producto") ; </script>');
    
    
$Precio=$_POST["precio"];
$Nombre=$_POST["Nombre"];

$Descripcion=$_POST["Descripcion"];

$Stock=$_POST["Stock"];

$Id_Departamento=$_POST["Id_Departamento"];

$Descuento=$_POST["Descuento"];
	

		
	
	$enlace = mysqli_connect("localhost", "root", "", "base_proyecto_dw");
$STATEMENT="INSERT INTO producto (Precio,Nombre,Descripcion,Stock,Id_Departamento,Descuento,Imagen) VALUES ('$Precio','$Nombre','$Descripcion','$Stock','$Id_Departamento','$Descuento','$Imagen')";
mysqli_query($enlace,$STATEMENT);
mysqli_query($enlace,"SET NAMES 'utf8'");
	
	
	
	
	} else {
	echo ('<script> alert("Lo sentimos, no se pudo agregar  el producto") ; </script>');
     
        
    }
}


echo ('<script>


miFuncion()
location.reload();
</script>');



}

?>

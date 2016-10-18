function miFuncion()
{
alert("holi");
}

function validacion() {

	var inputmunicipio = document.forms["registrar"]["estados"].value; 
    var inputPassword1 = document.forms["registrar"]["pass"].value; 
    var inputPassword2 = document.forms["registrar"]["pass2"].value;   
var inputNtarjeta = document.forms["registrar"]["TarjetaN"].value;   
var tarjeta = document.forms["registrar"]["tarjeta"].value; 
 

   
    if(inputPassword2!=inputPassword1){
        alert("La confirmación de contraseña es incorrecta, vuelva a intentar");
        return false;
    }
  
 if(inputmunicipio==0|| inputmunicipio == null ){
        alert("No ingreso su municipio");
        return false;
    }
	
	
	if(tarjeta==1){
	if(!/^3[47][0-9]{13}$/.test(inputNtarjeta))
	{
	alert("el numero de tarjeta no corresponde a American Express");
	return false;
	}
	}
	
	
	if(tarjeta==2){
	if(!/^4[0-9]{12}(?:[0-9]{3})?$/.test(inputNtarjeta))
	{
	alert("el numero de tarjeta no corresponde a Visa");
	return false;
	}
	}
	
	if(tarjeta==3){
	if(!/^(?:5[1-9][0-9]{2}|222[1-9]|22[3-9][0-9]|2[3-6][0-9]{2}|27[01][0-9]|2720)[0-9]{12}$/.test(inputNtarjeta))
	{
	alert("el numero de tarjeta no corresponde a MasterCard");
	return false;
	}
	}	
	

    return true;}



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("select[name=Estado]").change(function(){
 var estado1= $('select[name=Estado]').val();
	alert(estado1);
	enviar();
	
            $('input[name=Estado]').val($(this).val());


	
var dataString = 'estado2='+ estado1;



			});
});

</script>	




<script>
function enviar()
	{
		// Esta es la variable que vamos a pasar
	 var estado1= $('select[name=Estado]').val();

 alert(estado1);
		// Enviamos la variable de javascript a archivo.php
		$.post("",{"estado1":estado1},function(respuesta){
			alert(respuesta);
		});
	}
</script>	


<?php include("encabezado.php"); ?>


<div id="contenido">




<div class="seccion">

<?php
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$celular = $_POST['celular'];
	$email = $_POST['email'];
	
	$tipo = $_POST['tipo'];
	$dia = $_POST['dia'];
	$cantidad = $_POST['cantidad'];
	
	$como = $_POST['como'];

	
	if($_POST['asunto']) {
	$asunto = $_POST['asunto'];
	}
	else {
	$asunto = "Mensaje desde mi pagina";
	}

	
 	$message = $_POST['mensaje'];
	$sever = "From: server@djluzysonido.com";

$mensaje = "
Nombre: " .$nombre ."\n Telefono: " .$telefono ."\n Teléfono con lada o celular: " .$celular ."\n E-mail: " .$email ."\n Tipo de evento: " .$tipo ."\n Día del evento: " .$dia ."\n Cantidad de personas: " .$cantidad ."\n ¿Como se enteró de nosotros?: " .$como ."\n Asunto: " .$asunto ."\n" ."\n" .$message;

if (mail("ventas@antroencasa.com.mx", $asunto, $mensaje, $sever)) {
echo "Gracias por enviarnos su mensaje!";
}; 
?>



</div><!-- Cierra Div Contenido -->



</div><!-- fin .seccion -->


<?php include("pie.php"); ?>
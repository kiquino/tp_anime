
<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$enviado = mail("kiquino@gmail.com",$asunto,$mensaje);
if ($enviado) {
    echo "mensaje enviado... <br>, <a href='index.html'>volver</a>";
}else{
    echo "ocurrio un error, <a href='contacto.html'>vuelva a intentarlo </a> y recuerda llenar todos los espacios";
}
?>
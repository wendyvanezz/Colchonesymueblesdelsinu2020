<?php
error_reporting(0);

$name = strip_tags(htmlspecialchars($_POST['name']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $name . " \r\n";
$mensaje = "Su numero de contacto es " . $phone. " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'mueblesycolchonesdelsinu2019@gmail.com';
$asunto = 'COTIZACIONES PAGINA WEB';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'mensaje enviado correctamente';


?>


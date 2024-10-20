<?php

$to = "rayccs@gmail.com";
$subject = "Nuevo contacto de team proware";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
$message = $_POST['message']."NAME".$_POST['name']."MAIL".$_POST['email'];


mail($to, $subject, $message, $headers);
echo 'Tu mensaje ha sido enviado con éxito, en poco tiempo seras contactado';
?>

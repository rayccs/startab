<?php
// Verifica que se ha recibido una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recupera los datos del formulario
  $nombre = $_POST["name"];
  $email = $_POST["email"];
  $codigo = $_POST["codigo"];
  $phone = $_POST["phone"];

  // Aquí puedes realizar cualquier procesamiento adicional según tus necesidades

  // Envía el correo
  $para = "rayccs@gmail.com"; // Reemplaza con tu dirección de correo electrónico
  $asunto = "Nuevo lead desde la web";
  $mensaje = "Nombre: $nombre\nCorreo electrónico: $email\nCodigo: $codigo\nphone: $phone";

  // Utiliza la función mail para enviar el correo
  mail($para, $asunto, $mensaje);

  // Envía una respuesta al cliente
  echo "¡Formulario enviado con éxito!";
} else {
  // Si no es una solicitud POST, devuelve un mensaje de error
  echo "Error: Acceso no permitido";
}
?>

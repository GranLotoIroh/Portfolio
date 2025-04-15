<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "tuemail@dominio.com";
  $subject = "Mensaje del portfolio de $name";
  $body = "Nombre: $name\nCorreo: $email\nMensaje:\n$message";

  if (mail($to, $subject, $body)) {
    echo "Mensaje enviado correctamente.";
  } else {
    echo "Hubo un error al enviar el mensaje.";
  }
}
?>

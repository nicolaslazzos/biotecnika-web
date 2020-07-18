<?php

if(null !== (filter_input(INPUT_POST, 'email'))) {

// Se debe editar las proximas dos lineas de codigo de acuerdo con tus preferencias
$email_to = "prueba@gmail.com";
$email_subject = "Contacto desde el sitio web";

// Aca se deberian validar los datos ingresados por el usuario
if(null == (filter_input(INPUT_POST, 'nombre')) ||
null == (filter_input(INPUT_POST, 'email')) ||
null == (filter_input(INPUT_POST, 'asunto')) ||
null == (filter_input(INPUT_POST, 'mensaje'))){

echo"<script>alert('Debe completar todos los campos del formulario')</script>";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . filter_input(INPUT_POST, 'nombre') . "\n";
$email_message .= "E-mail: " . filter_input(INPUT_POST, 'email') . "\n";
$email_message .= "Asunto: " . filter_input(INPUT_POST, 'asunto') . "\n";
$email_message .= "Mensaje: " . filter_input(INPUT_POST, 'mensaje') . "\n\n";


// Ahora se envia el e-mail usando la funcion mail() de PHP
$headers = 'From: '. filter_input(INPUT_POST, 'email') ."\r\n".
'Reply-To: '. filter_input(INPUT_POST, 'email') ."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);

echo"<script>alert('El mensaje se ha enviado con exito!')</script>";
}
header("Location: ../index.php");
die();

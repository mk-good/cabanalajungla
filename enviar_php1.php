<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $mensaje = $_POST['mensaje'] ?? '';

    $para = "tucorreo@ejemplo.com"; // Cambia por tu correo real
    $asunto = "Nuevo mensaje desde la página web";

    $contenido = "Nombre: $nombre\nCorreo: $correo\nMensaje:\n$mensaje";
    $cabeceras = "From: $correo";

    if (mail($para, $asunto, $contenido, $cabeceras)) {
        echo "Mensaje enviado correctamente. ¡Gracias por contactarnos!";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor intenta de nuevo.";
    }
}
    // Validación de correo
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "El correo ingresado no es válido.";
        exit;
    }

    if (mail($para, $asunto, $contenido, $cabeceras)) {
        echo "Mensaje enviado correctamente. ¡Gracias por contactarnos!";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor intenta de nuevo.";
    }
}
?>

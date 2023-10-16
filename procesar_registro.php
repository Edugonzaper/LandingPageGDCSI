<?php
require_once('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor del correo electrónico del formulario
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $db = new Database();

    // Validación opcional del correo electrónico
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "error"; // Respuesta de error si el correo electrónico no es válido
        exit;
    }

    // Llama a la función para insertar el correo en la tabla "landing"
    if ($db->insertEmailToLanding($correo)) {
        $para = $correo;
        $asunto = "¡Gracias por confiar en nosotros!";
        $mensaje = "Muchas gracias por confiar en nuestro producto.  \n Recibirás nueva información próximamente.";
        $encabezados = "From: gardo@gdragoncard.com\r\n" .
            "X-Mailer: PHP/" . phpversion();

        if (mail($para, $asunto, $mensaje, $encabezados)) {
            header("Location: redirect.php?page=landing-success");
        } else {
            echo "Error al enviar el correo.";
        }
        header("Location: redirect.php?page=landing-success");
    } else {
        echo "error"; // Hubo un error al insertar el correo electrónico
    }
} else {
    // Si alguien intenta acceder directamente a este script sin enviar el formulario, redirige a la página de registro.
    header("Location: landing_page.php");
}
?>

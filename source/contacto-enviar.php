<?php
// Configuración
$destinatario = "gerente.seguridad@mie.lat, jonatanjonas@gmail.com"; // Cambia esto por tu email
$asunto_base = "Nuevo mensaje desde el sitio web - Mayoristas de Integración Electrónica";

// Verificar que sea una petición POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: /contacto?error=metodo");
    exit;
}

// Sanitizar y validar datos
$nombre = isset($_POST['nombre']) ? trim(strip_tags($_POST['nombre'])) : '';
$email = isset($_POST['email']) ? trim(strip_tags($_POST['email'])) : '';
$telefono = isset($_POST['telefono']) ? trim(strip_tags($_POST['telefono'])) : '';
$asunto = isset($_POST['asunto']) ? trim(strip_tags($_POST['asunto'])) : '';
$mensaje = isset($_POST['mensaje']) ? trim(strip_tags($_POST['mensaje'])) : '';

// Validaciones
$errores = [];

if (empty($nombre)) {
    $errores[] = "El nombre es obligatorio";
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El email es inválido";
}

if (empty($asunto)) {
    $errores[] = "El asunto es obligatorio";
}

if (empty($mensaje)) {
    $errores[] = "El mensaje es obligatorio";
}

// Si hay errores, redirigir
if (!empty($errores)) {
    $error_msg = urlencode(implode(", ", $errores));
    header("Location: /contacto?error=" . $error_msg);
    exit;
}

// Mapear asuntos
$asuntos_map = [
    'cotizacion' => 'Solicitar cotización',
    'soporte' => 'Soporte técnico',
    'ventas' => 'Información de ventas',
    'otro' => 'Otro'
];

$asunto_texto = isset($asuntos_map[$asunto]) ? $asuntos_map[$asunto] : 'Consulta general';

// Preparar el mensaje
$cuerpo = "
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; text-align: center; border-radius: 10px 10px 0 0; }
        .content { background: #f9f9f9; padding: 30px; border-radius: 0 0 10px 10px; }
        .field { margin-bottom: 20px; padding: 15px; background: white; border-radius: 5px; border-left: 4px solid #667eea; }
        .label { font-weight: bold; color: #667eea; margin-bottom: 5px; }
        .value { color: #333; }
        .footer { text-align: center; margin-top: 20px; font-size: 12px; color: #999; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>Nuevo Mensaje de Contacto</h2>
            <p>Mayoristas de Integración Electrónica</p>
        </div>
        <div class='content'>
            <div class='field'>
                <div class='label'>Nombre:</div>
                <div class='value'>{$nombre}</div>
            </div>
            
            <div class='field'>
                <div class='label'>Email:</div>
                <div class='value'>{$email}</div>
            </div>
            
            <div class='field'>
                <div class='label'>Teléfono:</div>
                <div class='value'>" . (!empty($telefono) ? $telefono : 'No proporcionado') . "</div>
            </div>
            
            <div class='field'>
                <div class='label'>Asunto:</div>
                <div class='value'>{$asunto_texto}</div>
            </div>
            
            <div class='field'>
                <div class='label'>Mensaje:</div>
                <div class='value'>" . nl2br($mensaje) . "</div>
            </div>
        </div>
        <div class='footer'>
            <p>Este mensaje fue enviado desde el formulario de contacto del sitio web</p>
            <p>Fecha: " . date('d/m/Y H:i:s') . "</p>
        </div>
    </div>
</body>
</html>
";

// Headers para email HTML
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";

// Enviar email
$email_enviado = mail($destinatario, $asunto_base . " - " . $asunto_texto, $cuerpo, $headers);

if ($email_enviado) {
    // Redirigir con éxito
    header("Location: /contacto?success=1");
    exit;
} else {
    // Error al enviar
    header("Location: /contacto?error=envio");
    exit;
}
?>
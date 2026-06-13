<?php
session_start();
require_once __DIR__ . '/../../models/Usuario.php';

function mostrarAlerta($type, $title, $text, $redirectUrl) {
    echo "
    <!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Procesando...</title>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <style>
            body {
                background-color: #0f172a;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
        </style>
    </head>
    <body>
        <script>
            Swal.fire({
                icon: '{$type}',
                title: '{$title}',
                text: '{$text}',
                confirmButtonColor: '#10b981',
                background: '#1e293b',
                color: '#fff'
            }).then(() => {
                window.location.href = '{$redirectUrl}';
            });
        </script>
    </body>
    </html>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($nombre) || empty($email) || empty($password)) {
        mostrarAlerta('error', 'Campos obligatorios', 'Todos los campos son obligatorios.', '../registerAdmin.php');
    }

    $usuarioModel = new Usuario();

    if ($usuarioModel->emailExiste($email)) {
        mostrarAlerta('error', 'Correo registrado', 'El email ya está registrado.', '../registerAdmin.php');
    }

    // 1 = Administrador (según db.sql)
    $registrado = $usuarioModel->registrar($nombre, $email, $password, 1);

    if ($registrado) {
        mostrarAlerta('success', '¡Registro Exitoso!', 'Administrador registrado exitosamente. Ya puedes iniciar sesión.', '../../views/auth/login.php');
    } else {
        mostrarAlerta('error', 'Error de registro', 'Hubo un error al registrar. Verifica tu conexión o intenta más tarde.', '../registerAdmin.php');
    }
} else {
    header("Location: ../registerAdmin.php");
    exit();
}
?>
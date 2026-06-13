<?php
// Lógica simple para simular/procesar la recuperación de contraseña
$message = '';
$status = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email) {
        // Aquí se conectaría a la base de datos y enviaría el correo
        // require_once '../../config/database.php';
        
        $message = "Hemos enviado las instrucciones de recuperación al correo: <strong>" . htmlspecialchars($email) . "</strong>. Por favor, revisa tu bandeja de entrada o spam.";
        $status = "success";
    } else {
        $message = "Por favor, ingresa un correo electrónico válido.";
        $status = "error";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña - FactuWeb PRO</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../img/icon.png" type="image/png">
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../public/css/auth.css">
</head>
<body>

    <div class="auth-container">
        <!-- Columna Izquierda (Panel de Marca Corporativo) -->
        <div class="col-lg-6 brand-panel d-none d-lg-flex">
            <div class="brand-content">
                <div class="brand-top">
                    <img src="../../img/logo.png" alt="FactuWeb PRO" class="brand-logo-img">
                </div>
                
                <div class="brand-middle">
                    <h2 class="brand-title">Recupera el acceso a tu cuenta de manera segura.</h2>
                    <ul class="feature-list">
                        <li class="feature-item">
                            <div class="feature-icon-box">
                                <i class="fa-solid fa-key"></i>
                            </div>
                            <span>Restablecimiento mediante enlace seguro y temporal.</span>
                        </li>
                        <li class="feature-item">
                            <div class="feature-icon-box">
                                <i class="fa-solid fa-user-shield"></i>
                            </div>
                            <span>Protección de datos y cifrado de extremo a extremo.</span>
                        </li>
                        <li class="feature-item">
                            <div class="feature-icon-box">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <span>Soporte técnico disponible si tienes dificultades.</span>
                        </li>
                    </ul>
                </div>
                
                <div class="brand-bottom">
                    <p class="mb-0">&copy; 2026 FactuWeb PRO. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
        
        <!-- Columna Derecha (Formulario de Recuperación) -->
        <div class="col-lg-6 col-md-12 form-panel">
            <div class="form-header">
                <h1 class="form-title">¿Olvidaste tu contraseña?</h1>
                <p class="form-subtitle">Ingresa tu correo electrónico registrado y te enviaremos las instrucciones para restablecerla.</p>
            </div>
            
            <?php if (!empty($message)): ?>
                <div class="alert alert-<?= $status === 'success' ? 'success' : 'danger' ?> alert-dismissible fade show mb-4 border-0 rounded-3" role="alert" style="font-size: 0.9rem; padding: 15px;">
                    <i class="fa-solid <?= $status === 'success' ? 'fa-circle-check text-success' : 'fa-triangle-exclamation text-danger' ?> me-2"></i>
                    <?= $message ?>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close" style="font-size: 0.75rem; top: 12px;"></button>
                </div>
            <?php endif; ?>

            <form action="" method="POST">
                <!-- Campo Correo -->
                <div class="form-group-custom">
                    <label class="form-label-custom" for="email">Correo Electrónico</label>
                    <div class="input-group-custom">
                        <input type="email" id="email" name="email" class="form-control-custom" placeholder="correo@ejemplo.com" required autocomplete="email">
                        <span class="input-icon"><i class="fa-regular fa-envelope"></i></span>
                    </div>
                </div>
                
                <!-- Botón Enviar -->
                <button type="submit" class="btn-submit-custom mb-4">Enviar Enlace de Recuperación</button>
                
                <!-- Regresar a Login -->
                <div class="text-center">
                    <a href="login.php" class="forgot-link d-inline-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <i class="fa-solid fa-arrow-left"></i> Volver al Iniciar Sesión
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

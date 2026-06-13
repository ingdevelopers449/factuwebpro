<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Admin Temporal - FactuWeb PRO</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/icon.png" type="image/png">
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/css/auth.css">
</head>
<body>

    <div class="auth-container" style="max-width: 550px;">
        <!-- Formulario de Registro -->
        <div class="form-panel w-100">
            <div class="form-header text-center">
                <span class="badge bg-warning text-dark mb-3"><i class="fa-solid fa-shield-halved me-1"></i> Herramienta de Despliegue</span>
                <h1 class="form-title">Crear Administrador</h1>
                <p class="form-subtitle">Crea el usuario administrador inicial para gestionar FactuWeb PRO.</p>
            </div>

            <form action="" method="POST">
                <!-- Campo Nombre -->
                <div class="form-group-custom">
                    <label class="form-label-custom" for="nombre">Nombre Completo</label>
                    <div class="input-group-custom">
                        <input type="text" id="nombre" name="nombre" class="form-control-custom" placeholder="Ej: John Doe" required autocomplete="name">
                        <span class="input-icon"><i class="fa-regular fa-user"></i></span>
                    </div>
                </div>

                <!-- Campo Correo -->
                <div class="form-group-custom">
                    <label class="form-label-custom" for="email">Correo Electrónico</label>
                    <div class="input-group-custom">
                        <input type="email" id="email" name="email" class="form-control-custom" placeholder="admin@empresa.com" required autocomplete="email">
                        <span class="input-icon"><i class="fa-regular fa-envelope"></i></span>
                    </div>
                </div>
                
                <!-- Campo Contraseña -->
                <div class="form-group-custom">
                    <label class="form-label-custom" for="password">Contraseña</label>
                    <div class="input-group-custom">
                        <input type="password" id="password" name="password" class="form-control-custom" placeholder="••••••••" required autocomplete="new-password">
                        <span class="input-icon"><i class="fa-solid fa-lock"></i></span>
                    </div>
                </div>
                
                <!-- Botón Enviar -->
                <button type="submit" class="btn-submit-custom mb-4">Registrar Administrador</button>
                
                <!-- Enlace al Login -->
                <div class="text-center">
                    <a href="../views/auth/login.php" class="forgot-link d-inline-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <i class="fa-solid fa-arrow-left"></i> Volver al Login
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - FactuWeb PRO</title>
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
                    <h2 class="brand-title">Facturación electrónica moderna, ágil y segura.</h2>
                    <ul class="feature-list">
                        <li class="feature-item">
                            <div class="feature-icon-box">
                                <i class="fa-solid fa-bolt"></i>
                            </div>
                            <span>Emisión y transmisión DIAN en tiempo real.</span>
                        </li>
                        <li class="feature-item">
                            <div class="feature-icon-box">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <span>Firma digital y almacenamiento seguro de XML.</span>
                        </li>
                        <li class="feature-item">
                            <div class="feature-icon-box">
                                <i class="fa-solid fa-chart-pie"></i>
                            </div>
                            <span>Reportes financieros y control de documentos.</span>
                        </li>
                    </ul>
                </div>
                
                <div class="brand-bottom">
                    <p class="mb-0">&copy; 2026 FactuWeb PRO. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
        
        <!-- Columna Derecha (Formulario de Login) -->
        <div class="col-lg-6 col-md-12 form-panel">
            <div class="form-header">
                <h1 class="form-title">Bienvenido de nuevo</h1>
                <p class="form-subtitle">Ingresa tus credenciales de administrador para continuar.</p>
            </div>
            
            <form action="../../controllers/auth/authController.php" method="POST">
                <!-- Campo Correo -->
                <div class="form-group-custom">
                    <label class="form-label-custom" for="email">Correo Electrónico</label>
                    <div class="input-group-custom">
                        <input type="email" id="email" name="email" class="form-control-custom" placeholder="correo@ejemplo.com" required autocomplete="username">
                        <span class="input-icon"><i class="fa-regular fa-envelope"></i></span>
                    </div>
                </div>
                
                <!-- Campo Contraseña -->
                <div class="form-group-custom">
                    <label class="form-label-custom" for="password">Contraseña</label>
                    <div class="input-group-custom">
                        <input type="password" id="password" name="password" class="form-control-custom" placeholder="••••••••" required autocomplete="current-password">
                        <span class="input-icon"><i class="fa-solid fa-lock"></i></span>
                    </div>
                </div>
                
                <!-- Recordarme y Recuperación -->
                <div class="options-row">
                    <label class="checkbox-custom-label">
                        <input type="checkbox" class="checkbox-custom"> Recordarme
                    </label>
                    <a href="forgot-password.php" class="forgot-link">¿Olvidaste tu contraseña?</a>
                </div>
                
                <!-- Botón Enviar -->
                <button type="submit" class="btn-submit-custom">Iniciar Sesión</button>
            </form>
        </div>
    </div>

</body>
</html>

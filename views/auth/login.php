<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - FactuWeb PRO</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@500;600;700;800&family=Roboto+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Custom CSS (Separado) -->
    <link rel="stylesheet" href="../../public/css/auth.css">
</head>
<body>

    <div class="auth-container">
        <div class="row g-0 m-0 w-100 h-100">
            <!-- Columna Izquierda (Logo / Emblema) -->
            <div class="col-md-6 brand-panel d-none d-md-flex">
                <div class="emblem-container">
                    <img src="../../img/logo.png" alt="FactuWeb PRO Emblem">
                </div>
            </div>
            
            <!-- Columna Derecha (Formulario) -->
            <div class="col-md-6 form-panel">
                <div class="logo-header">
                    <img src="../../img/logo.png" alt="FactuWeb PRO Logo">
                </div>
                
                <form action="#" method="POST">
                    <!-- Campo Correo -->
                    <div class="form-group-custom">
                        <label class="form-label-custom" for="email">Correo Electrónico</label>
                        <div class="input-group-custom">
                            <span class="input-icon"><i class="fa-regular fa-envelope"></i></span>
                            <input type="email" id="email" class="form-control-custom" placeholder="nombre@empresa.com" required>
                        </div>
                    </div>
                    
                    <!-- Campo Contraseña -->
                    <div class="form-group-custom">
                        <label class="form-label-custom" for="password">Contraseña</label>
                        <div class="input-group-custom">
                            <span class="input-icon"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" id="password" class="form-control-custom" placeholder="..........." required>
                        </div>
                    </div>
                    
                    <!-- Recordarme y Recuperación -->
                    <div class="options-row">
                        <label class="checkbox-custom-label">
                            <input type="checkbox" class="checkbox-custom"> Recordarme
                        </label>
                        <a href="#" class="forgot-link">¿Olvidaste tu contraseña?</a>
                    </div>
                    
                    <!-- Botón Enviar -->
                    <button type="submit" class="btn-submit-custom">Iniciar Sesión</button>
                </form>
                
                <!-- Redirección a Registro -->
                <div class="register-redirect">
                    ¿No tienes cuenta? <a href="register.php">Regístrate gratis</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

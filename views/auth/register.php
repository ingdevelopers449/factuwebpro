<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - FactuWeb PRO</title>
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
                <h2 class="header-title">Crear Cuenta Profesional</h2>
                <p class="header-subtitle">Comienza a facturar electrónicamente en minutos.</p>
                
                <form action="#" method="POST">
                    <!-- Campo Nombre Completo -->
                    <div class="form-group-custom">
                        <label class="form-label-custom" for="nombre">Nombre Completo</label>
                        <input type="text" id="nombre" class="form-control-custom" placeholder="Ej. Luis Felipe Lozada" required>
                    </div>
                    
                    <!-- Fila con Nombre Negocio y NIT -->
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="form-group-custom">
                                <label class="form-label-custom" for="negocio">Nombre del Negocio</label>
                                <input type="text" id="negocio" class="form-control-custom" placeholder="Mi tienda" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group-custom">
                                <label class="form-label-custom" for="nit">NIT / Identificación</label>
                                <input type="text" id="nit" class="form-control-custom" placeholder="900.123...." required>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Campo Email Corporativo -->
                    <div class="form-group-custom">
                        <label class="form-label-custom" for="email">Email Corporativo</label>
                        <input type="email" id="email" class="form-control-custom" placeholder="admin@empresa.com" required>
                    </div>
                    
                    <!-- Fila con Contraseña y Confirmación -->
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="form-group-custom">
                                <label class="form-label-custom" for="password">Contraseña</label>
                                <input type="password" id="password" class="form-control-custom" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group-custom">
                                <label class="form-label-custom" for="confirm_password">Confirmar</label>
                                <input type="password" id="confirm_password" class="form-control-custom" required>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Botón Enviar -->
                    <button type="submit" class="btn-submit-custom">Crear Cuenta</button>
                </form>
                
                <!-- Redirección a Login -->
                <div class="login-redirect">
                    <a href="login.php">&lt;&lt; Volver al inicio de sesión</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

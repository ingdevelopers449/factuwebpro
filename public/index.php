<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FactuWeb PRO - Solución robusta de Facturación Electrónica en Colombia. Cumple con la DIAN de forma ágil, segura y eficiente.">
    <title>FactuWeb PRO - Facturación Electrónica Oficial DIAN</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Header / Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="../img/logo.png" alt="FactuWeb PRO Logo" style="height: 65px; object-fit: contain;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#caracteristicas">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#beneficios">Beneficios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#como-funciona">Cómo Funciona</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-outline-custom" href="../views/auth/login.php">Acceder</a>
                    </li>
                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-primary-custom" href="../views/auth/register.php">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <span class="hero-badge"><i class="fa-solid fa-circle-check me-2"></i>Validación y Transmisión Directa a la DIAN</span>
                    <h1 class="hero-title">Facturación Electrónica sin complicaciones con <span>FactuWeb PRO</span></h1>
                    <p class="lead text-muted mb-4">
                        La solución ágil y segura para emitir tus facturas, nómina y documentos soporte en Colombia. Cumple con toda la normatividad legal de forma automática y organizada.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="../views/auth/register.php" class="btn btn-primary-custom btn-lg">Crear Cuenta</a>
                        <a href="#caracteristicas" class="btn btn-outline-custom btn-lg">Explorar Módulos</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center position-relative">
                    <div class="px-3">
                        <div class="card border-0 shadow-lg p-4 bg-white" style="border-radius: 24px; transform: rotate(-1deg);">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <span class="badge bg-success-subtle text-success py-2 px-3 rounded-pill"><i class="fa-solid fa-circle-check me-1"></i> Validado DIAN</span>
                                <span class="text-muted small">Factura #FE-1082</span>
                            </div>
                            <div class="text-start">
                                <h6 class="text-muted text-uppercase mb-1" style="font-size: 0.75rem; letter-spacing: 1px;">Adquiriente</h6>
                                <h5 class="mb-3">Servicios Tecnológicos SAS</h5>
                                <div class="row g-2 mb-4">
                                    <div class="col-6 bg-light p-3 rounded-3">
                                        <small class="text-muted d-block">Subtotal</small>
                                        <strong class="text-dark">$1'250.000 COP</strong>
                                    </div>
                                    <div class="col-6 bg-light p-3 rounded-3">
                                        <small class="text-muted d-block">IVA (19%)</small>
                                        <strong class="text-dark">$237.500 COP</strong>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center border-top pt-3">
                                    <div>
                                        <span class="text-muted small d-block">Total Facturado</span>
                                        <h4 class="mb-0 text-primary-dark font-weight-bold">$1'487.500 COP</h4>
                                    </div>
                                    <div class="bg-primary text-white p-2 rounded-3" style="background-color: var(--primary-dark) !important;">
                                        <i class="fa-solid fa-qrcode fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Micro-card 1 -->
                        <div class="card border-0 shadow p-3 bg-white d-none d-md-flex align-items-center flex-row gap-3 position-absolute" style="top: 15%; left: -20px; border-radius: 16px; max-width: 240px; z-index: 2; transform: rotate(4deg);">
                            <div class="bg-primary-subtle text-primary p-2 rounded-3">
                                <i class="fa-solid fa-paper-plane"></i>
                            </div>
                            <div class="text-start">
                                <h6 class="mb-0 fw-bold" style="font-size: 0.85rem;">XML Emitido</h6>
                                <small class="text-muted" style="font-size: 0.75rem;">Enviado exitosamente</small>
                            </div>
                        </div>

                        <!-- Floating Micro-card 2 -->
                        <div class="card border-0 shadow p-3 bg-white d-none d-md-flex align-items-center flex-row gap-3 position-absolute" style="bottom: 10%; right: -10px; border-radius: 16px; max-width: 220px; z-index: 2; transform: rotate(-3deg);">
                            <div class="bg-warning-subtle text-warning p-2 rounded-3">
                                <i class="fa-solid fa-signature"></i>
                            </div>
                            <div class="text-start">
                                <h6 class="mb-0 fw-bold" style="font-size: 0.85rem;">Firma Digital</h6>
                                <small class="text-muted" style="font-size: 0.75rem;">Certificado digital vigente</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Características -->
    <section id="caracteristicas" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <span class="text-uppercase fw-bold text-primary-light" style="font-size: 0.85rem; letter-spacing: 2px;">Módulos</span>
                <h2 class="mt-2 section-title">Todo en un solo sistema</h2>
                <p class="text-muted max-width-600 mx-auto">FactuWeb PRO unifica las herramientas necesarias para cumplir a cabalidad con los requerimientos de la DIAN.</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="fa-solid fa-file-invoice-dollar"></i>
                        </div>
                        <h3>Factura Electrónica</h3>
                        <p class="text-muted mb-0">Emisión rápida de facturas, notas débito y notas crédito con validación previa de la DIAN.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <h3>Nómina Electrónica</h3>
                        <p class="text-muted mb-0">Generación y transmisión directa del reporte mensual de nómina para tus trabajadores.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="fa-solid fa-file-shield"></i>
                        </div>
                        <h3>Documento Soporte</h3>
                        <p class="text-muted mb-0">Documenta de manera oficial las transacciones realizadas con proveedores no obligados a facturar.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="fa-solid fa-envelope-open-text"></i>
                        </div>
                        <h3>Eventos RADIAN</h3>
                        <p class="text-muted mb-0">Gestión de acuses de recibo y aceptación para habilitar tus facturas como título valor comercial.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h3>Envío Automatizado</h3>
                        <p class="text-muted mb-0">Tus clientes reciben la factura en su correo electrónico (PDF y XML adjuntos) de forma inmediata.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                        </div>
                        <h3>Historial y Reportes</h3>
                        <p class="text-muted mb-0">Consulta, descarga y filtra el historial de documentos emitidos cuando lo necesites.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Beneficios clave -->
    <section id="beneficios" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <span class="text-uppercase fw-bold text-primary-light" style="font-size: 0.85rem; letter-spacing: 2px;">Ventajas</span>
                <h2 class="mt-2 section-title">¿Por qué FactuWeb PRO?</h2>
            </div>
            
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex mb-4 gap-3">
                        <div class="bg-primary-subtle text-primary-dark p-3 rounded-3 align-self-start" style="font-size: 1.5rem;">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                        <div>
                            <h4>Agilidad y Velocidad</h4>
                            <p class="text-muted">Genera y transmite tus documentos tributarios en menos de dos segundos con nuestra infraestructura optimizada.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4 gap-3">
                        <div class="bg-primary-subtle text-primary-dark p-3 rounded-3 align-self-start" style="font-size: 1.5rem;">
                            <i class="fa-solid fa-desktop"></i>
                        </div>
                        <div>
                            <h4>Interfaz Intuitiva</h4>
                            <p class="text-muted">Diseñado para ser fácil de usar por cualquier persona de tu equipo, sin necesidad de capacitaciones complejas.</p>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <div class="bg-primary-subtle text-primary-dark p-3 rounded-3 align-self-start" style="font-size: 1.5rem;">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div>
                            <h4>100% Cumplimiento Legal</h4>
                            <p class="text-muted">Siempre actualizado con los últimos anexos técnicos vigentes que exige la DIAN en Colombia.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm p-4 bg-light" style="border-radius: 20px;">
                        <h4 class="mb-3 text-primary-dark"><i class="fa-solid fa-circle-question me-2"></i>Preguntas Frecuentes</h4>
                        <div class="mb-3">
                            <h6 class="fw-bold mb-1">¿Incluye la firma digital?</h6>
                            <p class="text-muted small">Sí, el sistema cuenta con el certificado de firma digital requerido para dotar de validez legal a tus documentos.</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="fw-bold mb-1">¿Cómo es el proceso de habilitación?</h6>
                            <p class="text-muted small">Te acompañamos en todo el proceso de registro ante la DIAN hasta realizar las pruebas exitosas y pasar a producción.</p>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">¿Qué tipo de soporte técnico ofrecen?</h6>
                            <p class="text-muted small">Brindamos soporte especializado para asegurar que tu facturación opere sin interrupciones.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cómo Funciona -->
    <section id="como-funciona" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <span class="text-uppercase fw-bold text-primary-light" style="font-size: 0.85rem; letter-spacing: 2px;">Metodología</span>
                <h2 class="mt-2 section-title">Puesta en marcha rápida</h2>
            </div>
            
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="p-4">
                        <div class="bg-white shadow-sm rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                            <h2 class="mb-0 text-primary-dark fw-bold">1</h2>
                        </div>
                        <h4>1. Vinculación y Registro</h4>
                        <p class="text-muted">Realizamos el registro de tu empresa en el portal de la DIAN como facturador electrónico.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4">
                        <div class="bg-white shadow-sm rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                            <h2 class="mb-0 text-primary-dark fw-bold">2</h2>
                        </div>
                        <h4>2. Set de Pruebas</h4>
                        <p class="text-muted">Ejecutamos el envío de los documentos de prueba exigidos por la entidad tributaria para la habilitación.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4">
                        <div class="bg-white shadow-sm rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                            <h2 class="mb-0 text-primary-dark fw-bold">3</h2>
                        </div>
                        <h4>3. Emisión Oficial</h4>
                        <p class="text-muted">Asociamos tus rangos de numeración oficial y comienzas a emitir tus facturas electrónicas de venta.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-lg-5">
                    <a class="navbar-brand d-flex align-items-center mb-3" href="#">
                        <img src="../img/logo.png" alt="FactuWeb PRO Logo" style="height: 50px; object-fit: contain;">
                    </a>
                    <p class="text-white-50">Solución robusta en Colombia para la emisión automática y ágil de documentos tributarios oficiales ante la DIAN.</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 offset-lg-1">
                    <h5>Enlaces rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#caracteristicas" class="footer-link">Características</a></li>
                        <li><a href="#beneficios" class="footer-link">Beneficios</a></li>
                        <li><a href="#como-funciona" class="footer-link">Cómo Funciona</a></li>
                        <li><a href="../views/auth/login.php" class="footer-link">Acceder</a></li>
                    </ul>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <h5>Contacto Directo</h5>
                    <ul class="list-unstyled text-white-50 small">
                        <li class="mb-2"><i class="fa-solid fa-envelope me-2 text-primary-light"></i>contacto@factuwebpro.com</li>
                        <li class="mb-2"><i class="fa-solid fa-phone me-2 text-primary-light"></i>+57 (300) 123-4567</li>
                        <li class="mb-2"><i class="fa-solid fa-location-dot me-2 text-primary-light"></i>Bogotá, Colombia</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-top border-secondary pt-4 text-center text-white-50 small">
                <p class="mb-0">&copy; 2026 FactuWeb PRO. Todos los derechos reservados. Desarrollado de acuerdo con las normativas DIAN vigentes.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

# FactuWeb Pro 🚀

**FactuWeb Pro** es una plataforma web para la gestión de facturación, control de inventarios y administración de usuarios, diseñada para ser rápida, segura y altamente intuitiva.

---

## 📋 Características Principales

*   **Autenticación y Control de Accesos:** Inicio de sesión seguro con roles diferenciados (Administrador y Empleado/Vendedor) y control de accesos a tableros específicos.
*   **Gestión de Clientes:** Registro y consulta de información de clientes (Identificación, Razón Social, Email, Dirección, Teléfono).
*   **Control de Inventario (Productos):** Catálogo de productos con soporte para códigos de barras, seguimiento de precio de compra/venta, cálculo automático de IVA y control de stock.
*   **Módulo de Facturación:** Generación de facturas asignadas a clientes y vendedores, cálculo automático de subtotal, IVA y total a pagar.
*   **Alertas Interactivas:** Integración con *SweetAlert2* para proporcionar notificaciones dinámicas y estéticas.

---

## 🛠️ Tecnologías Utilizadas

*   **Backend:** PHP (arquitectura estructurada mediante Controladores y Modelos).
*   **Base de Datos:** MySQL / MariaDB.
*   **Frontend:** HTML5, JavaScript moderno y CSS modular.
*   **Librerías externas:** SweetAlert2 (para alertas y notificaciones visuales).

---

## 📁 Estructura del Proyecto

```text
factuweb/
├── adminto/              # Panel de administración o herramientas adicionales
│   ├── controller/       # Controlador de administrador temporal (registro inicial)
│   └── registerAdmin.php # Vista para registro inicial de administrador
├── config/               # Configuración de base de datos
│   └── database.php
├── controllers/          # Controladores de la aplicación
│   └── auth/             # Autenticación (login, logout)
├── documentación/        # Documentos adicionales del proyecto
├── img/                  # Recursos gráficos e imágenes
├── models/               # Modelos de base de datos (Usuario, etc.)
├── public/               # Archivos públicos de acceso directo (CSS, JS)
├── sql/                  # Scripts e inicialización de Base de Datos
│   └── db.sql            # Estructura e inserciones base
└── views/                # Vistas y plantillas de la aplicación
    ├── admin/            # Vistas del módulo de Administrador
    ├── auth/             # Vistas de inicio de sesión y recuperación
    └── vendedor/         # Vistas del módulo de Vendedor
```

---

## 🚀 Instalación y Configuración Local

Sigue los siguientes pasos para configurar y desplegar el proyecto en tu entorno local (por ejemplo, usando **Laragon** o **XAMPP**):

### 1. Clonar el repositorio
Ubica el proyecto dentro del directorio raíz de tu servidor local (`C:\laragon\www\` o `C:\xampp\htdocs\`):
```bash
git clone https://github.com/ingdevelopers449/factuwebpro.git factuweb
```

### 2. Configurar la Base de Datos
1. Inicia tus servicios de Apache y MySQL.
2. Crea una base de datos en tu gestor (phpMyAdmin, HeidiSQL, etc.) llamada `factuweb` (o el nombre de tu preferencia).
3. Importa el archivo SQL ubicado en `sql/db.sql` para generar las tablas y los registros básicos de roles y clientes por defecto:
   ```bash
   mysql -u tu_usuario -p factuweb < sql/db.sql
   ```

### 3. Configurar la Conexión de PHP
Abre el archivo `config/database.php` y configura tus credenciales de base de datos correspondientes:
```php
$host = "localhost";
$user = "tu_usuario";
$password = "tu_contraseña";
$database = "factuweb";
```

### 4. Inicializar Administrador de Pruebas
Dado que el sistema no cuenta con un formulario de registro general para usuarios, puedes registrar tu primer administrador inicial accediendo temporalmente a la siguiente ruta desde tu navegador:
```text
http://localhost/factuweb/adminto/registerAdmin.php
```

---

## 🔒 Seguridad
*   Las contraseñas de usuarios son encriptadas usando la función robusta `password_hash()` de PHP con el algoritmo `PASSWORD_BCRYPT`.
*   Implementación de consultas preparadas (`prepare()` y `bind_param()`) para mitigar vulnerabilidades frente a inyecciones SQL (SQLi).

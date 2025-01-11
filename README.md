# Sistema de Pedidos Especiales

Este proyecto es una aplicación web desarrollada en Laravel que permite gestionar pedidos especiales, pagos, tiendas, y usuarios. El sistema incluye autenticación y funcionalidades básicas de CRUD para las entidades principales.

---

## Tecnologías Utilizadas

- **Backend:** Laravel 11
- **Frontend:** Blade Templates con Bootstrap 5
- **Autenticación:** Laravel Breeze (Stack Blade)
- **Base de Datos:** MySQL

---

## Funcionalidades Principales

1. **Gestín de Tiendas**
   - Listado de tiendas en una tabla con paginación.
   - Crear, editar y eliminar tiendas.
   - Cada tienda tiene los campos: `ID`, `Nombre`, `Dirección`, y `Teléfono`.

2. **Pedidos**
   - Registrar pedidos con imagenes.
   - Asociar pagos a los pedidos.
   - Visualizar pedidos por tienda.

3. **Usuarios**
   - Registro de usuarios.
   - Asignación automática de una sucursal a cada usuario registrado.

4. **Autenticación y Autorización**
   - Inicio de sesión y registro.
   - Protección de rutas mediante middleware.

5. **Diseño Responsivo**
   - Navegación optimizada para dispositivos móviles y escritorios.

---

## Configuración del Proyecto

### Requisitos

- **PHP:** 8.2 o superior
- **Composer** instalado
- **Servidor Web:** Apache o Nginx
- **Base de Datos:** MySQL

### Instalación

1. Clonar el repositorio:
   ```bash
   git clone https://github.com/tu-usuario/sistema-pedidos.git
   ```

2. Acceder al directorio del proyecto:
   ```bash
   cd sistema-pedidos
   ```

3. Instalar dependencias de PHP:
   ```bash
   composer install
   ```

4. Instalar dependencias de Node.js (opcional para desarrollo frontend):
   ```bash
   npm install
   ```

5. Copiar el archivo de configuración de entorno:
   ```bash
   cp .env.example .env
   ```

6. Configurar las credenciales de la base de datos en el archivo `.env`.

7. Generar la clave de la aplicación:
   ```bash
   php artisan key:generate
   ```

8. Ejecutar las migraciones:
   ```bash
   php artisan migrate
   ```

9. (Opcional) Ejecutar los seeders para datos iniciales:
   ```bash
   php artisan db:seed
   ```

10. Iniciar el servidor de desarrollo:
    ```bash
    php artisan serve
    ```

---

## Navegación y Vistas

### Página de Bienvenida
La página principal muestra una imagen de fondo con un mensaje de bienvenida y dos botones:
- **Iniciar Sesión:** Redirige al formulario de login.
- **Ver Tutorial:** Abre un video explicativo del uso del sistema.

### Menú de Navegación
- **Dashboard:** Inicio del panel principal.
- **Tiendas:** CRUD de tiendas.
- **Pedidos:** Gestión de pedidos especiales.

---

## Estilos Personalizados

Los estilos se integran utilizando Bootstrap 5. Para agregar o modificar estilos adicionales, edita los archivos CSS en el directorio `resources/css` o utiliza los estilos integrados en los componentes de Blade.

---

## Contacto

**Desarrollador:** HorizonDevs.net  
**Email:** [info@horizondevs.net](mailto:info@horizondevs.net)


Este proyecto implementa un sistema básico de autenticación de usuarios utilizando la gestión de Sesiones nativas de PHP

Login (login.php): Muestra el formulario de acceso. Valida las credenciales ingresadas comparándolas con un array de usuarios predefinido en el servidor.

bienvenida.php: Requiere que la sesión de usuario esté activa. Muestra un mensaje de bienvenida personalizado, el nombre del usuario autenticado y la hora actual. Si no hay sesión, redirige automáticamente.

Acceso Denegado (sin_permisos.php): Es la página de destino para cualquier usuario no autenticado que intente acceder a la zona privada.

Cerrar Sesión (logout.php): Destruye la sesión de PHP activa y redirige al usuario de vuelta al formulario de login.


El sistema utiliza un array interno de usuarios en login.php. Algunos pares válidos para iniciar sesión son:

Usuario: admin / Contraseña: admin

Usuario: Hugo / Contraseña: Hugo

Usuario: JuanFran / Contraseña: JuanFran

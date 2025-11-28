<?php
session_start();

$usuarios = [
    "admin" => "admin",
    "usuario" => "usuario",    
    "Hugo" => "Hugo",
    "Paco" => "Paco",
    "JuanFran" => "JuanFran",
    "Carlos" => "Carlos"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // CORRECCIÓN: Usamos 'password' para coincidir con el atributo 'name' del input HTML
    $nombre = $_POST["nombre"];
    $contraseña = $_POST["password"]; 

    // Valida la existencia de la clave y si la contraseña coincide
    if (isset($usuarios[$nombre]) && $usuarios[$nombre] === $contraseña) {
        $_SESSION["usuario"] = $nombre;
        header("Location: bienvenida.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión - Autenticación PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-card {
            max-width: 400px; /* Limita el ancho de la tarjeta para un mejor diseño */
            width: 90%;
            margin-top: 50px; /* Espacio superior */
        }
    </style>
</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="min-height:100vh;">
    <div class="container d-flex justify-content-center">
        <div class="login-card card shadow p-4">
            <div class="text-center mb-4">
                <img src="onepiece.png" alt="Logo" class="img-fluid mb-3" style="max-height: 100px;">
                <h3 class="mb-0">Servicio de Autenticación</h3>
            </div>
            
            <p class="text-muted text-center small">
                RA4. AEE: Creación de un Servicio de Autenticación con Sesiones en PHP
            </p>
            
            <form method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Usuario</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>
            
            <?php if (isset($error)): ?>
                <div class="alert alert-danger mt-3 text-center">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
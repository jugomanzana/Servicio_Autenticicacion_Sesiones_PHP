<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: sin_permisos.php");
    exit();
}

$usuario = $_SESSION["usuario"];
$hora = date("H:i:s");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Fondo lila suave */
        body {
            background-color: #e9dbff; /* lila claro */
        }

        /* Tarjeta con tonos lilas */
        .card-lila {
            background: #f6ecff;   /* fondo lila más claro */
            border: 1px solid #d5b8ff;
            border-radius: 15px;
        }

        /* Texto destacado lila */
        .text-lila {
            color: #8a2be2; /* lila/ púrpura elegante */
        }

        /* Botón lila */
        .btn-lila {
            background-color: #b48cff;
            border-color: #a475ff;
            color: white;
        }

        .btn-lila:hover {
            background-color: #a475ff;
            border-color: #8f5dff;
            color: white;
        }
    </style>
</head>

<body class="vh-100 d-flex align-items-center justify-content-center">

    <div class="card card-lila shadow-lg p-5 text-center">
        <h2 class="mb-3">
            Bienvenido, <span class="text-lila"><?php echo htmlspecialchars($usuario); ?></span>
        </h2>
        <p class="mb-3">Hora actual: <strong><?php echo $hora; ?></strong></p>
        <p class="lead">Me alegra verte de nuevo en el sistema!</p>
        <a href="logout.php" class="btn btn-lila mt-3">Cerrar sesión</a>
    </div>
</body>
</html>

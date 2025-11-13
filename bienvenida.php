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
</head>
<body class="bg-success bg-opacity-10 vh-100 d-flex align-items-center justify-content-center">
    <div class="card shadow-lg p-5 text-center">
        <h2 class="mb-3">Bienvenido, <span class="text-primary"><?php echo htmlspecialchars($usuario); ?></span> 👋</h2>
        <p class="mb-3">Hora actual: <strong><?php echo $hora; ?></strong></p>
        <p class="lead">¡Nos alegra verte de nuevo en el sistema!</p>
        <a href="logout.php" class="btn btn-outline-danger mt-3">Cerrar sesión</a>
    </div>
</body>
</html>
    
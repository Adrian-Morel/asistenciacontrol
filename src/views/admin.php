<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrador</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap Icons (opcional, para iconos en el header) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container my-5">
        <h1>Bienvenido, Administrador</h1>
        <a href="logout.php" class="btn btn-danger mt-3">Cerrar sesión</a>
        <!-- Aquí puedes agregar más opciones de administración -->
    </div>
    <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
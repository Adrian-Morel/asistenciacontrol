<?php
require_once '../src/controllers/AsistenciaController.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Asistencia</title>
    <!-- Incluye Bootstrap desde tu carpeta local -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <?php
        $controller = new AsistenciaController();
        $controller->mostrarOpciones();
        ?>
    </div>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>


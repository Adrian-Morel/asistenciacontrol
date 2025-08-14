<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/estilos.css">
    <title>Opciones de Asistencia</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container mt-3">
        <div class="d-flex justify-content-end">
            <a href="../src/views/login.php" class="btn btn-outline-secondary">Inicio Administrador</a>
        </div>
    </div>
    
    <div class="container">
        <h1>Opciones de Asistencia</h1>
        <div class="options">
            <div class="option">
                <h2>Marcar Asistencia por QR</h2>
                <p>Utiliza tu dispositivo móvil para escanear el código QR y marcar tu asistencia.</p>
                <a href="qr.php" class="btn btn-primary">Escanear QR</a>
            </div>
            <div class="option">
                <h2>Reconocimiento Facial</h2>
                <p>Marca tu asistencia utilizando el reconocimiento facial.</p>
                <a href="reconocimiento.php" class="btn btn-primary">Iniciar Reconocimiento</a>
            </div>
            <div class="option">
                <h2>Identificación Manual</h2>
                <p>Ingresa tus datos para marcar tu asistencia manualmente.</p>
                <a href="identificacion.php" class="btn btn-primary">Identificación</a>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
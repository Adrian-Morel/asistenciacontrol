
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Administrador</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap Icons (opcional) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(120deg, #0d6efd 0%, #6ea8fe 100%);
        }
        .card {
            border-radius: 1.2rem;
        }
        .login-icon {
            font-size: 3rem;
            color: #0d6efd;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
            <div class="text-center mb-3">
                <i class="bi bi-person-circle login-icon"></i>
            </div>
            <h4 class="text-center mb-4">Inicio Administrador</h4>
            <?php if (isset($_GET['error'])): ?>
                <div class="alert alert-danger text-center">Usuario o contraseña incorrectos</div>
            <?php endif; ?>
            <form method="POST" action="../../src/controllers/LoginController.php">
                <div class="mb-3">
                    <label class="form-label">Usuario</label>
                    <input type="text" name="usuario" class="form-control" required autofocus autocomplete="username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" name="contrasena" class="form-control" required autocomplete="current-password">
                </div>
                <button type="submit" class="btn btn-primary w-100">Ingresar</button>
            </form>
        </div>
    </div>
    <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
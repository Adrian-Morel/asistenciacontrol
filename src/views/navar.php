<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!-- Bootstrap CSS y Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">



<nav class="navbar navbar-expand-lg navbar-dark navbar-celeste fixed-top">
    <div class="container">
        <a class="navbar-brand text-dark fw-bold" href="#">Proyecto Asistencia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <?php if (isset($_SESSION['admin'])): ?>
                    <li class="nav-item me-3">
                        <span class="navbar-text text-dark">
                            <i class="bi bi-person-circle"></i> Administrador
                        </span>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="btn btn-outline-dark btn-sm">Cerrar sesión</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <span class="navbar-text text-dark">
                            <i class="bi bi-person"></i> Invitado
                        </span>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

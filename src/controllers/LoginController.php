<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    if ($usuario === 'admin' && $contrasena === 'admin') {
        $_SESSION['admin'] = true;
        header('Location: ../../src/views/admin.php');
        exit;
    } else {
        header('Location: ../views/login.php?error=1');
        exit;
    }
} else {
    header('Location: ../views/login.php');
    exit;
}
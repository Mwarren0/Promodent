<?php
session_start();

// Usuario y contraseña definidos manualmente (¡más adelante en base de datos!)
$usuario_valido = "admin";
$contrasena_valida = "promodent123";

// Recibir datos del formulario
$usuario = $_POST['usuario'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

// Validar credenciales
if ($usuario === $usuario_valido && $contrasena === $contrasena_valida) {
    $_SESSION['usuario'] = $usuario;
    header("Location: dashboard.html");
    exit();
} else {
    echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href='login.html';</script>";
    exit();
}
?>
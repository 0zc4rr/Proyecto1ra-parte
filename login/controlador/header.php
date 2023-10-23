<?php
// Inicia la sesión
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['valido'])) {
    // Si no está autenticado, redirige a la página de inicio de sesión
    header('Location: http://localhost/Proyecto-camisetas/login/index.html');
    exit(); // Asegura que el script se detenga después de la redirección
}

// Obtén el nombre de usuario de la sesión (si es necesario)
$usuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : '';

?>

    

<?php
include_once('concet.php');

session_start();

// Verifica si no hay una sesión iniciada
if (!isset($_SESSION['username'])) {
    // Si no hay sesión iniciada, redirige a la página de inicio de sesión o muestra un mensaje de error
    header('Location: index3.php');
    exit();
}
?>
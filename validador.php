<?php
include_once('concet.php');
session_start();

// Verifica si ya hay una sesión iniciada
if (isset($_SESSION['username'])) {
    // Si ya hay una sesión iniciada, redirige a index2.php
    header('Location: index2.php');
    exit();
} 
?>
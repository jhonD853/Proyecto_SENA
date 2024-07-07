<?php
include_once('concet.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario_id = $_SESSION['username'];
    
    // Recoger datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $documento = $_POST['documento'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    // Actualizar datos en la base de datos (reemplaza con tu lógica real)
    $stmt = $conn->prepare("UPDATE usuarios SET nombre=?, apellido=?, fecha_nacimiento=?, documento=?, telefono=?, email=? WHERE usuario = ?");
    $stmt->bind_param('sssssss', $nombre, $apellido, $fecha_nacimiento, $documento, $telefono, $email, $usuario_id);
    
    if ($stmt->execute()) {
        header('Location: perfil.php');;
    } else {
        echo "Error al actualizar datos: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Acceso no autorizado.";
}
?>

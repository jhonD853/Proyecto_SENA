<?php
include_once('concet.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibe el nombre de usuario del formulario
    $nombre = $_POST['nombre'];

    // Ejemplo: conexión a la base de datos (reemplaza con tu información)
    $conexion = new mysqli("localhost", "root", "1703", "vinos");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("La conexión falló: " . $conexion->connect_error);
    }

    // Verificación del usuario existente
    $stmt_check_user = $conexion->prepare("SELECT usuario FROM usuarios WHERE usuario = ?");
    $stmt_check_user->bind_param('s', $nombre);
    $stmt_check_user->execute();

    // Verifica si ya existe un usuario con el mismo nombre
    $stmt_check_user->store_result();
    if ($stmt_check_user->num_rows > 0) {
        echo 'El nombre de usuario ya está en uso. Por favor, elige otro.';
    }

    $stmt_check_user->close();
    $conexion->close();
}
?>

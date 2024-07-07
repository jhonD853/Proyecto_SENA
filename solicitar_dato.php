<?php
include_once('concet.php');

ob_start();
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Incluir el archivo de conexión a la base de datos (concet.php)
include_once('concet.php');

// Obtener el ID de usuario desde la sesión
$usuario_id = $_SESSION['username'];

// Función para obtener datos de usuario desde la base de datos
function obtenerDatoDeUsuario($campo) {
    global $conn, $usuario_id;

    // Ejemplo de consulta a la base de datos (reemplaza con tu lógica real)
    $stmt = $conn->prepare("SELECT nombre, apellido, fecha_nacimiento, documento, telefono, email FROM usuarios WHERE usuario = ?");
    $stmt->bind_param('s', $usuario_id); // 's' indica que el valor es una cadena (string)

    $stmt->execute();
    $stmt->bind_result($nombre, $apellido, $fecha_nacimiento, $documento, $telefono, $email);
    $stmt->fetch();
    $stmt->close();

    // Dependiendo del campo que estás solicitando, retorna el valor correspondiente
    switch ($campo) {
        case 'nombre':
            return $nombre;
        case 'apellido':
            return $apellido;
        case 'fecha_nacimiento':
            return $fecha_nacimiento;
        case 'documento':
            return $documento;
        case 'telefono':
            return $telefono;
        case 'email':
            return $email;
        default:
            return null;
    }
}

ob_end_flush();
?>

<?php
include_once('validador.php');
include_once('concet.php');
include_once('validar_user.php');

// Variable para almacenar el mensaje de alerta
$alert_message = '';

// Verifica si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibe los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $documento = $_POST['documento'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $confirmar_password = $_POST['confirmar_password'];

    // Validaciones (puedes agregar más según tus necesidades)
    if (empty($nombre) || empty($apellido) || empty($fecha_nacimiento) || empty($telefono) || empty($email) || empty($direccion) || empty($documento) || empty($usuario) || empty($password) || empty($confirmar_password)) {
        $alert_message = 'Todos los campos son obligatorios.';
    } elseif ($password !== $confirmar_password) {
        $alert_message = 'Las contraseñas no coinciden.';
    } else {
        // Ejemplo: conexión a la base de datos (reemplaza con tu información)
        $conexion = new mysqli("localhost", "root", "1703", "vinos");

        // Verificar la conexión
        if ($conexion->connect_error) {
            die("La conexión falló: " . $conexion->connect_error);
        }

        // Verificación del usuario existente
        $stmt_check_user = $conexion->prepare("SELECT usuario FROM usuarios WHERE usuario = ?");
        $stmt_check_user->bind_param('s', $usuario);
        $stmt_check_user->execute();

        // Verifica si ya existe un usuario con el mismo nombre
        $stmt_check_user->store_result();
        if ($stmt_check_user->num_rows > 0) {
            $alert_message = 'El nombre de usuario ya está en uso. Por favor, elige otro.';
        } else {
            // Hash de la contraseña
            $hashed_password = md5($password);

            // Inserción del nuevo usuario
            $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, apellido, fecha_nacimiento, telefono, email, direccion, documento, usuario, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

            if (!$stmt) {
                die("Error al preparar la consulta: " . $conexion->error);
            }

            $stmt->bind_param('ssssssiss', $nombre, $apellido, $fecha_nacimiento, $telefono, $email, $direccion, $documento, $usuario, $hashed_password);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                // Registro exitoso, redirige a la página principal o a donde desees
                header('Location: index.php');
                exit();
            } else {
                $alert_message = 'Error al registrar el usuario: ' . $stmt->error;
            }

            $stmt->close();
        }

        $stmt_check_user->close();
        $conexion->close();
    }
}
?>
<?php
include_once('concet.php');

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
        echo 'Todos los campos son obligatorios.';
        exit();
    }

    if ($password !== $confirmar_password) {
        echo 'Las contraseñas no coinciden.';
        exit();
    }

    // Realiza operaciones de registro en la base de datos
    // (Asegúrate de sanitizar y validar los datos antes de usarlos en consultas SQL)

    // Ejemplo: conexión a la base de datos (reemplaza con tu información)
    $conexion = new mysqli("localhost", "root", "1703", "vinos");

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("La conexión falló: " . $conexion->connect_error);
    }

    // Hash de la contraseña
    $hashed_password = md5($password);

    // Ejemplo de inserción en la base de datos (reemplaza con tu lógica real)
    $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, apellido, fecha_nacimiento, telefono, email, direccion, documento, usuario, contrasena) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssssiss', $nombre, $apellido, $fecha_nacimiento, $telefono, $email, $direccion, $documento, $usuario, $hashed_password);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Registro exitoso, redirige a la página principal
        header('Location: pagina_principal.php');
        exit();
    } else {
        echo 'Error al registrar el usuario: ' . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
}
?>




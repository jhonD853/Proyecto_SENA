<?php
include_once('concet.php');
session_start();

// Verifica si ya hay una sesión iniciada
if (isset($_SESSION['username'])) {
    // Si ya hay una sesión iniciada, redirige a otra página
    header('Location: index2.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibe los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Supongamos que tienes una base de datos y obtienes la contraseña almacenada para el usuario
    $storedPasswordHash = obtenerPasswordHashDesdeLaBaseDeDatos($username);

    // Verifica si la contraseña ingresada coincide con la contraseña almacenada (MD5)
    if (md5($password) === $storedPasswordHash) {
        // Autenticación exitosa
        $_SESSION['username'] = $username;

        // Redirige a la página deseada después de iniciar sesión
        header('Location: index2.php');
        exit();
    } else {
        // Autenticación fallida
        echo 'Usuario o contraseña incorrectos';
    }
}

// Función ficticia para obtener el hash de la contraseña desde la base de datos
function obtenerPasswordHashDesdeLaBaseDeDatos($username) {
    // Aquí deberías realizar una consulta a tu base de datos para obtener el hash de la contraseña
    // Devuelve el hash almacenado para el usuario proporcionado
    $conexion = new mysqli("localhost", "id21554163_root", "aB#7xyzZ", "id21554163_vinos");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("La conexión falló: " . $conexion->connect_error);
    }

    $stmt = $conexion->prepare("SELECT password FROM usuarios WHERE usuario = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->bind_result($storedPasswordHash);
    $stmt->fetch();
    $stmt->close();

    $conexion->close();

    return $storedPasswordHash;
}
?>




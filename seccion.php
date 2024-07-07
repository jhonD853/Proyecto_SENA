<?php
include_once('');
?>
<?php
if (isset($_SESSION['username'])) {
    // Si hay una sesión abierta, muestra el contenido de bienvenida
    ?>
    <h2>Bienvenido <span id="loggedInUsername">
        <?php echo $_SESSION['username']; ?>
    </span></h2>
    <a href="perfil.php">Perfil</a><br>
    <a href="logout.php">Cerrar Sesión</a>
    <?php
} else {
    // Si no hay una sesión abierta, muestra el formulario de inicio de sesión
    ?>
    <div class="modal-content">
        <span class="close" id="closeLoginModal">&times;</span>
        <h2>Iniciar Sesión</h2>
        <form id="loginForm" action="iniciar.php" method="post">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Iniciar Sesión">
        </form>
        <p>¿Aun no tienes una cuenta? <a href="registro.php">Registrate</a></p>
    </div>
    <?php
}
?>

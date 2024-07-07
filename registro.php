<?php
include_once('validador.php');
include_once('concet.php');



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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stlyes.css">
    <link rel="shortcut icon" href="./rincon del vino/logo png.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cod.css">
    <title>El ricon del vino</title>
</head>

<body>
    <!--Header-->
    
<header>
        <nav class="navbar">
        <ul class="prueba">
                <a href=""><img src="logo_png.png" alt="El ricon del vino"></a>
                <a class="inicio" href="index3.php">Inicio<a>
                    <a href="#" id="abrirMenu" onclick="toggleMenu()">Productos</a>
                </ul>
    
                <div id="menuDesplegable">
                    <ul>
                        <li><a href="#">Vino Tinto</a></li>
                        <li><a href="#">Vino Blanco</a></li>
                        <li><a href="#">Vino espumoso</a></li>
                        <li><a href="#">Vino seco</a></li>
                        <li><a href="#">Opción 5</a></li>
                        <li><a href="#">Cotiza tu evento</a></li>
                    </ul>
                </div>
            
            
            <div class="buscador">
                <form class="formBusq" action="tu_script_de_búsqueda.php" method="get">
                  <div class="busqueda-wrapper">
                    <div class="busque"><input type="text" id="busqueda" class="campo-busqueda"  name="busqueda" placeholder="Buscar" /><img src="rincon del vino/lupa.png" class="icono-busqueda"></div>                    
                  </div>
                  <input type="submit" class="boton-busqueda" value="" />
                </form>
            </div>
            
            <ul class="content-btn">
                <div class="finStore" id="login">
                    <a href="" class="a">
                        <img src="rincon del vino/usuario.png" alt="Buscador">
                    </a>
                </div>
                <div class="finStore"  id="carrito" >
                    <a href="" class="a">
                        <img src="rincon del vino/carro.png" alt="Buscador">
                    </a>
                </div>
                <div class="finStore">
                    <a href="" class="a">
                        <img src="rincon del vino/campana.png" alt="Buscador">
                    </a>
                </div>
            </ul>
        </nav>
        <div id="cartModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Carrito de Compras</h2>
                <ul id="cartItems">
                    <!-- Aquí se mostrarán los elementos del carrito -->
                </ul>
                <p>Total: $<span id="cartTotal">0.00</span></p>
            </div>
        </div>
        <div id="loginModal" class="modal">
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
            </div>
        </div>
    
        <script src="nav.js"></script>
    </header>
    <div class="rincon-vino">
        <h1 class="ricon">EL RINCON DEL VINO</h1>
    </div>
    


    <!-- Primer section del registro -->
    
   

    <section class="login">
        <section class="login_container">
            <h2 class="title_form">Registro de usuario</h2>
            <form class="login_container_form" action="" method="post">
                <!-- Añade el atributo "name" a cada input para que los datos se envíen correctamente -->
                <input type="text" class="input-n" placeholder="Nombre" name="nombre">
                <input type="text" class="input-n" placeholder="Apellido" name="apellido">
                <input type="date" class="input-n" placeholder="Fecha de nacimiento" name="fecha_nacimiento">
                <input type="tel" class="input-n" placeholder="Numero telefonico" name="telefono">
                <input type="email" class="input" placeholder="Correo Electronico" name="email">
                <input type="text" class="input-n" placeholder="Direccion" name="direccion">
                <input type="number" class="input-n" placeholder="Cedula" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                <input type="text" class="input" placeholder="Escribe tu nombre de usuario" name="usuario">
                <input type="password" class="input" placeholder="Escribe tu contaseña" name="password">
                <input type="password" class="input" placeholder="Confirma tu contraseña" name="confirmar_password">
                <label class="politica">
            <input type="checkbox" name="autorizacion" required>
            Autorizo las <a href="politica_user.php" class="a_color"><u>políticas de privacidad y tratamiento de datos.</u></a>
        </label>
                <button class="button" type="submit" id="button_register">Registrar</button>
            </form>
        </section>
    </section>
    <?php
if (!empty($alert_message)) {
    echo '<script>alert("' . $alert_message . '");</script>';
}
?>

    <!-- Section de las redes socilaes  -->

    <footer>
        <section class="section">
            <div class="div">
                <div class="log" >
                    <img src="rincon del vino/logo png.png" alt="" class="im">
                    
                </div>
                <h3>_________________</h3>
                <div class="div-one">
                    <div>
                        <a href="https://www.facebook.com/profile.php?id=61553443256669" class="b">
                            <img src="rincon del vino/facebook.png" alt="facebook">
                        </a>
                        
                    </div>
                    <div>
                        <a href="https://www.instagram.com/" class="b">
                            <img src="rincon del vino/instagram.png" alt="instagram">
                        </a>
                    </div>
                    <div>
                        <a href="https://www.tiktok.com/@rincovino" class="b">
                            <img src="rincon del vino/Tik tok.png" alt="Tik Tok">
                        </a>
        
                    </div>
                </div>
            </div>
            <div class="div_two">
                <div class="h2">
                    <h2>"Descubre el Arte en cada copa:"</h2>
                    <h2>Tu pasaporte al Mundo del vino</h2>
                </div>
            </div>
            <div class="div-o">
                <div class="div-on">
                    <div>
                        <a href="https://www.facebook.com/profile.php?id=61553443256669" >
                            <img src="rincon del vino/bancolombia.png" alt="bancolombia" class="b">
                        </a>
                        <a href="">
                            <img src="rincon del vino/nequi.png" alt="" class="b">
                        </a>
                    </div>
    
                    <div>
                        <a href="https://www.instagram.com/" >
                            <img src="rincon del vino/davivienda.png" alt="instagram" class="im">
                        </a>
                        <a href="https://www.tiktok.com/@rincovino" >
                            <img src="rincon del vino/bogota.png" alt="Tik Tok" class="im">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- section de informacion final -->
        <section>
            <div class="info">
                <div class="h3">
                    <a href=""> 
                        <h3>Productos</h3>
                    </a>
                    <a href="">
                        <h3>Quines somos</h3>
                    </a>
                    <a href="trabaja.php">
                        <h3>Trabaja con nosotros</h3>
                    </a>
                    <a href="">
                        <h3>Proveedores</h3>
                    </a>
                </div>
                <div class="h3">
                    <a href="">
                        <h3>Atención al cliente</h3>
                    </a>
                    <div >
                        <a href="" class="whatsapp">
                            <img src="rincon del vino/whatsapp.png"  alt="">
                            <div class="texto">
                                <h3>3237572850</h3>
                            </div>
                            
                        </a>
                    </div>
                    <div >
                        <a href="" class="correo">
                            <img src="rincon del vino/correo.png" alt="">
                            <h3>ricondelvino@gmail.com</h3>
                        </a>
                    </div>
                    
                    <a href="">
                        <h3>Información legal</h3>
                    </a>
                </div>
                <div class="h3">
                    <a href="">
                        <h3>Responsabilidad legal</h3>
                    </a>
                    <a href="">
                        <h3>Terminos y condiciones</h3>
                    </a>
                    <a href="">
                        <h3>Politicas y privacidad</h3>
                    </a>
                    <a href="cookies.php">
                        <h3>Politicas de cokies</h3>
                    </a>
                </div>
            </div>
        </section>
        <section class="extra">
            <div>
                <h3> EL EXCESO DE ALCOHOL ES PERJUDICIAL PARA LA SALUD. LEY 30 DE 1986..</h3>
                <h3>PROHÍBASE EL EXPENDIO DE BEBIDAS EMBRIAGANTES A MENORES DE EDAD </h3>
                <h3 class="ley">MUJERES EMBARAZADAS. LEY 124 DE 1994.</h3>
            </div>
        </section>
    </footer>
        
    
   
  
    <script src="starbucks.js"></script>
</body>

</html>

<link>.input-n</link>::-webkit-inner-spin-button,
<link>.input-n</link>::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

<link>.input-n</link> {
  appearance: textfield;
  -moz-appearance: textfield; /* Firefox */
}
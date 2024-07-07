<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="trabaja.css">
    <link rel="shortcut icon" href="./rincon del vino/logo png.png" />
    <title>Trabaja con nosotros</title>
</head>
<body>
    <!--Header-->
    
    <header>
        <nav class="navbar">
            <ul class="prueba">
                <a href=""><img src="rincon del vino/logo png.png" alt="El ricon del vino"></a>
                <a class="inicio" href="index3.php">Inicio<a>
                    <a href="#" id="abrirMenu">Productos</a>
            </ul>
    
                <div id="menuDesplegable">
                    <ul>
                        <li><a href="#">Vinos Tintos</a></li>
                        <li><a href="#">Vinos Blancos</a></li>
                        <li><a href="#">Vinos espumosos</a></li>
                        <li><a href="#">Vinos secos</a></li>
                        <li><a href="#">Vinos rosados</a></li>
                        <li><a href="#">Cotiza tu evento</a></li>
                    </ul>
                </div>
            
            <div class="buscador">
                <form class="formBusq" action="tu_script_de_búsqueda.php" method="get">
                  <div class="busqueda-wrapper">
                    <div class="busque"><input type="text" id="busqueda" class="campo-busqueda"  name="busqueda" placeholder="Buscar"><input type="submit" class="icono-busqueda" value=""></div>                    
                  </div>
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
        </div>
    
        <script src="nav.js"></script>
    </header>
    <div class="rincon-vino">
        <h1 class="ricon">EL RINCON DEL VINO</h1>
    </div>
    


    <!-- Primer section del registro -->
    
   

    <section class="login">
        <section class="login_container">
            <h2 class="title_form">Trabaja con nosotros</h2>
            <form class="login_container_form" id="login">
                <input type="text" class="input-n" placeholder="Nombre" id="correo">
                <input type="text" class="input-n" placeholder="Apellido" id="correo">
                <input type="date" class="input-n" placeholder="Fecha de nacimiento" id="correo">
                <input type="number" class="input-n" placeholder="Número de telefono" maxlength="15" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" > 
                <input type="email" class="input" placeholder="Correo Electronico" id="correo">
                <input type="text" class="input-n" placeholder="Direccion" id="correo">
                <input type="number" class="input-n" placeholder="Documento" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                <select class="input-nn"  name="Vancantes disponibles">
                    <option >Vancantes disponibles</option>
                    <option >Trabajador</option>
                    <option >Proveedor</option>
                </select>
                <a href="" class="button" id="button_register"> Siguiente </a>
            </form>
        </section>
    </section>

    <!-- Section de las redes socilaes  -->

    <footer>
        <section class="section">
            <div class="div">
                <div class="log">
                    <img src="rincon del vino/logo png.png" alt="" class="im">
                </div>
                <div class="barra-container">
                    <img class="barra" src="rincon del vino/línea-horizontal-negra.png" alt="">
                </div>
                <div class="div-one">
                    <div>
                        <a href="https://www.facebook.com/profile.php?id=61553443256669" class="b">
                            <img src="rincon del vino/facebook.png" alt="facebook">
                        </a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/"class="b"><img src="rincon del vino/instagram.png" alt="instagram"></a>
                    </div>
                    <div>
                        <a href="https://www.tiktok.com/@rincovino" class="b">
                            <img src="rincon del vino/Tik tok.png" alt="Tik Tok">
                        </a>
                    </div>
                </div>
            </div>
            <div class="div_two">
                <div class="mensajeFoot">
                    <h2>"Descubre el Arte en cada copa:"</h2>
                    <h2>Tu pasaporte al Mundo del vino</h2>
                </div>
            </div>
            <div class="div-o">
                <div class="div-on">
                    <div>
                        <a href="https://www.facebook.com/profile.php?id=61553443256669" ><img src="rincon del vino/bancolombia.png" alt="bancolombia" class="b"></a>
                        <a href=""><img src="rincon del vino/nequi.png" alt="" class="b"></a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/" ><img src="rincon del vino/davivienda.png" alt="instagram" class="im"></a>
                        <a href="https://www.tiktok.com/@rincovino" ><img src="rincon del vino/bogota.png" alt="Tik Tok" class="im"></a>
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
                    <a href="">
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
</body>
</html>
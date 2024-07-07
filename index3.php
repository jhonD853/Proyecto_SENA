<?php
include_once('validador.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cod.css">
</head>
<body>
    <header>
    <nav class="navbar">
            <ul class="prueba">
                <a href=""><img src="logo_png.png" alt="El ricon del vino"></a>
                <a class="inicio" href="">Inicio<a>
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
                    <div class="busque"><input type="text" id="busqueda" class="campo-busqueda"  name="busqueda" placeholder="Buscar" /><img src="lupa.png" class="icono-busqueda"></div>                    
                  </div>
                  <input type="submit" class="boton-busqueda" value="" />
                </form>
            </div>
            
            <ul class="content-btn">
                <div class="finStore" id="login">
                    <a href="" class="a">
                        <img src="usuario.png" alt="Buscador">
                    </a>
                </div>
                <div class="finStore"  id="carrito" >
                    <a href="" class="a">
                        <img src="carro.png" alt="Buscador">
                    </a>
                </div>
                <div class="finStore">
                    <a href="" class="a">
                        <img src="campana.png" alt="Buscador">
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
                <p>¿Aun no tienes una cuenta? <a href="registro.php">Registrate</a></p>
            </div>
        </div>   
        <script src="nav.js"></script>
    </header>
    <script>
        // JavaScript para manejar el menú desplegable

        document.getElementById("abrirMenu").addEventListener('click', function(){
        if (menuDesplegable.style.display === "none" || menuDesplegable.style.display === "") {
            menuDesplegable.style.display = "block";
        } else {
            menuDesplegable.style.display = "none";
        }
        });        
    </script>
    <section>
    <div class="rincon-vino">
        <h1 class="ricon">EL RINCON DEL VINO</h1>
    </div>
        <div class="present">
            <img class="imgInicial" src="vinos.jpg">
            <h1 class="titleOffer">Ofertas de vino tinto</h1>
        </div>
        <div class="pagPri">
            <div class="principal">
                <div class="intro"><p>Bienvenidos al rincon del vino, un apasionado destino para los amantes del vino y la exquisitez. nos enorgullece traerte una 
                    seccion cuidadosamente curada de vinos excepcionales de todo el mundo, brindandote una experiencia unica que combina la tradición vinicola con la tradicion contemporanea.
                </p> </div>
            </div>
            <div class="vinBox">
                <div class="vinProd">
                    <a href=""><img src="vinotinto.jpg" alt=""></a>
                    <h1>-PRECIO-</h1>
                    <a href=""><h5>-NOMBRE-</h5></a>
                    <p class="contVin">-CONTENIDO-</p>
                    <img src="" alt="">
                    <input type="number">
                    <img src="" alt="">
                    <button><img src="" alt="">Agregar</button>
                </div>
                <div class="vinProd">
                    <a href=""><img src="vinotinto.jpg" alt=""></a>
                    <h1>-PRECIO-</h1>
                    <a href=""><h5>-NOMBRE-</h5></a>
                    <p class="contVin">-CONTENIDO-</p>
                    <img src="" alt="">
                    <input type="number">
                    <img src="" alt="">
                    <button><img src="" alt="">Agregar</button>
                </div>
                <div class="vinProd">
                    <a href=""><img src="vinotinto.jpg" alt=""></a>
                    <h1>-PRECIO-</h1>
                    <a href=""><h5>-NOMBRE-</h5></a>
                    <p class="contVin">-CONTENIDO-</p>
                    <img src="" alt="">
                    <input type="number">
                    <img src="" alt="">
                    <button><img src="" alt="">Agregar</button>
                </div>
                <div class="vinProd">
                    <a href=""><img src="vinotinto.jpg" alt=""></a>
                    <h1>-PRECIO-</h1>
                    <a href=""><h5>-NOMBRE-</h5></a>
                    <p class="contVin">-CONTENIDO-</p>
                    <img src="" alt="">
                    <input type="number">
                    <img src="" alt="">
                    <button><img src="" alt="">Agregar</button>
                </div>
                <div class="vinProd">
                    <a href=""><img src="vinotinto.jpg" alt=""></a>
                    <h1>-PRECIO-</h1>
                    <a href=""><h5>-NOMBRE-</h5></a>
                    <p class="contVin">-CONTENIDO-</p>
                    <img src="" alt="">
                    <input type="number">
                    <img src="" alt="">
                    <button><img src="" alt="">Agregar</button>
                </div>
                <div class="vinProd">
                    <a href=""><img src="vinotinto.jpg" alt=""></a>
                    <h1>-PRECIO-</h1>
                    <a href=""><h5>-NOMBRE-</h5></a>
                    <p class="contVin">-CONTENIDO-</p>
                    <img src="" alt="">
                    <input type="number">
                    <img src="" alt="">
                    <button><img src="" alt="">Agregar</button>
                </div>
                <div class="vinProd">
                    <a href=""><img src="vinotinto.jpg" alt=""></a>
                    <h1>-PRECIO-</h1>
                    <a href=""><h5>-NOMBRE-</h5></a>
                    <p class="contVin">-CONTENIDO-</p>
                    <img src="" alt="">
                    <input type="number">
                    <img src="" alt="">
                    <button><img src="" alt="">Agregar</button>
                </div>
                <div class="vinProd">
                    <a href=""><img src="vinotinto.jpg" alt=""></a>
                    <h1>-PRECIO-</h1>
                    <a href=""><h5>-NOMBRE-</h5></a>
                    <p class="contVin">-CONTENIDO-</p>
                    <img src="" alt="">
                    <input type="number">
                    <img src="" alt="">
                    <button><img src="" alt="">Agregar</button>
                </div>
                <div class="vinProd">
                    <a href=""><img src="vinotinto.jpg" alt=""></a>
                    <h1>-PRECIO-</h1>
                    <a href=""><h5>-NOMBRE-</h5></a>
                    <p class="contVin">-CONTENIDO-</p>
                    <img src="" alt="">
                    <input type="number">
                    <img src="" alt="">
                    <button><img src="" alt="">Agregar</button>
                </div>
            </div>
        </div>
        <div class="carr">
            <div class="favMarc"><h1 class="h1Marc">ENCUENTRA TUS</h1><h1 class="h1Bord"> MARCAS FAVORITAS</h1></div>
            <div class="carrVin">
                <div class="carrVin-viewport">
                    <div class="carrVin-slides">
                        <div class="carrVin-slide active"><img src="Gato negro.jpg" alt="Imagen 1"></div>
                        <div class="carrVin-slide"><img src="vinotinto.jpg" alt="Imagen 2"></div>
                        <div class="carrVin-slide"><img src="Gato negro.jpg" alt="Imagen 3"></div>
                        <div class="carrVin-slide"><img src="vinotinto.jpg" alt="Imagen 4"></div>
                    </div>
                </div>
                <div class="buttons">
                    <button id="prevBtn" class="carrVin-button-left">🢀</button>            
                    <button id="nextBtn" class="carrVin-button-right">🢂</button>
                </div>
            </div>
        </div>
        <script src="carrousel.js"></script>
    </section>
    <!-- Footer -->
    <footer>
        <section class="section">
            <div class="divLog">
                <div class="log" ><img src="Rincon del vino/logo_png.png" alt=""></div>
                <h2>_________________</h2>
                <div class="div-one">
                    <div>
                        <a href="https://www.facebook.com/profile.php?id=61553443256669" class="b"><img src="rincon del vino/facebook.png" alt="facebook"></a>                        
                    </div>
                    <div>
                        <a href="https://www.instagram.com/" class="b"><img src="rincon del vino/instagram.png" alt="instagram"></a>
                    </div>
                    <div>
                        <a href="https://www.tiktok.com/@rincovino" class="b"><img src="rincon del vino/Tik tok.png" alt="Tik Tok"></a>        
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
                        <a href="" class="correo"><img src="rincon del vino/correo.png" alt="">
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
                    <a href="">
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





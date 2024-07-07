<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Política_Cookies.css">
    <link rel="shortcut icon" href="./rincon del vino/logo png.png" />
    <title>Política De Cookies</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul class="prueba">
                <a href=""><img src="rincon del vino/logo png.png" alt="El ricon del vino"></a>
                <a class="inicio" href="">Inicio<a>
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
            include_once('seccion.php');
            ?>
        </div>
        <script src="nav.js"></script>
    </header>
    <section >
        <div class="containerCookies">
            <h1 class="tituloCookies">Política de Cookies </h1>
            <P class="parrafoCookies">Última actualización: [29/11/2023]</P>
            <p class="parrafoCookies">Esta política de cookies explica cómo "El Rincón del Vino" utiliza cookies y tecnologías similares en nuestro sitio web.</p>
            <h3 class="subtituloCookies">¿Qué son las cookies?</h3>
            <p class="parrafoCookies">Las cookies son pequeños archivos de texto que se almacenan en tu dispositivo cuando visitas un sitio web. Estos archivos permiten que el sitio recuerde tus acciones y preferencias durante un período de tiempo, para que no tengas que introducir la misma información cada vez que vuelves o navegas entre páginas.</p>
            <h3 class="subtituloCookies">¿Cómo utilizamos las cookies?</h3>
            <p class="parrafoCookies">Utilizamos cookies para diversos fines, incluyendo:</p>
            <p class="parrafoCookies">- Mejorar la funcionalidad y rendimiento del sitio web.
                - Analizar cómo los usuarios interactúan con nuestro sitio para mejorar la experiencia del usuario.
                - Personalizar el contenido y la publicidad según tus intereses.
            </p>
            <h3 class="subtituloCookies">Tipos de Cookies que Utilizamos</h3>
            <p class="parrafoCookies">- *Cookies Esenciales:* Necesarias para el funcionamiento básico del sitio web.</p>
            <p class="parrafoCookies">- *Cookies de Rendimiento:* Nos ayudan a entender cómo interactúas con el sitio, para mejorar su rendimiento.</p>
            <p class="parrafoCookies">- *Cookies de Funcionalidad:* Permiten que el sitio recuerde tus preferencias y elecciones para proporcionar una experiencia más personalizada.</p>
            <p class="parrafoCookies">- *Cookies de Publicidad:* Utilizadas para mostrar anuncios relevantes para ti.</p>
            <h3 class="subtituloCookies">¿Cómo Puedes Gestionar las Cookies?</h3>
            <p class="parrafoCookies">Puedes gestionar tus preferencias de cookies a través de la configuración de tu navegador. Ten en cuenta que la desactivación de ciertas cookies puede afectar la funcionalidad del sitio.</p>
            <h3 class="subtituloCookies">Cambios en la Política de Cookies</h3>
            <p class="parrafoCookies">Nos reservamos el derecho de actualizar esta política en cualquier momento. Te recomendamos revisarla periódicamente para estar informado sobre cómo estamos utilizando las cookies.</p>
            <h3 class="subtituloCookies">Contacto</h3>
            <p class="parrafoCookies">Si tienes preguntas sobre nuestra política de cookies, por favor, contáctanos a través del correo electrónico.</p>
        </div
    </section>
    <!-- section de informacion final -->
    <section>
        <div class="info">
            <div class="h3">
                <a href=""> 
                    <h3>Productos</h3>
                </a>
                <a href="">
                    <h3>Quienes somos</h3>
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
                <a href="#">
                    <h3>Politicas de cookies</h3>
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
</body>
</html>
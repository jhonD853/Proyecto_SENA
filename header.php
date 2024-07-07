<nav class="navbar">
            <ul class="prueba">
                <a href=""><img src="logo_png.png" alt="El ricon del vino"></a>
                <a class="inicio" href="index2.php">Inicio<a>
                    <a href="#" id="abrirMenu" onclick="toggleMenu()">Productos</a>
                </ul>
    
                
            
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
    <h2>Bienvenido <span id="loggedInUsername">
        <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>
    </span></h2>
    <?php if (isset($_SESSION['username'])) : ?>
        <a href="perfil.php">Perfil</a><br>
        <a href="logout.php">Cerrar Sesión</a>
    <?php endif; ?>
</div>
        </div>   
        <script src="nav.js"></script>
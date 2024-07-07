<?php


include_once('abierta_seccion.php');
include_once('solicitar_dato.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./rincon del vino/logo png.png" />
    <link rel="stylesheet" href="perfil.css">

    <title>Rincon del vino - perfil</title>
</head>
<body>
    <header>
        <?php
include_once('header.php');
        ?>
    </header>
    <div class="rincon-vino">
        <h1 class="ricon">EL RINCON DEL VINO</h1>
    </div>
    


    <!-- Primer section del registro -->
    
   

    <section class="login">
            <div class="container_perfil">
                <ul class="container_ul">
                    <div>
                        <h3 class="hola">¡Hola!- <span id="loggedInUsername">
        <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>
    </span></h3>
                    </div>
                    <div class="cajaDireccion">
                        <a href="" class="infor_sub" >Perfil</a>
                        <img class="barra" src="rincon del vino/linea_horizontal.png" alt="">
                    </div>
                    <div class="cajaDireccion" >
                        <a href="" class="infor_sub" >Direcciones</a>
                        <img class="barra" src="rincon del vino/linea_horizontal.png" alt="">
                    </div>
                    <div class="cajaDireccion" >
                        <a href="" class="infor_sub" >Pedidios</a>
                        <img class="barra" src="rincon del vino/linea_horizontal.png" alt="">
                    </div>
                    <div class="cajaDireccion" >
                        <a href="update.php" class="infor_sub" >Actualizar datos</a>
                        <img class="barra" src="rincon del vino/linea_horizontal.png" alt="">
                    </div>
                </ul>
            </div>
        
        
            <div class="containerDatos">
    <div>
        <h1 class="texto_parrafo">Perfil</h1>
    </div>
    <section class="login_container">
        <div class="login_container_form">
            
                <!-- Agregamos un campo oculto para enviar el ID del usuario -->
                <input type="hidden" name="usuario_id" value="">

                <!-- Los campos para mostrar la información actual -->
                <input type="text" class="input-n" placeholder="Nombre" value="<?php echo obtenerDatoDeUsuario('nombre'); ?>" oninput="mostrarRegistro()" readonly>
                <input type="text" class="input-n" placeholder="Apellido" value="<?php echo obtenerDatoDeUsuario('apellido'); ?>" oninput="mostrarRegistro()" readonly>
                <input type="date" class="input-n" placeholder="Fecha de nacimiento" value="<?php echo obtenerDatoDeUsuario('fecha_nacimiento'); ?>" readonly>
                <input type="number" class="input-n" placeholder="Cedula" value="<?php echo obtenerDatoDeUsuario('documento'); ?>" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" readonly>
                <input type="number" class="input-n" placeholder="Telefono personal" value="<?php echo obtenerDatoDeUsuario('telefono'); ?>" maxlength="15" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" readonly>
                <input type="email" class="input" placeholder="E-mail" value="<?php echo obtenerDatoDeUsuario('email'); ?>" oninput="mostrarRegistro()" readonly>

            
        </div>
    </section>
</div>
    </section>

    <!-- Section de las redes socilaes  -->

    <footer>
        <section class="section">
            <div class="div">
                <div class="log">
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
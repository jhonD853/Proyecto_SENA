<?php
include_once('solicitar_dato.php');
?>
<div class="containerDatos">
    <div>
        <h1 class="texto_parrafo">Perfil</h1>
    </div>
    <section class="login_container">
        <div class="login_container_form">
            <form action="actualizar_perfil.php" method="post">
                <!-- Agregamos un campo oculto para enviar el ID del usuario -->
                <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuario_id']; ?>">

                <!-- Los campos para mostrar la información actual -->
                <input type="text" class="input-n" placeholder="Nombre" value="<?php echo obtenerDatoDeUsuario('nombre'); ?>" oninput="mostrarRegistro()">
                <input type="text" class="input-n" placeholder="Apellido" value="<?php echo obtenerDatoDeUsuario('apellido'); ?>" oninput="mostrarRegistro()">
                <input type="date" class="input-n" placeholder="Fecha de nacimiento" value="<?php echo obtenerDatoDeUsuario('fecha_nacimiento'); ?>">
                <input type="number" class="input-n" placeholder="Cedula" value="<?php echo obtenerDatoDeUsuario('documento'); ?>" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                <input type="number" class="input-n" placeholder="Telefono personal" value="<?php echo obtenerDatoDeUsuario('telefono'); ?>" maxlength="15" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                <input type="email" class="input" placeholder="E-mail" value="<?php echo obtenerDatoDeUsuario('email'); ?>" oninput="mostrarRegistro()">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </section>
</div>

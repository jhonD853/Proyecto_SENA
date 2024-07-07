<?php
session_start();
session_unset();
session_destroy();
 // Reemplazar con direccion pagina
header('Location: index3.php');
?>

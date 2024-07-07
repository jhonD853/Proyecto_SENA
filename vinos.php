<?php
include_once('concet.php');
// Suponiendo que ya tienes una conexión a la base de datos llamada $conexion

// Realizar una consulta para obtener los productos de la base de datos
$query = "SELECT id, nombre, descripcion, cantidad, imagen FROM Productos";
$result = mysqli_query($conn, $query);

if ($result) {
    // Iterar sobre los resultados y generar el HTML dinámicamente
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="vinProd">';
        echo '<a href=""><img src="' . $row['imagen'] . '" alt=""></a>';
        echo '<h1>-PRECIO-</h1>'; // Asegúrate de tener el campo de precio en tu base de datos
        echo '<a href=""><h5>' . $row['nombre'] . '</h5></a>';
        echo '<p class="contVin">' . $row['descripcion'] . '</p>';
        echo '<img src="" alt="">';
        echo '<input type="number" value="' . $row['cantidad'] . '">';
        echo '<img src="" alt="">';
        echo '<button><img src="" alt="">Agregar</button>';
        echo '</div>';
    }
} else {
    echo "Error al recuperar datos de la base de datos: " . mysqli_error($conn);
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>

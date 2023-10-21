<?php
require_once("dbconnect.php");

// Consulta SQL para obtener todos los usuarios
$sql = "SELECT * FROM productos";

// Ejecutar la consulta
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Lista de Productos</h1>";
    echo "<ul>";

    //A CAMBIAR 
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["nombre_usuario"] . "</li>";
    }
    echo "</ul>";

    //A CAMBIAR
} else {
    echo "<h1>No se encontraron usuarios.</h1>";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
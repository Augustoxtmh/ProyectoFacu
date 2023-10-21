<?php
require_once("dbconnect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos del formulario
    $name = $_POST['name'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];


    // Consulta SQL para insertar un nuevo usuario
    $sql = "INSERT INTO productos (nombre_producto, descripcion, precio, stock) VALUES (?, ?, ?, ?)";

    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Vincular los parámetros y ejecutar la consulta
        $stmt->bind_param("ssdi", $name, $descripcion, $precio, $stock);

        if ($stmt->execute()) {
            // Usuario creado exitosamente
            echo "Producto agregado exitosamente.";
        } else {
            // Error al crear el usuario
            echo "Error al agregar producto: " . $stmt->error;
        }

        // Cerrar la declaración
        $stmt->close();
    } else {
        // Error en la preparación de la consulta
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
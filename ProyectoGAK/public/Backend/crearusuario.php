<?php
require_once("dbconnect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];


    // Consulta SQL para insertar un nuevo usuario
    $sql = "INSERT INTO usuario (usuario, contraseña) VALUES (?, ?)";

    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Vincular los parámetros y ejecutar la consulta
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute()) {
            // Usuario creado exitosamente
            echo "Usuario creado exitosamente.";
        } else {
            // Error al crear el usuario
            echo "Error al crear el usuario: " . $stmt->error;
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
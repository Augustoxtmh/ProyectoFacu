<?php
require_once("dbconnect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos del formulario
    $name = $_POST['name'];
    $surename = $_POST['surename'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];


    // Consulta SQL para insertar un nuevo usuario
    $sql = "INSERT INTO clientes (Nombre, Apellido, Direccion, Correo, Telefono) VALUES (?, ?, ?, ?, ?)";

    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Vincular los parámetros y ejecutar la consulta
        $stmt->bind_param("sssss", $username, $password, $direccion, $correo, $telefono);

        if ($stmt->execute()) {
            // Usuario creado exitosamente
            echo "Cliente agregado exitosamente.";
        } else {
            // Error al crear el usuario
            echo "Error al agregar cliente: " . $stmt->error;
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
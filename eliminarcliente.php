<?php
require_once("dbconnect.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    // Obtener el ID del usuario a eliminar
    $userId = $_GET['id'];

    // Consulta SQL para eliminar un usuario por su ID
    $sql = "DELETE FROM cliente WHERE nombre = ?";

    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Vincular el parámetro y ejecutar la consulta
        $stmt->bind_param("s", $userId);

        if ($stmt->execute()) {
            // Usuario eliminado exitosamente
            echo "Usuario eliminado con éxito.";
        } else {
            // Error al eliminar el usuario
            echo "Error al eliminar el usuario: " . $stmt->error;
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

<?php
// Incluir el archivo de configuración de la base de datos
require_once "../config/database.php";

// Verificar si se ha recibido un ID a través de la URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Crear la consulta SQL para eliminar el item con el ID proporcionado
    $sql = "DELETE FROM items WHERE id=$id";
    
    // Ejecutar la consulta
    $conn->query($sql);
}

// Redireccionar a la página principal después de la eliminación
header("Location: index.php");
?>

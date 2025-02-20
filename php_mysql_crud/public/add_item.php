<?php
// Incluir el archivo de configuración de la base de datos
require_once "../config/database.php";

// Verificar si la solicitud se realizó mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nombre del item enviado desde el formulario
    $item = $_POST['item'];
    
    // Crear la consulta SQL para insertar un nuevo item en la base de datos
    $sql = "INSERT INTO items (nombre) VALUES ('$item')";
    
    // Ejecutar la consulta
    $conn->query($sql);
    
    // Redireccionar a la página principal después de la inserción
    header("Location: index.php");
}
?>
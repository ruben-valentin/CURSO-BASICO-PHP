<?php
// Incluir el archivo de configuración de la base de datos
require_once "../config/database.php";

// Verificar si el formulario fue enviado por método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos enviados desde el formulario
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    
    // Crear la consulta SQL para actualizar el item con el nuevo nombre
    $sql = "UPDATE items SET nombre='$nombre' WHERE id=$id";
    
    // Ejecutar la consulta
    $conn->query($sql);
    
    // Redireccionar a la página principal después de la actualización
    header("Location: index.php");
}

// Verificar si se ha recibido un ID a través de la URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Consultar el item en la base de datos por su ID
    $sql = "SELECT * FROM items WHERE id=$id";
    $result = $conn->query($sql);
    
    // Obtener los datos del item
    $item = $result->fetch_assoc();
} else {
    // Si no se recibe un ID, redireccionar a la página principal
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Item</title>
    <!-- Incluir Bootstrap para estilos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="text-center">Editar Item</h2>

        <!-- Formulario para editar el item -->
        <form action="edit_item.php" method="POST">
            <!-- Campo oculto para almacenar el ID del item -->
            <input type="hidden" name="id" value="<?= $item['id'] ?>">

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <!-- Campo de entrada para el nombre del item -->
                <input type="text" name="nombre" class="form-control" value="<?= $item['nombre'] ?>" required>
            </div>

            <!-- Botón para enviar el formulario y guardar cambios -->
            <button type="submit" class="btn btn-primary">Guardar cambios</button>

            <!-- Botón para cancelar y volver a la página principal -->
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>

</html>
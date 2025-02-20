<?php
// Incluir el archivo de configuración de la base de datos
require_once "../config/database.php";

// Consulta SQL para obtener todos los items de la base de datos
$sql = "SELECT * FROM items";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP + MySQL</title>
    <!-- Incluir Bootstrap para estilos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="text-center">Listado de Frutas</h2>

        <!-- Formulario para agregar un nuevo item -->
        <form action="add_item.php" method="POST" class="mb-3">
            <div class="input-group">
                <input type="text" name="item" class="form-control" placeholder="Nueva fruta" required>
                <button type="submit" class="btn btn-success">Agregar</button>
            </div>
        </form>

        <!-- Tabla para mostrar los items almacenados en la base de datos -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Recorrer cada fila de la base de datos y mostrarla en la tabla -->
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nombre'] ?></td>
                    <td>
                        <!-- Botón para editar el item -->
                        <a href="edit_item.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                        <!-- Botón para eliminar el item -->
                        <a href="delete_item.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
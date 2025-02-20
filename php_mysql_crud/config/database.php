<?php
// Definir constantes para la configuración de la base de datos
define('DB_HOST', 'localhost'); // Servidor de la base de datos
define('DB_USER', 'root'); // Usuario de la base de datos
define('DB_PASS', ''); // Contraseña de la base de datos
define('DB_NAME', 'crud_db'); // Nombre de la base de datos

// Crear conexión a la base de datos utilizando MySQLi
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error); // Mostrar mensaje de error y detener la ejecución
}
?>

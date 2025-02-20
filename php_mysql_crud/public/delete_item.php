<?php
require_once "../config/database.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM items WHERE id=$id";
    $conn->query($sql);
}

header("Location: index.php");
?>
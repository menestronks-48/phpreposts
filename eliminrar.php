<?php
include 'conect.php';
$id = $_GET['id'];
$sql = "DELETE FROM libros WHERE id=$id";
$conn->query($sql);
header("Location: index.php");
?>

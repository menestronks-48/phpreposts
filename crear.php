<?php include 'db.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $anio = $_POST['anio'];
    $editorial = $_POST['editorial'];

    $sql = "INSERT INTO libros (titulo, autor, anio_publicacion, editorial) 
            VALUES ('$titulo', '$autor', '$anio', '$editorial')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Libro</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Agregar Nuevo Libro</h1>
    <form method="POST">
        <input type="text" name="titulo" placeholder="Título" required>
        <input type="text" name="autor" placeholder="Autor" required>
        <input type="number" name="anio" placeholder="Año de Publicación" required>
        <input type="text" name="editorial" placeholder="Editorial" required>
        <button type="submit" class="btn">Guardar</button>
    </form>
</body>
</html>

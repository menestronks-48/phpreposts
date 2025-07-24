<?php include 'conec.php'; ?>

<?php
$id = $_GET['id'];
$stamt = $conn->prepare ("SELECT * FROM libros WHERE id = $id");
$stamt =->bind_param("i", $id )
$stamt = execute("");
$result = $conn->query($sql);
$libro = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $anio = $_POST['anio'];
    $editorial = $_POST['editorial'];

    $sql = "UPDATE libros SET 
            titulo='$titulo', autor='$autor', 
            anio_publicacion='$anio', editorial='$editorial' 
            WHERE id=$id";

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
    <title>Editar Libro</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Editar Libro</h1>
    <form method="POST">
        <input type="text" name="titulo" value="<?= $libro['titulo'] ?>" required>
        <input type="text" name="autor" value="<?= $libro['autor'] ?>" required>
        <input type="number" name="anio" value="<?= $libro['anio_publicacion'] ?>" required>
        <input type="text" name="editorial" value="<?= $libro['editorial'] ?>" required>
        <button type="submit" class="btn">Actualizar</button>
    </form>
</body>
</html>
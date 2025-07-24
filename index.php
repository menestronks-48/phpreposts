<?php include 'conec.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros Registrados</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt4">

    <h1 class="nb-4">Listado de Libros</h1>
    <a href="crear.php" class="btn btn-primary nb-3">Agregar Nuevo Libro</a>
    <table class="table table-bordered">
<thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Año</th>
            <th>Editorial</th>
            <th>Acciones</th>
        </tr>
</thead>     
<tbody>
        <?php
        $sql = "SELECT * FROM libros";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['titulo'] ?></td>
            <td><?= $row['autor'] ?></td>
            <td><?= $row['anio_publicacion'] ?></td>
            <td><?= $row['editorial'] ?></td>
            <td>
                <a href="edicion.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                <a href="eliminar.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este libro?')">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
        
</body>
</html>
    
<?php
include 'config_libros.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    try {
        $sql = "INSERT INTO libros (titulo, descripcion, precio, stock) VALUES (:titulo, :descripcion, :precio, :stock)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['titulo' => $titulo, 'descripcion' => $descripcion, 'precio' => $precio, 'stock' => $stock]);

        $message = 'Libro añadido con éxito!';
    } catch (PDOException $e) {
        $message = 'Error al añadir el libro: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Libro</title>
</head>
<body>
<h2>Añadir nuevo libro</h2>

<?php if (!empty($message)): ?>
    <p><?= $message ?></p>
<?php else: ?>
    <form action="create_libros.php" method="post">
    <label for="titulo">Titulo:</label>
    <input type="text" name="titulo" id="titulo" required>
    <br>
    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion"></textarea>
    <br>
    <label for="precio">Precio:</label>
    <input type="text" name="precio" id="precio" required>
    <br>
    <label for="stock">Stock:</label>
    <input type="number" name="stock" id="stock" required>
    <br>
    <input type="submit" value="Añadir Libro">
</form>
<?php endif; ?>
<button><a href="index_libros.php">Lista Libros</a></button>


</body>
</html>

<?php
include 'config_libros.php';

// Comprobando si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $id = $_POST['id'];

    $stmt = $pdo->prepare("UPDATE libros SET titulo = ?, precio = ? WHERE id = ?");
    $stmt->execute([$titulo, $precio, $id]);

    header('Location: index_libros.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM libros WHERE id = $id");
$libro = $stmt->fetch();

?>

<h2>Editar Jabón</h2>

<form action="edit_libros.php" method="post">
    <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
    Titulo: <input type="text" name="titulo" value="<?php echo $libro['titulo']; ?>"><br>
    Precio: $<input type="text" name="precio" value="<?php echo $libro['precio']; ?>"><br>
    <input type="submit" value="Guardar Cambios">
</form>

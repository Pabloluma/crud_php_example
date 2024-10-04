<?php
include 'config_libros.php';

// Comprobando si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $id = $_POST['id'];

    //Se Escribe la sentencia SQL y se guarda
    $stmt = $pdo->prepare("UPDATE libros SET titulo = ?, descripcion = ?, precio = ? WHERE id = ?");

    //Se ejecuta la query en la base de datos
    $stmt->execute([$titulo, $descripcion, $precio, $id]);

    header('Location: index_libros.php');
    exit;
}
//Obtenemos el id
$id = $_GET['id'];
//Obtenemos los datos de la base de datos
$stmt = $pdo->query("SELECT * FROM libros WHERE id = $id");
//Obtiene los datos de la consulta
$libro = $stmt->fetch();
?>

<h2>Editar Jabón</h2>

<form action="edit_libros.php" method="post">
    <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
    Titulo: <input type="text" name="titulo" value="<?php echo $libro['titulo']; ?>"><br>
    Descripcion: $<input type="text" name="descripcion" value="<?php echo $libro['descripcion']; ?>"><br>
    Precio: $<input type="text" name="precio" value="<?php echo $libro['precio']; ?>"><br>
    <input type="submit" value="Guardar Cambios">
</form>

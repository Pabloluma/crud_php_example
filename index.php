<?php
include 'config.php';

$stmt = $pdo->query('SELECT * FROM jabones');
$jabones = $stmt->fetchAll();
?>

<h2>Elige que quieres añadir:</h2>


<!-- Botón para crear un nuevo jabón -->
<a href="index_jabones.php">Jabón</a>
<a href="index_libros.php">Libro</a>

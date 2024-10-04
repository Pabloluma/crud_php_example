CREATE DATABASE libros_PHP;

USE libros_PHP;
CREATE TABLE libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL
);

INSERT INTO libros (titulo, descripcion, precio, stock) VALUES
('El niño del pijama de rayas', 'Libro comun', 5.99, 50),
('Seda', 'Jabón suavizante de rosas', 6.49, 40),
('La reina roja', 'Libro de thriller', 15.60, 100);
CREATE DATABASE libros_PHP;

USE libros_PHP;
CREATE TABLE libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL
);

INSERT INTO libros (nombre, descripcion, precio, stock) VALUES
('El niño del pijama de rayas', 'Libro comun', 5.99, 50),
('Seda', 'Jabón suavizante de rosas', 6.49, 40),
('Jabón de Menta', 'Jabón refrescante de menta', 5.89, 60),
('Jabón de Avena', 'Jabón exfoliante de avena', 5.49, 35),
('Jabón de Cítricos', 'Jabón energizante de cítricos', 6.99, 45),
('Jabón de Caléndula', 'Jabón calmante de caléndula', 6.79, 25),
('Jabón de Chocolate', 'Jabón nutritivo de chocolate', 7.49, 30),
('Jabón de Café', 'Jabón rejuvenecedor de café', 7.89, 20),
('Jabón de Almendras', 'Jabón hidratante de almendras', 6.19, 40),
('Jabón de Karité', 'Jabón suavizante de manteca de karité', 8.49, 15);
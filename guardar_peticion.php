<?php
// Conectar a la base de datos SQLite3
$db = new SQLite3('peticiones.db');

// Crear tabla si no existe
$db->exec('CREATE TABLE IF NOT EXISTS peticiones (id INTEGER PRIMARY KEY AUTOINCREMENT, nombre TEXT, email TEXT, texto TEXT)');

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$texto = $_POST['texto'];

// Insertar datos en la base de datos
$stmt = $db->prepare('INSERT INTO peticiones (nombre, email, texto) VALUES (:nombre, :email, :texto)');
$stmt->bindValue(':nombre', $nombre, SQLITE3_TEXT);
$stmt->bindValue(':email', $email, SQLITE3_TEXT);
$stmt->bindValue(':texto', $texto, SQLITE3_TEXT);
$stmt->execute();

// Cerrar la conexión
$db->close();

echo 'Éxito';
?>

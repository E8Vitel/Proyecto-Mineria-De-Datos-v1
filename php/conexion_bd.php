<?php
$host = 'localhost';
$usuario = 'root';
$contra = 'lilian'; // cambiar a string vacio en caso de no contar con contraseña
$baseDatos = 'quiz_interactivo';

$conn = new mysqli($host, $usuario, $contra, $baseDatos);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
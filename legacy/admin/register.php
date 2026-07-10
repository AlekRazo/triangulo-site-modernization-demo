<?php
// registration.php
// Always use PDO for secure, prepared SQL interactions
//$this->conexion = new mysqli("localhost", "triangulo", "5Trzca8malJ%", "triangul_db");
//$this->conexion = new mysqli("localhost", "root", "", "triangulo");
//$this->conexion = new mysqli("sql108.infinityfree.com", "if0_42354313", "RQ2dfsSQVhsaaR", "if0_42354313_triangulo");

$pdo = new PDO('mysql:host=sql108.infinityfree.com;dbname=if0_42354313_triangulo;charset=utf8mb4', 'if0_42354313', 'RQ2dfsSQVhsaaR');

$username = "admin";
$password = "bll5TriB@r";
$correo = "ic.manuel.razo@gmail.com";

// 1. Generate a secure, randomized one-way hash
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// 2. Prepare the SQL query to isolate user data from database logic
$stmt = $pdo->prepare("INSERT INTO usuario (nombre,password,correo) VALUES (:username, :password,:correo)");

try {
    $stmt->execute([
        ':username' => $username,
        ':password' => $hashedPassword,
        ':correo' => $correo
    ]);
    echo "User registered successfully.";
} catch (PDOException $e) {
    echo "Registration failed: " . $e->getMessage();
}
?>
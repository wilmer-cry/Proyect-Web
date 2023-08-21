<?php
require_once("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Cifrar la contraseña
    $hashedPassword = encryptPassword($password);

    $sql = "INSERT INTO usuarios (username, password, role) VALUES (?, ?, 'user')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $hashedPassword);

    if ($stmt->execute()) {
        $registrationMessage = "Registro exitoso. Ahora puedes iniciar sesión.";
    } else {
        $registrationMessage = "Error al registrar el usuario: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

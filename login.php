<?php
session_start();

require_once("conexion.php");

function encryptPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT id, password, role FROM usuarios WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $hashedPassword, $role);
        $stmt->fetch();

        if (password_verify($password, $hashedPassword)) {
            $_SESSION["user_id"] = $id;
            $_SESSION["user_role"] = $role;

            if ($role === "admin") {
                header("Location: admin_panel.php");
            } else {
                header("Location: user_dashboard.php");
            }
            exit();
        } else {
            $error = "Credenciales inválidas";
        }
    } else {
        $error = "Credenciales inválidas";
    }

    $stmt->close();
}

$conn->close();
?>


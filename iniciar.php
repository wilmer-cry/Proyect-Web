<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión / Registrarse</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php if(isset($loginError)) { echo "<p>$loginError</p>"; } ?>
    <form method="POST" action="login.php">
        <label>Usuario: <input type="text" name="username"></label><br>
        <label>Contraseña: <input type="password" name="password"></label><br>
        <input type="submit" value="Iniciar Sesión">
    </form>

    <h2>Registrarse</h2>
    <?php if(isset($registrationMessage)) { echo "<p>$registrationMessage</p>"; } ?>
    <form method="POST" action="registrar.php">
        <label>Usuario: <input type="text" name="username"></label><br>
        <label>Contraseña: <input type="password" name="password"></label><br>
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>

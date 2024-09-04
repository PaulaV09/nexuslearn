<?php

    session_start();

    if(isset($_SESSION['email'])){
        header("location: SesionAbierta.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexusLearn</title>
    <link rel="shortcut icon" href="./images/Favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/styles-login.css">
</head>
<body>
    <div class="form">
        <h1 class="title">Inicio de Sesión</h1>
        <form action="php/login_usuario_be.php" method="post">
            <div class="username">
                <input type="text" name="email" required>
                <label>Correo:</label>
            </div>
            <div class="password">
                <input type="password" name="contrasena" required>
                <label>Contraseña:</label>
            </div>
            <div class="remember">¿Olvido su contraseña?</div>
            <input type="submit" value="Iniciar">
            <div class="signin">
                Quiero hacer el <a href="../nexuslearn/signin.php">registro</a>
            </div>
        </form>
    </div>
</body>
</html>
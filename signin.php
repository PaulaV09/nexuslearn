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
    <link rel="stylesheet" href="./css/styles-signin.css">
</head>
<body>
    <div class="container">
        <form action="php/registro_usuario_be.php" method="post">
            <h2>Registro</h2>
            <div class="content">
                <div class="input-box">
                    <label for="name">Nombre</label>
                    <input type="text" placeholder="Ingresa el nombre" name="nombre" required>
                </div>
                <div class="input-box">
                    <label for="username">Apellido</label>
                    <input type="text" placeholder="Ingresa el apellido" name="apellido" required>
                </div>
                <div class="input-box">
                    <label for="email">Email institucional</label>
                    <input type="email" placeholder="Ingresa el correo institucional" name="email" required>
                </div>
                <div class="input-box">
                    <label for="password">Contraseña</label>
                    <input type="password" placeholder="Ingresa la nueva contraseña" name="contrasena" required>
                </div>
                <div class="input-box">
                    <label for="Cpassword">Confirmar contraseña</label>
                    <input type="password" placeholder="Confirma la contraseña" name="c_contrasena" required>
                </div>
                <span class="gender-title">Género</span>
                <div class="gender-category">
                    <input type="radio" name="genero" id="hombre" value="Hombre" required>
                    <label for="hombre">Hombre</label>
                    
                    <input type="radio" name="genero" id="mujer" value="Mujer">
                    <label for="mujer">Mujer</label>
                    
                    <input type="radio" name="genero" id="otro" value="Otro">
                    <label for="otro">Otro</label>
                </div>
                <div class="button-container">
                    <button type="submit">Registrarse</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
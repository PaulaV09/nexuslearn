<?php

    session_start();

    include 'conexion_be.php';

    // Verificar que el email y la contraseña estén definidos
    if (isset($_POST['email']) && isset($_POST['contrasena'])) {
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];

        // Encriptar la contraseña ingresada antes de compararla
        $contrasena = hash('sha512', $contrasena);

        // Consulta para verificar las credenciales
        $validar_login = mysqli_query($conexion, "SELECT id FROM usuarios WHERE email='$email' AND contrasena='$contrasena'");

        if (mysqli_num_rows($validar_login) > 0) {
            // Obtener el id del usuario
            $usuario = mysqli_fetch_assoc($validar_login);
            $id_usuario = $usuario['id'];

            // Iniciar sesión y redirigir al usuario a la página de sesión abierta
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $id_usuario;
            header("Location: ../SesionAbierta.php");
            exit();
        } else {
            echo '
            <script>
                alert("Usuario o contraseña incorrectos");
                window.location = "../login.php";    
            </script>';
            exit();
        }
    } else {
        echo '
        <script>
            alert("Por favor, complete todos los campos.");
            window.location = "../login.php";
        </script>';
        exit();
    }

?>
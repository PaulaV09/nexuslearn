<?php

session_start();
include 'conexion_be.php';

// Verificar que el email y la contraseña estén definidos
if (isset($_POST['email']) && isset($_POST['contrasena'])) {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    // Consulta para obtener el hash de la contraseña almacenada en la base de datos
    $query = "SELECT id, contrasena FROM usuarios WHERE email = ?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        $hashedPassword = $usuario['contrasena'];

        // Verificar la contraseña ingresada usando password_verify()
        if (password_verify($contrasena, $hashedPassword)) {
            // Iniciar sesión y redirigir al usuario a la página de sesión abierta
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $usuario['id'];
            header("Location: ../vistas/SesionAbierta.php");
            exit();
        } else {
            echo '
            <script>
                alert("Usuario o contraseña incorrectos");
                window.location = "../vistas/login.php";    
            </script>';
            exit();
        }
    } else {
        echo '
        <script>
            alert("Usuario o contraseña incorrectos");
            window.location = "../vistas/login.php";    
        </script>';
        exit();
    }

    $stmt->close();
} else {
    echo '
    <script>
        alert("Por favor, complete todos los campos.");
        window.location = "../vistas/login.php";
    </script>';
    exit();
}

$conexion->close();

?>
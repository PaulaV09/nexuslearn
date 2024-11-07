<?php

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$c_contrasena = $_POST['c_contrasena'];
$genero = $_POST['genero'];

// Validar que las contraseñas coincidan
if ($contrasena !== $c_contrasena) {
    echo "<script>
            alert('Las contraseñas no coinciden.');
            window.history.back(); // Volver al formulario
        </script>";
    exit();
}

// Validar que el email termine con @unab.edu.co
if (!preg_match("/@unab\.edu\.co$/", $email)) {
    echo "<script>
            alert('El correo debe terminar con @unab.edu.co.');
            window.history.back(); // Volver al formulario
        </script>";
    exit();
}

// Validar que el email no esté ya registrado
$check_email_query = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conexion->prepare($check_email_query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>
            alert('Este correo ya está registrado.');
            window.location = '../vistas/login.php'; // Redirigir al login
        </script>";
    exit();
}

// Encriptar la contraseña con bcrypt
$hashedPassword = password_hash($contrasena, PASSWORD_BCRYPT);

// Insertar usuario en la base de datos sin la confirmación de contraseña
$query = "INSERT INTO usuarios(nombre, apellido, email, contrasena, genero) 
            VALUES (?, ?, ?, ?, ?)";
$stmt = $conexion->prepare($query);
$stmt->bind_param("sssss", $nombre, $apellido, $email, $hashedPassword, $genero);

if ($stmt->execute()) {
    echo '
        <script>
            alert("Usuario guardado exitosamente");
            window.location = "../vistas/login.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("No se registró correctamente. Inténtalo de nuevo.");
            window.location = "../vistas/login.php";
        </script>
    ';
}

$stmt->close();
$conexion->close();

?>
<?php

    include 'conexion_be.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    //Encriptamiento contrasena
    $contrasena = hash('sha512', $contrasena);
    $c_contrasena = $_POST['c_contrasena'];
    //Encriptamiento confirmar contrasena
    $c_contrasena = hash('sha512', $c_contrasena);
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
    $check_email_query = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conexion, $check_email_query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>
                alert('Este correo ya está registrado.');
                window.location = '../vistas/login.php'; // Redirigir al login
            </script>";
        exit();
    }

    $query = "INSERT INTO usuarios(nombre, apellido, email, contrasena, c_contrasena, genero) 
                VALUE('$nombre', '$apellido','$email', '$contrasena', '$c_contrasena', '$genero')";


    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar){
        echo '
            <script>
                alert("Usuario guardado exitosamente");
                window.location = "../vistas/login.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("No se registro correctamente. Intentalo de nuevo");
                window.location = "../vistas/login.php";
            </script>
        ';
    };

    mysqli_close($conexion);

?>
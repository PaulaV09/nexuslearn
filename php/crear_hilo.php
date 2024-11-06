<?php

session_start();

include "conexion_be.php";

if (isset($_SESSION['email'])) {
    $usuarioID = $_SESSION['id']; // Obtén el ID del usuario de la sesión
    $titulo = mysqli_real_escape_string($conexion, $_POST['titulo']);
    $contenido = mysqli_real_escape_string($conexion, $_POST['contenido']);

    // Insertar el hilo en la base de datos
    $insertarHilo = "INSERT INTO hilo (titulo, contenido, f_creacion, correo_id) 
                     VALUES ('$titulo', '$contenido', NOW(), '$usuarioID')";
    if (mysqli_query($conexion, $insertarHilo)) {
        header("Location: ../vistas/foro.php");
    } else {
        echo "Error al publicar el hilo";
    }
} else {
    echo "Debes iniciar sesión para publicar un hilo";
}

?>
<?php
session_start();
include "conexion_be.php"; // Conexión a la base de datos

if (isset($_SESSION['email'])) {
    $usuarioID = $_SESSION['id']; // Obtener ID del usuario de la sesión
    $hiloID = $_POST['hilo_id'];
    $contenido = mysqli_real_escape_string($conexion, $_POST['contenido']);

    $insertarRespuesta = "INSERT INTO respuesta (contenido, f_creacion, correo_id, hilo_id) 
                          VALUES ('$contenido', NOW(), '$usuarioID', '$hiloID')";
    if (mysqli_query($conexion, $insertarRespuesta)) {
        header("Location: ../ver_hilo.php?id=$hiloID");
    } else {
        echo "Error al publicar la respuesta";
    }
} else {
    echo "Debes iniciar sesión para responder";
}
?>

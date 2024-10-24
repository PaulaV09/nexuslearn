<?php

include 'conexion_be.php';

$titulo = $_POST["titulo"];
$tema = $_POST["tema"];
$autor = $_POST["autor"];
$opciones = $_POST["opciones"];
$descripcion = $_POST["descripcion"];

if ($_FILES["archivo"]) {
    // Obtener el nombre base del archivo
    $nombre_base = basename($_FILES["archivo"]["name"]);
    
    // Crear un nombre único usando la fecha y el nombre original del archivo
    $nombre_final = date("m-d-y-H-i-s") . "-" . $nombre_base;
    
    // Ruta donde se guardará el archivo (en la carpeta files en la raíz del proyecto)
    $ruta = "../files_quimica/" . $nombre_final;
    
    // Mover el archivo subido a la ruta especificada
    $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
    
    if ($subirarchivo) {
        // Inserción en la base de datos con la ruta del archivo
        $insertarSQL = "INSERT INTO r_quimica(titulo, tema, autor, opciones, descripcion, archivo) 
                        VALUES ('$titulo', '$tema', '$autor', '$opciones', '$descripcion', '$ruta')";
        $resultado = mysqli_query($conexion, $insertarSQL);
        
        if ($resultado) {
            echo "<script>alert('Recurso subido correctamente');
            window.location='../r_program.php'
            </script>";
        } else {
            printf("Error en la inserción: %s\n", mysqli_error($conexion));
        }
    } else {
        echo "Error al subir el archivo";
    }
} else {
    echo "Error: No se seleccionó ningún archivo";
}

?>

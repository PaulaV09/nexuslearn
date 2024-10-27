<?php
if (isset($_GET['archivo'])) {
    $nombreArchivo = $_GET['archivo'];
    
    // Ruta base donde se almacenan los archivos
    $rutaBase = "../files_mate/";
    $rutaArchivo = $rutaBase . $nombreArchivo; 

    if (file_exists($rutaArchivo)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($rutaArchivo) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($rutaArchivo));
        readfile($rutaArchivo);
        exit;
    } else {
        echo "No se pudo descargar. No hay ningún archivo.";
    }
} else {
    echo "No se especificó ningún archivo.";
}
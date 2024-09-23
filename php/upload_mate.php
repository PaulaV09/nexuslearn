<?php
$archivos = $_FILES['files'];
$subidos = [];

foreach ($archivos['tmp_name'] as $indice => $tmp_name) {
    $nombre_real = $archivos['name'][$indice];
    $ruta_destino = "../uploads_mate/$nombre_real";
    
    if (move_uploaded_file($tmp_name, $ruta_destino)) {
        $subidos[] = $ruta_destino;
    }
}

echo json_encode($subidos);

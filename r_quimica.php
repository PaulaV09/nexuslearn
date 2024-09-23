<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexusLearn</title>
    <link rel="shortcut icon" href="./images/Favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/estilorepo.css">
</head>
<body>
    <header class="header">
        <nav class="nav--2">
            <div class="nav_log">
                <h2 class="nav_title">NexusLearn</h2>
            </div>
            <ul class="nav_link nav_link--menu">
                <li class="nav_items">
                    <a href="../nexuslearn/SesionAbierta.php" class="nav_links">Inicio</a>
                </li>
                <li class="nav_items">
                    <a href="../nexuslearn/foro.php" class="nav_links">Foro</a>
                </li>
                <li class="nav_items">
                    <a href="../nexuslearn/repositorio.php" class="nav_links">Repositorio</a>
                    <ul class="vertical_nav">
                        <li class="nav_items"><a href="#" class="nav_link--v">Matematicas</a></li>
                        <li class="nav_items"><a href="#" class="nav_link--v">Fisica</a></li>
                        <li class="nav_items"><a href="#" class="nav_link--v">Quimica</a></li>
                        <li class="nav_items"><a href="#" class="nav_link--v">Programación</a></li>
                    </ul>
                </li>
                <li class="nav_items">
                    <a href="../nexuslearn/reuniones.php" class="nav_links">Reuniones</a>
                </li>
                <li class="nav_items">
                    <a href="php/cerrar_sesion.php" class="nav_links">Cerrar Sesión</a>
                </li>

                <img src="./images/close.svg" alt="Cerrar" class="nav_close">
            </ul>

            <div class="nav_menu">
                <img src="./images/menumovil.svg" alt="Menú" class="nav_img">
            </div>
        </nav>
    </header>
    <main>
        <h2>Cargar archivos</h2>
        <div id="dropzone">
            <p>Arrastra los archivos a esta zona <br> 
                <label for="archivos">o haga click aquí</label>
            </p>
            <input type="file" id="archivos" name="archivos" multiple>
        </div>
        <ul id="lista_archivos">
        <?php
            $contenido = glob("uploads_quimica/*");
            foreach ($contenido as $archivo) {
                $nombreArchivo = basename($archivo);
                echo "<li><a href='$archivo' download>$nombreArchivo</a></li>";
            }
        ?>
        </ul>
    </main>

    <script src="js/repo_quimica.js"></script>
</body>
</html>
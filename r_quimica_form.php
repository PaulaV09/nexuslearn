<?php
session_start();

// Verificar si la sesión está iniciada
if (!isset($_SESSION['email'])) {
    echo '
        <script>
            alert("Debes iniciar sesión");
            window.location = "index.html";
        </script>
    ';
    session_destroy();
    die();
}
?>
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
                        <li class="nav_items"><a href="../nexuslearn/r_mate.php" class="nav_link--v">Matematicas</a></li>
                        <li class="nav_items"><a href="../nexuslearn/r_fisica.php" class="nav_link--v">Fisica</a></li>
                        <li class="nav_items"><a href="../nexuslearn/r_quimica.php" class="nav_link--v">Quimica</a></li>
                        <li class="nav_items"><a href="../nexuslearn/r_program.php" class="nav_link--v">Programación</a></li>
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
        <div class="container-form">
            <div class="info-form">
                <h2>Comparte tus recursos académicos de química</h2>
                <p> Sube tus archivos para compartir con la comunidad estudiantil y contribuir al aprendizaje colaborativo. Asegúrate de que los materiales que compartes sean útiles y estén relacionados con nuestros temas de estudio. <b>¡Tu contribución puede marcar la diferencia para otros!</b> </p>
            </div>
            <div class="content-form">
                <div class="input-box">
                    <label for="title">Titulo</label>
                    <input type="text" name="Titulo" placeholder="Ingresa el titulo del recurso" required>
                </div>
                <div class="input-box">
                    <label for="theme">Tema</label>
                    <input type="text" name="Tema" placeholder="Ingresa el tema del recurso" required>
                </div>
                <div class="input-box">
                    <label for="author">Autor</label>
                    <input type="text" name="Autor" placeholder="Ingresa el autor del recurso" required>
                </div>
                <div class="input-box">
                    <label for="opciones"> Elige el tipo de recurso: </label>
                    <select name="opciones" id="opciones">
                        <option value="opcion1">Seleccione una opción</option>
                        <option value="opcion2">Libro</option>
                        <option value="opcion3">Documento</option>
                        <option value="opcion4">Video</option>
                        <option value="opcion5">Diapositivas</option>
                        <option value="opcion6">Link</option>
                        <option value="opcion7">Proyecto</option>
                        <option value="opcion8">Notas personales</option>
                        <option value="opcion9">Articulo</option>
                        <option value="opcion10">Otro</option>
                    </select>
                </div>
                <div class="input-box">
                    <label for="description">Descripción</label>
                    <textarea name="descripcion" class="campo" placeholder="Ingresa una descripción del recurso"></textarea>
                </div>
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
                <div class="button-container button-subir">
                    <button type="submit">Subir recurso</button>
                </div>
                <div class="button-container button-cancelar">
                    <button type="submit">Cancelar</button>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <section class="footer_container container">
            <nav class="nav nav--footer">
                <h2 class="footer_title">NexusLearn</h2>
                <ul class="nav_link nav_link--footer">
                    <li class="nav_items">
                        <a href="../nexuslearn/SesionAbierta.php" class="nav_links">Inicio</a>
                    </li>
                    <li class="nav_items">
                        <a href="../nexuslearn/foro.php" class="nav_links">Foro</a>
                    </li>
                    <li class="nav_items">
                        <a href="../nexuslearn/repositorio.php" class="nav_links">Repositorio</a>
                    </li>
                    <li class="nav_items">
                        <a href="../nexuslearn/reuniones.php" class="nav_links">Reuniones</a>
                    </li>
                </ul>
            </nav>
        </section>
        <section class="footer_copy container">
            <div class="footer_social">
                <a href="#" class="footer_icons">
                    <img src="./images/face.svg" alt="Facebook" class="footer_img">
                    <img src="./images/ig.svg" alt="Instagram" class="footer_img">
                    <img src="./images/page.svg" alt="Pagina web UNAB" class="footer_img">
                </a>
            </div>
            <h3 class="footer_copyright">Derechos reservados &copy;</h3>
        </section>
    </footer>

    <script src="js/repo_quimica.js"></script>
</body>
</html>
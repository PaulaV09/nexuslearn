<?php

include '../nexuslearn/php/conexion_be.php';

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

// Verificar la conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Consulta para obtener los recursos
$consulta = mysqli_query($conexion, "SELECT * FROM r_fisica");

if (!$consulta) {
    die("Error en la consulta: " . mysqli_error($conexion));
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
    <link rel="stylesheet" href="./css/styles-repo.css">
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
        <section class="questions container">
            <h2 class="subtitle">Repositorio Física</h2>
            <p class="questions__paragraph">Aquí podrás encontrar libros, documentos, link, videos, etc sobre Física</p>
            <div class="a_container">
                <a href="../nexuslearn/r_fisica_form.php" class="cta cta_repo">Subir recurso</a>
            </div>
                <section class="questions__container container_repo">
                    <article class="questions__padding">
                        <div class="questions__answer">
                            <table class="repositorio_table">
                                <?php while ($fila = mysqli_fetch_assoc($consulta)) {
                                ?>
                                <tr>
                                    <td class="td_titles">Título</td>
                                    <td class="td_content"><?php echo $fila['titulo']; ?></td>
                                    <td rowspan="6" class="td_row">
                                        <span class="td_download">
                                            <a href="../nexuslearn/php/download_fisica.php?archivo=<?php echo urlencode(basename($fila['archivo'])); ?>">
                                                <img src="./images/download.svg" class="td_img" alt="Descargar">
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td_titles td">Tema</td>
                                    <td class="td_content td"><?php echo $fila['tema']; ?></td>
                                </tr>
                                <tr>
                                    <td class="td_titles td">Autor</td>
                                    <td class="td_content td"><?php echo $fila['autor']; ?></td>
                                </tr>
                                <tr>
                                    <td class="td_titles td">Tipo de recurso</td>
                                    <td class="td_content td"><?php echo $fila['opciones']; ?></td>
                                </tr>
                                <tr>
                                    <td class="td_titles td">Descripción</td>
                                    <td class="td_content td_descrip"><?php echo $fila['descripcion']; ?></td>
                                </tr>
                                <tr>
                                    <td class="td_titles td">Nombre del recurso</td>
                                    <td class="td_content td"><?php
                                                
                                        $archivoConFecha = $fila['archivo'];
                                                
                                        $nombreArchivo = preg_replace('/^..\/files_fisica\/\d{2}-\d{2}-\d{2}-\d{2}-\d{2}-\d{2}-/', '', $archivoConFecha);
                                        echo $nombreArchivo;
                                        ?>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                    </article>
                </section>
            </section>
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

    <script src="./js/menu.js"></script>
    
    <script type="text/javascript">
        (function(d, t) {
            var v = d.createElement(t), s = d.getElementsByTagName(t)[0];
            v.onload = function() {
              window.voiceflow.chat.load({
                verify: { projectID: '66c54c8b3ec8d19bd5bcb054' },
                url: 'https://general-runtime.voiceflow.com',
                versionID: 'production'
              });
            }
            v.src = "https://cdn.voiceflow.com/widget/bundle.mjs"; v.type = "text/javascript"; s.parentNode.insertBefore(v, s);
        })(document, 'script');
      </script>
</body>
</html>

<?php
// Cerrar la conexión
mysqli_close($conexion);
?>
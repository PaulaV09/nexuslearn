<?php

session_start();

include '../nexuslearn/php/conexion_be.php';

if (!isset($_SESSION['email'])) {
    echo '<script>alert("Debes iniciar sesión"); window.location = "index.php";</script>';
    session_destroy();
    die();
}

$hiloID = $_GET['id'];

// Obtener datos del hilo
$consultaHilo = "SELECT h.titulo, h.contenido, h.f_creacion, u.email AS autor
                 FROM hilo h
                 JOIN usuarios u ON h.correo_id = u.id
                 WHERE h.id = $hiloID";
$resultadoHilo = mysqli_query($conexion, $consultaHilo);
$hilo = mysqli_fetch_assoc($resultadoHilo);

// Obtener respuestas del hilo
$consultaRespuestas = "SELECT r.contenido, r.f_creacion, u.email AS autor
                       FROM respuesta r
                       JOIN usuarios u ON r.correo_id = u.id
                       WHERE r.hilo_id = $hiloID
                       ORDER BY r.f_creacion ASC";
$resultadoRespuestas = mysqli_query($conexion, $consultaRespuestas);
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
        <h2><?php echo htmlspecialchars($hilo['titulo']); ?></h2>
        <p><?php echo htmlspecialchars($hilo['contenido']); ?></p>
        <small>Publicado por <?php echo htmlspecialchars($hilo['autor']); ?> el <?php echo $hilo['f_creacion']; ?></small>

        <h3>Respuestas</h3>
        <?php while ($respuesta = mysqli_fetch_assoc($resultadoRespuestas)) { ?>
            <div>
                <p><?php echo htmlspecialchars($respuesta['contenido']); ?></p>
                <small>Comentado por <?php echo htmlspecialchars($respuesta['autor']); ?> el <?php echo $respuesta['f_creacion']; ?></small>
            </div>
        <?php } ?>

        <!-- Formulario para responder -->
        <section>
            <h4>Agregar una respuesta</h4>
            <form action="../nexuslearn/php/crear_respuesta.php" method="POST">
                <textarea name="contenido" required></textarea>
                <input type="hidden" name="hilo_id" value="<?php echo $hiloID; ?>">
                <button type="submit">Responder</button>
            </form>
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
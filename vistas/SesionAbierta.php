<?php

session_start();

// Verificar si la sesión está iniciada
if (!isset($_SESSION['email'])) {
    echo '
        <script>
            alert("Debes iniciar sesión");
            window.location = "index.php";
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
    <link rel="shortcut icon" href="../images/Favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>

    <header class="hero">
        <nav class="nav container">
            <div class="nav_log">
                <h2 class="nav_title">NexusLearn</h2>
            </div>
            <ul class="nav_link nav_link--menu">
                <li class="nav_items">
                    <a href="../vistas/SesionAbierta.php" class="nav_links">Inicio</a>
                </li>
                <li class="nav_items">
                    <a href="../vistas/foro.php" class="nav_links">Foro</a>
                </li>
                <li class="nav_items">
                    <a href="../vistas/repositorio.php" class="nav_links">Repositorio</a>
                    <ul class="vertical_nav">
                        <li class="nav_items"><a href="../vistas/r_mate.php" class="nav_link--v">Matematicas</a></li>
                        <li class="nav_items"><a href="../vistas/r_fisica.php" class="nav_link--v">Fisica</a></li>
                        <li class="nav_items"><a href="../vistas/r_quimica.php" class="nav_link--v">Quimica</a></li>
                        <li class="nav_items"><a href="../vistas/r_program.php" class="nav_link--v">Programación</a></li>
                    </ul>
                </li>
                <li class="nav_items">
                    <a href="../vistas/reuniones.php" class="nav_links">Reuniones</a>
                </li>
                <li class="nav_items">
                    <a href="../php/cerrar_sesion.php" class="nav_links">Cerrar Sesión</a>
                </li>

                <img src="../images/close.svg" alt="Cerrar" class="nav_close">
            </ul>

            <div class="nav_menu">
                <img src="../images/menumovil.svg" alt="Menú" class="nav_img">
            </div>
        </nav>

        <section class="hero_container container">
            <h1 class="hero_title">Plataforma colaborativa de aprendizaje</h1>
            <p class="hero_paragraph">Comparte tus conocimientos con otros estudiantes y resuleve las dudas que tengas.</p>
        </section>
    </header>

    <main>
        <section class="container about">
            <h2 class="subtitle">¿Qué puedes hacer en esta plataforma?</h2>

            <div class="about_main">
                <article class="about_icons">
                    <img src="../images/chatbot.svg" alt="Chatbot" class="about_icon">
                    <h3 class="about_title">ChatBot</h3>
                    <p class="about_paragraph">Podrás resolver dudas que tengas del ciclo básico de ingeniería.</p>
                </article>
                <article class="about_icons">
                    <img src="../images/foro.svg" alt="Chatbot" class="about_icon">
                    <h3 class="about_title">Foro</h3>
                    <p class="about_paragraph">Tendrás un foro interactivo con otros estudiantes, donde se podrán ayudar mutuamente para resolver dudas o preguntas.</p>
                </article>
                <article class="about_icons">
                    <img src="../images/upload.svg" alt="Chatbot" class="about_icon">
                    <h3 class="about_title">Repositorio</h3>
                    <p class="about_paragraph">Podrás subir los documentos, textos, libros, etc que tengas y así compartilos con los demás estudiantes.</p>
                </article>
                <article class="about_icons">
                    <img src="../images/videollamadas.svg" alt="Chatbot" class="about_icon">
                    <h3 class="about_title">Reuniones Virtuales</h3>
                    <p class="about_paragraph">Tendrás un espacio virtual para reunirte con tus compañeros y ayudarsen a resolver dudas academicas o estudiar.</p>
                </article>
            </div>
        </section>
    </main>
    <footer class="footer">
        <section class="footer_container container">
            <nav class="nav nav--footer">
                <h2 class="footer_title">NexusLearn</h2>
                <ul class="nav_link nav_link--footer">
                    <li class="nav_items">
                        <a href="../vistas/SesionAbierta.php" class="nav_links">Inicio</a>
                    </li>
                    <li class="nav_items">
                        <a href="../vistas/foro.php" class="nav_links">Foro</a>
                    </li>
                    <li class="nav_items">
                        <a href="../vistas/repositorio.php" class="nav_links">Repositorio</a>
                    </li>
                    <li class="nav_items">
                        <a href="../vistas/reuniones.php" class="nav_links">Reuniones</a>
                    </li>
                </ul>
            </nav>
        </section>
        <section class="footer_copy container">
            <div class="footer_social">
                <a href="#" class="footer_icons">
                    <img src="../images/face.svg" alt="Facebook" class="footer_img">
                    <img src="../images/ig.svg" alt="Instagram" class="footer_img">
                    <img src="../images/page.svg" alt="Pagina web UNAB" class="footer_img">
                </a>
            </div>
            <h3 class="footer_copyright">Derechos reservados &copy;</h3>
        </section>
    </footer>

    <script src="../js/menu.js"></script>

    <script type="text/javascript">
        (function(d, t) {
            var v = d.createElement(t),
                s = d.getElementsByTagName(t)[0];
            v.onload = function() {
                window.voiceflow.chat.load({
                    verify: {
                        projectID: '66c54c8b3ec8d19bd5bcb054'
                    },
                    url: 'https://general-runtime.voiceflow.com',
                    versionID: 'production'
                });
            }
            v.src = "https://cdn.voiceflow.com/widget/bundle.mjs";
            v.type = "text/javascript";
            s.parentNode.insertBefore(v, s);
        })(document, 'script');
    </script>
</body>

</html>
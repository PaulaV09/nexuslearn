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
        <section class="container">
            <h2 class="subtitle">Foro Académico</h2>
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
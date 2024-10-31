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
        <section class="meet container">
            <h2 class="subtitle">Reunione Virtuales</h2>
            <p class="hero_paragraph">Aquí podrás reunirte con tus amigos y compañeros de clase para estudiar o ayudarsen a solucionar las dudas academicas que tengan. </p>

            <div class="meet__table">
                <div class="meet__element">
                    <h3 class="meet__meet">Sala 1</h3>

                    <div class="meet__items">
                        <p class="meet__features">De 2 a 4 participantes</p>
                        <p class="meet__features">Categoría libre</p>
                        <p class="meet__features">Tiempo limitado</p>
                    </div>

                    <a href="https://webcolaborativa.whereby.com/sala13061deb3-47e7-469b-86ed-3fd348fed265?roomKey=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJtZWV0aW5nSWQiOiI5MDAzMzI2OSIsInJvb21SZWZlcmVuY2UiOnsicm9vbU5hbWUiOiIvc2FsYTEzMDYxZGViMy00N2U3LTQ2OWItODZlZC0zZmQzNDhmZWQyNjUiLCJvcmdhbml6YXRpb25JZCI6IjI1NjEyOCJ9LCJpc3MiOiJodHRwczovL2FjY291bnRzLnNydi53aGVyZWJ5LmNvbSIsImlhdCI6MTcyNDk2NzI1NCwicm9vbUtleVR5cGUiOiJtZWV0aW5nSG9zdCJ9.Odozmz8sx3KgxKcJPPyGAPyyPfYRCQyQbt01W3jaP4o" class="meet__cta">Ir a la sala</a>
                </div>


                <div class="meet__element">
                    <h3 class="meet__meet">Sala 2</h3>

                    <div class="meet__items">
                        <p class="meet__features">De 2 a 4 participantes</p>
                        <p class="meet__features">Categoría libre</p>
                        <p class="meet__features">Tiempo limitado</p>
                    </div>

                    <a href="https://webcolaborativa.whereby.com/sala21767ab3b-ac78-4fb7-8b70-b93647ee3b5e?roomKey=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJtZWV0aW5nSWQiOiI5MDAzMzMxMyIsInJvb21SZWZlcmVuY2UiOnsicm9vbU5hbWUiOiIvc2FsYTIxNzY3YWIzYi1hYzc4LTRmYjctOGI3MC1iOTM2NDdlZTNiNWUiLCJvcmdhbml6YXRpb25JZCI6IjI1NjEyOCJ9LCJpc3MiOiJodHRwczovL2FjY291bnRzLnNydi53aGVyZWJ5LmNvbSIsImlhdCI6MTcyNDk2NzM0Nywicm9vbUtleVR5cGUiOiJtZWV0aW5nSG9zdCJ9.5bv_igmLGYdhdITqkyB8XyYTGAAOZhxj1st1tsrKD9U" class="meet__cta">Ir a sala</a>
                </div>


                <div class="meet__element">
                    <h3 class="meet__meet">Sala 3</h3>

                    <div class="meet__items">
                        <p class="meet__features">De 2 a 4 participantes</p>
                        <p class="meet__features">Categoría libre</p>
                        <p class="meet__features">Tiempo limitado</p>
                    </div>

                    <a href="https://webcolaborativa.whereby.com/sala32ce09dc4-ff22-4c67-963b-9e91e8600e79?roomKey=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJtZWV0aW5nSWQiOiI5MDAzMzM0MSIsInJvb21SZWZlcmVuY2UiOnsicm9vbU5hbWUiOiIvc2FsYTMyY2UwOWRjNC1mZjIyLTRjNjctOTYzYi05ZTkxZTg2MDBlNzkiLCJvcmdhbml6YXRpb25JZCI6IjI1NjEyOCJ9LCJpc3MiOiJodHRwczovL2FjY291bnRzLnNydi53aGVyZWJ5LmNvbSIsImlhdCI6MTcyNDk2NzQ2Nywicm9vbUtleVR5cGUiOiJtZWV0aW5nSG9zdCJ9.SgHRBweY-nodRJ-d_nTW_r-ITk-6tDg6kngBHoWg80s" class="meet__cta">Ir a sala</a>
                </div>

                <div class="meet__element">
                    <h3 class="meet__meet">Sala 4</h3>

                    <div class="meet__items">
                        <p class="meet__features">De 2 a 4 participantes</p>
                        <p class="meet__features">Categoría libre</p>
                        <p class="meet__features">Tiempo limitado</p>
                    </div>

                    <a href="" class="meet__cta">Ir a la sala</a>
                </div>

                <div class="meet__element">
                    <h3 class="meet__meet">Sala 5</h3>

                    <div class="meet__items">
                        <p class="meet__features">De 2 a 4 participantes</p>
                        <p class="meet__features">Categoría libre</p>
                        <p class="meet__features">Tiempo limitado</p>
                    </div>

                    <a href="" class="meet__cta">Ir a la sala</a>
                </div>
            </div>
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
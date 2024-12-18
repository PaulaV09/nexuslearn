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
    <link rel="stylesheet" href="../css/style2.css">
</head>

<body>
    <header class="header">
        <nav class="nav--2">
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
    </header>

    <main>
        <section class="questions container">
            <h2 class="subtitle">Repositorio Académico</h2>
            <p class="questions__paragraph">Aquí podrás encontrar libros, documentos, link, videos, etc sobre las cuatro areas del ciclo básico de ingeniería (Matemáticas, Física, Quimica y Progrmación)</p>

            <section class="questions__container">
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">Matemáticas
                            <span class="questions__arrow">
                                <img src="../images/arrowdown.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Límites y continuidad, Derivadas y sus aplicaciones, Teoremas importantes, Integrales indefinidas y definidas, Métodos de integración, Aplicaciones de la integral, Funciones de varias variables, Integrales múltiples, Vectores y matrices, Sistemas de ecuaciones lineales y métodos de resolución, Determinantes, Espacios vectoriales y subespacios, Medidas de tendencia central, Medidas de dispersión, Conceptos básicos de probabilidad, Pruebas de hipótesis, Regresión lineal y correlación, entre otros. <br>
                            <a href="../vistas/r_mate.php" class="cta" id="button">Ir a Repositorio</a>
                        </p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">Física
                            <span class="questions__arrow">
                                <img src="../images/arrowdown.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Cinemática, Dinámica, Estática y dinámica de cuerpos rígidos, Mecánica de fluidos, Electrostática, Corriente eléctrica y circuitos, Magnetismo, Electromagnetismo, Sistemas termodinámicos y variables, Primera ley de la termodinámica, Segunda ley de la termodinámica, Propiedades de los gases, entre otros. <br>
                            <a href="../vistas/r_fisica.php" class="cta" id="button">Ir a Repositorio</a>
                        </p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">Quimica
                            <span class="questions__arrow">
                                <img src="../images/arrowdown.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Átomos y moléculas, Enlaces químicos, Tipos de reacciones químicas, Balanceo de ecuaciones químicas, Estequiometría, Sólidos, líquidos y gases, Teoría cinética de los gases, Primera ley de la termodinámica, Segunda ley de la termodinámica, Equilibrio químico, Propiedades de las soluciones, Ácidos y bases, Velocidad de reacción, Mecanismos de reacción, Introducción a la química del carbono, entre otros. <br>
                            <a href="../vistas/r_quimica.php" class="cta" id="button">Ir a Repositorio</a>
                        </p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">Programación
                            <span class="questions__arrow">
                                <img src="../images/arrowdown.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Introducción a la programación, Variables y tipos de datos, Entrada y salida de datos, Algoritmos y pseudocódigo, Control de flujo, Funciones o procedimientos, Arreglos o vectores, Listas, pilas y colas, Cadenas de caracteres (strings), Conceptos básicos de POO, Creación de clases y objetos, Modularidad y reutilización de código, Tipos de errores, Manejo de excepciones, Conceptos básicos de bases de datos, Introducción a SQL, entre otros. <br>
                            <a href="../vistas/r_program.php" class="cta" id="button">Ir a Repositorio</a>
                        </p>
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
    <script src="../js/questions.js"></script>

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
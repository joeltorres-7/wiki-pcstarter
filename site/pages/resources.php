<?php
include 'list_articles.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/images/icons/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:wght,FILL@100..400,0..1" />
    <link rel="stylesheet" href="./resources/styles/styles.css">
    <title>TechLab | Recursos</title>
</head>

<body>
    <div id="nav-menu" class="nav-menu">
        <a href="landing.php">Temas</a>
        <a href="resources.php">Recursos</a>
        <a href="about.php">Nosotros</a>
    </div>
    <nav>
        <div class="nav-search">
            <a class="m-0 nav-top" href="landing.php">
                <img class="nav-logo nav-landing" src="./resources/images/techlab-logo.svg" alt="Wiki Logo">
            </a>
            <div class="search-container">
                <span class="material-symbols-rounded search-icon">search</span>
                <input type="text" id="search-bar" placeholder="Buscar artículos..." oninput="searchArticles()">
                <ul id="article-list">
                    <!-- Aquí se mostrarán los artículos que inician con el prompt de busqueda -->
                </ul>
            </div>
        </div>

        <div class="nav-links">
            <a href="landing.php">Temas</a>
            <a href="resources.php">Recursos</a>
            <a href="about.php">Nosotros</a>
        </div>

        <div class="nav-actions">
            <div id="nav-search-icon" class="search-box">
                <span class="material-symbols-rounded">search</span>
            </div>
            <svg id="hamburger" class="ham hamRotate ham4" viewBox="0 0 100 100" width="48"
                onclick="this.classList.toggle('active')">
                <path class="line top"
                    d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                <path class="line middle" d="m 70,50 h -40" />
                <path class="line bottom"
                    d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
            </svg>
        </div>
    </nav>
    <div class="landing landing-resources">
        <header>
            <div class="tech-intro">
                <h1>
                    Recursos</span>
                </h1>
                <p>
                    Una lista detallada de recursos literarios y audiovisuales para complementar tu estudio con la
                    asignatura.
                </p>
            </div>
            <div class="resources-image">
                <img src="./resources/images/illustrations/resources.png" />
            </div>
        </header>
        <div class="resources-container">
            <div class="grid-section">
                <h2 class="grid-title">Canales de YouTube</h2>
                <div class="grid">
                    <a class="resource-card" href="http://y2u.be/O5nskjZ_GoI" target="_blank">
                        <img src="./resources/images/icons/youtube-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>CrashCourse Computer Science</h3>
                                <p>Serie en inglés sobre los conceptos básicos de computación, incluyendo sistemas
                                    operativos.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                    <a class="resource-card" href="https://www.youtube.com/@codigofacilito" target="_blank">
                        <img src="./resources/images/icons/youtube-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>CodigoFacilito</h3>
                                <p>Videos en español sobre programación y fundamentos de computación.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                    <a class="resource-card" href="https://www.youtube.com/@Computerphile" target="_blank">
                        <img src="./resources/images/icons/youtube-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>Computerphile</h3>
                                <p>Videos sobre computación explicados de forma clara y visual.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                    <a class="resource-card" href="https://www.youtube.com/@FaztCode" target="_blank">
                        <img src="./resources/images/icons/youtube-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>FaztCode</h3>
                                <p>Tutoriales técnicos sobre Linux y herramientas relacionadas.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-section">
                <h2 class="grid-title">Libros</h2>
                <div class="grid">
                    <a class="resource-card" href="http://y2u.be/O5nskjZ_GoI" target="_blank">
                        <img src="./resources/images/icons/youtube-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>CrashCourse Computer Science</h3>
                                <p>Serie en inglés sobre los conceptos básicos de computación, incluyendo sistemas
                                    operativos.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                    <a class="resource-card" href="https://www.youtube.com/@codigofacilito" target="_blank">
                        <img src="./resources/images/icons/youtube-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>CodigoFacilito</h3>
                                <p>Videos en español sobre programación y fundamentos de computación.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                    <a class="resource-card" href="https://www.youtube.com/@Computerphile" target="_blank">
                        <img src="./resources/images/icons/youtube-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>Computerphile</h3>
                                <p>Videos sobre computación explicados de forma clara y visual.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                    <a class="resource-card" href="https://www.youtube.com/@FaztCode" target="_blank">
                        <img src="./resources/images/icons/youtube-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>FaztCode</h3>
                                <p>Tutoriales técnicos sobre Linux y herramientas relacionadas.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-section">
                <h2 class="grid-title">Herramientas Interactivas y Simuladores</h2>
                <div class="grid">
                    <a class="resource-card" href="http://y2u.be/O5nskjZ_GoI" target="_blank">
                        <img src="./resources/images/icons/youtube-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>CrashCourse Computer Science</h3>
                                <p>Serie en inglés sobre los conceptos básicos de computación, incluyendo sistemas
                                    operativos.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                    <a class="resource-card" href="https://www.youtube.com/@codigofacilito" target="_blank">
                        <img src="./resources/images/icons/youtube-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>CodigoFacilito</h3>
                                <p>Videos en español sobre programación y fundamentos de computación.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                    <a class="resource-card" href="https://www.youtube.com/@Computerphile" target="_blank">
                        <img src="./resources/images/icons/youtube-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>Computerphile</h3>
                                <p>Videos sobre computación explicados de forma clara y visual.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                    <a class="resource-card" href="https://www.youtube.com/@FaztCode" target="_blank">
                        <img src="./resources/images/icons/youtube-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>FaztCode</h3>
                                <p>Tutoriales técnicos sobre Linux y herramientas relacionadas.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-logo">
            <a class="m-0" href="landing.php">
                <img class="nav-logo" src="./resources/images/techlab-logo-white.svg" alt="Wiki Logo">
            </a>
            <p>&copy; <?= date('Y') ?> Todos los derechos reservados</p>
        </div>
    </footer>
    <script>
        document.getElementById('hamburger').addEventListener('click', function () {
            const navMenu = document.getElementById('nav-menu');
            navMenu.classList.toggle('show');
        });
        window.addEventListener('resize', function () {
            const navMenu = document.getElementById('nav-menu');
            const hamburger = document.getElementById('hamburger');
            if (window.innerWidth > 800) {
                navMenu.classList.remove('show');
                hamburger.classList.remove('active'); // Reset hamburger icon
            }
        });
    </script>
</body>

</html>
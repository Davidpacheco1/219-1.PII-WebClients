<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>WebClients-Admin</title>

    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/footer.css">

</head>

<body>

    <header>
        <nav class="barra-menu">
            <div><img src="../img/logo.png" alt="Logo"></div>
            <span><a href="inicio.php">Inicio</a></span>
            <span><a href="about.php">Nosotros</a></span>
            <span><a href="services.php">Servicios</a></span>
            <span><a href="contact.php">Contacto</a></span>
            <span><a href="head.php">Head</a></span>
            <span><a href="footer.php">Footer</a></span>
        </nav>
    </header>

    <div class="contenido-footer">

        <div class="form_wrap">

            <form action="/" class="form-contact" method="post" enctype="multipart/form-data">
                <h2>Contenido Footer</h2>
                <div class="user_info">

                    <label for="name">Cambia Texto Footer</label>
                    <input type="text" id="text" name="text" placeholder="Cambia Texto de 'Elaboro' en el Footer">

                    <input type="button" value="Guardar" id="submit">
                </div>
            </form>

        </div>

    </div>

    <footer>
        <div class="conocenos">
            <p>Conocenos</p>
            <ul>
                <div>
                    <a href="/index.html">
                        <span id="home" class="fas fa-home"></span>
                        <li>Home</li>
                    </a>
                </div>

                <div>
                    <a href="/html/about.html">
                        <span id="nosotros" class="fas fa-users"></span>
                        <li>Nosotros</li>
                    </a>
                </div>

                <div>
                    <a href="/html/services.html">
                        <span id="servicios" class="fas fa-cogs"></span>
                        <li>Servicios</li>
                    </a>
                </div>

                <div>
                    <a href="/html/contact.html">
                        <span id="desarrolladores" class="fas fa-code"></span>
                        <li>Desarrolladores</li>
                    </a>
                </div>

            </ul>
        </div>
        <div class="contactanos">
            <p>Contactanos</p>
            <ul>
                <span id="correo" class="far fa-envelope"></span>
                <li>desarrollo@responsive.com.mx</li>
                <span id="phone" class="fal fa-phone"></span>
                <li>(33) 36-15-15-85</li>
                <span id="whatsapp" class="fab fa-whatsapp"></span>
                <li>33 10 06 20 27</li>
                <span id="web" class="fas fa-globe-americas"></span>
                <li>www.webclients.com.mx</li>
            </ul>
        </div>
        <div class="redes">
            <p>Redes Sociales</p>
            <ul>
                <div>
                    <a href="https://www.youtube.com/watch?v=T5pLF6Hd1D4" target="_blank">
                        <span id="youtube" class="fab fa-youtube"></span>
                        <li>Youtube</li>
                    </a>
                </div>

                <div>
                    <a href="https://es-la.facebook.com/" target="_blank">
                        <span id="facebook" class="fab fa-facebook-square"></span>
                        <li>Facebook</li>
                    </a>
                </div>

                <div>
                    <a href="https://twitter.com/?lang=es" target="_blank">
                        <span id="twitter" class="fab fa-twitter-square"></span>
                        <li>Twitter</li>
                    </a>
                </div>

                <div>
                    <a href="https://www.instagram.com/?hl=es-la" target="_blank">
                        <span id="instagram" class="fab fa-instagram"></span>
                        <li>Instagram</li>
                    </a>
                </div>

            </ul>
        </div>
        <p class="elaboro">Elaborado por WebClients Developers &#169; 2018</p>
    </footer>

</body>

</html>

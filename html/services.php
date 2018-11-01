<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>WebClients</title>

    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/services.css">

</head>
<?php
require_once('../api/Objects/Sections.php');
$sections = new Sections();
$values =  $sections->getSectionByLocation("service");
?>
<body>

    <header>
        <nav class="barra-menu">
            <div><img src="../img/logo.png" alt="Logo"></div>
            <span><a href="../index.php">Home</a></span>
            <span><a href="about.php">Nosotros</a></span>
            <span><a href="services.php">Servicios</a></span>
            <span><a href="contact.php">Contacto</a></span>
        </nav>
    </header>

    <div class="Contenido-Services">
        <?php for($i = 0; $i < count($values); $i++){?>
            <div class="<?php if ($i % 2 == 0) echo "img1"; else echo "img2";?>">
                <a href="https://www.templatemonster.com/es/product-mockups/" target="_blank"><img src="<?php echo $values[$i]["img"]; ?>" alt="Servicio uno"></a>
                <p class="<?php if ($i % 2 == 0) echo "txt1"; else echo "txt2";?>"><?php echo $values[$i]["description"]; ?></p>
            </div>
        <?php }?>
    
    <!-- <div class="img2">
        <a href="https://btemplates.com/" target="_blank"><img src="../img/img-servicios-2.png" alt="Servicio uno"></a>
        <p class="txt2">Creamos tu blog personal para que expreses tus grandes ideas</p>
    </div>
    <div class="img3">
       <a href="https://themeforest.net/search/academica" target="_blank"><img src="../img/img-servicios-3.jpg" alt="Servicio uno"></a>
        <p class="txt3">Administra tu comunidad universitaria con un portal academico</p>
    </div>
    <div class="img4">
        <a href="https://www.1and1.mx/templates" target="_blank"><img src="../img/img-servicios-4.jpg" alt="Servicio uno"></a>
        <p class="txt4">Necesitas un aplicación para tu empresa, Nosotros la creamos</p>
    </div> -->
    </div>

    <footer>
        <div class="conocenos">
            <p>Conocenos</p>
            <ul>
                <div>
                    <a href="/index.php">
                        <span id="home" class="fas fa-home"></span>
                        <li>Home</li>
                    </a>
                </div>
                
                <div>
                    <a href="about.php">
                        <span id="nosotros" class="fas fa-users"></span>
                        <li>Nosotros</li>
                    </a>
                </div>
                
                <div>
                    <a href="services.php">
                        <span id="servicios" class="fas fa-cogs"></span>
                        <li>Servicios</li>
                </a>
                </div>
                
                <div>
                    <a href="contact.php">
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
    </footer>

</body>

</html>
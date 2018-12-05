<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>WebClients</title>
    <!--Librerias externas-->
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<?php
require_once('api/Classes/Sections.php');
$sections = new Sections();
$values =  $sections->getSectionByLocation("home");
?>


<body>

    <header>
    
        <nav class="barra-menu">
            <div><img src="img/logo.png" alt="Logo"/></div>
            <p id="warning" hidden>Cuidado la vista no es responsiva.</p>

            <span><a id = "1" href="index.php">Home</a></span>
            <span><a href="html/about.php">Nosotros</a></span>
            <span><a href="html/services.php">Servicios</a></span>
            <span><a href="html/contact.php">Contacto</a></span>
            <span><a href="html/admin_index.php">Admin</a></span>
        </nav>
    </header>

    <div class="Contenido">
        <span><img src="<?php echo $values[0]["img"]; ?>" alt="Imagen Home"></span>
        <div class="Div-Text">
            <h1><?php echo $values[0]["title"]; ?></h1>
            <p><?php echo $values[0]["description"]; ?></p>
        </div>
    </div>

    <footer>
        <div class="conocenos">
            <p>Conocenos</p>
            <ul>
                <div>
                    <a href="index.php">
                        <span id="home" class="fas fa-home"></span>
                        <li>Home</li>
                    </a>
                </div>
                
                <div>
                    <a href="html/about.php">
                        <span id="nosotros" class="fas fa-users"></span>
                        <li>Nosotros</li>
                    </a>
                </div>
                
                <div>
                    <a href="html/services.php">
                        <span id="servicios" class="fas fa-cogs"></span>
                        <li>Servicios</li>
                </a>
                </div>
                
                <div>
                    <a href="html/contact.php">
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
<script>
$( document ).ready(function() {
    $( ".Div-Text" ).mouseover(function() {
        $(".Div-Text").css("background-color", "#1a8cbc");
    });
    

    $( ".Div-Text" ).mouseout(function() {
        $(".Div-Text").css({"background-color": "#1a7bbc"});
    });
    
    $("#1").mousemove(function(){
        $("#1").css("background-color", "#fff");
        $("#1").css("color", "#1A7BBC");
    });
    
    $("#1").mouseout(function(){
        $("#1").css("background-color", "#1A7BBC");
        $("#1").css("color", "#fff");
    });

    $( window ).resize(function() {
        $( "#warning" ).show();
    });
    
    window.addEventListener("load", function(event) {
    alert("La Página Web se Cargo Correctamente");
    });
    
    window.addEventListener("dragstart", function(event) {
    alert("No puede mover los elementos");
    });
    
    
});
$
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>WebClients</title>

    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<?php
require_once('../api/Classes/CommentManager.php');
require_once('../api/Classes/Sections.php');
$sections = new Sections();
$footer =  $sections->getSectionByLocation("footer");
$header =  $sections->getSectionByLocation("header");
$commentManager = new CommentManager();
    if(isset($_POST["submit"])){
        $post = $_POST;
        $email = $post["email"];
        $name = $post["name"];
        $comment = $post["comment"];
        $commentManager->insertComment($email, $name, $comment);
    }
?>
<body>

    <header>
        <?php echo $header[0]["description"];?>
    </header>

    <div class="contenido-contact">
      
      <div class="form_wrap">
       
       <section class="info-contact">
           <section class="info-title">
               <span class="fa fa-user-circle"></span>
               <h2>Información<br>De Contacto</h2>
           </section>
           <section class="info_items">
               <p><span class="fa fa-envelope"></span>desarrollo@responsive.com.mx</p>
               <p><span class="fa fa-mobile"></span>33 10 06 20 27</p>
           </section>
       </section>
       
        <form id="form" action="<?php echo $_SERVER['PHP_SELF'];?>" class="form-contact" method="post">
            <h2>Envia un mensaje</h2>
            <div class="user_info">
               
                <label for="name">Nombre Completo *</label>
                <input type="text" id="name" name="name" placeholder="Nombre Completo">
                
                <label for="email">Correo Electronico *</label>
                <input type="email" id="email" name="email" placeholder="tucorreo@email.com">
                
                <label for="subject">Mensaje *</label>
                <textarea name="comment" id="subject" name="subject" placeholder="Escribe tu necesidad y nosotros te proponemos una solución"></textarea>
                
                <button name="submit" type="submit" value="" id="submit">Enviar Mensaje</button>
            </div>
        </form>
        
        </div>
        
    </div>

    <footer>
    <?php echo $footer[0]["description"];?>
    </footer>
<script>
$( document ).ready(function() {
    $( "#form" ).submit(function( event ) {
        alert( "Muchas gracias por comunicarte con nosotros" );
    });
});
</script>
</body>

</html>
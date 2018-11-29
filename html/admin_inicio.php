<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>WebClients-Admin</title>

    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin_estilos.css">
    <link rel="stylesheet" href="../css/admin_inicio.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<?php
require_once('../api/Classes/Sections.php');
$sections = new Sections();
$values =  $sections->getSectionByLocation("home");
$footer =  $sections->getSectionByLocation("footer");
$response = "";
if(isset($_POST['submit'])){
    $post = $_POST;
    $description = $post['text'];
    $img = $post['img'];
    $title = $post['title'];
    $response = $sections->updateSectionById($values[0]["id"], "home",$img, $description, $title);
    $values =  $sections->getSectionByLocation("home");
}
?>
<body>

    <header>
        <nav class="barra-menu">
            <div><img src="../img/logo.png" alt="Logo" id="logo"></div>
            <span><a href="admin_inicio.php">Inicio</a></span>
            <span><a href="admin_about.php">Nosotros</a></span>
            <span><a href="admin_services.php">Servicios</a></span>
            <span><a href="admin_contact.php">Contacto</a></span>
            <span><a href="admin_head.php">Head</a></span>
            <span><a href="admin_footer.php">Footer</a></span>
        </nav>
    </header>

    <div class="contenido-inicio">
        <div class="form_wrap">

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" class="form-contact" method="post" enctype="multipart/form-data">
                <h2>Contenido Inicio</h2>
                <div class="user_info">

                    <label for="name">Cambiar el titulo</label>
                    <input type="text" id="title" name="title" placeholder="Escriba el titulo" value="<?php echo $values[0]["title"]; ?>">
                    <label for="name">Cambiar la url Imagen</label>
                    <input type="text" id="file" name="img" placeholder="Escriba el link de la imagen" value="<?php echo $values[0]["img"]; ?>">
                    <label for="text">Cambia la descripcion</label>
                    <textarea id="text" name="text" placeholder="Escriba un nuevo texto" ><?php echo $values[0]["description"]; ?></textarea>
                    <button type="sumbit" id="submit" name="submit">Guardar</button>
                </div>
            </form>

        </div>

    </div>

    <footer><?php echo $footer[0]["description"];?>
    </footer>
    <script>
        $( "#logo" ).click(function() {
            window.open("../index.php");
        });
    </script>
</body>

</html>

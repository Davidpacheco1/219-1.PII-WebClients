<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>WebClients-Admin</title>

    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin_estilos.css">
    <link rel="stylesheet" href="../css/admin_head.css">

</head>
<?php
require_once('../api/Classes/Sections.php');
$sections = new Sections();
$values =  $sections->getSectionByLocation("header");
$footer =  $sections->getSectionByLocation("footer");
$header =  $sections->getSectionByLocation("header");
$response = "";
if(isset($_POST['submit'])){
    $post = $_POST;
    $description = $post['text'];
    $img = "";
    $title = "";
    $response = $sections->updateSectionById($values[0]["id"], "header",$img, $description, $title);
    $values =  $sections->getSectionByLocation("header");
}
?>
<body>

    <header>
        <nav class="barra-menu">
            <div><img src="../img/logo.png" alt="Logo"></div>
            <span><a href="admin_inicio.php">Inicio</a></span>
            <span><a href="admin_about.php">Nosotros</a></span>
            <span><a href="admin_services.php">Servicios</a></span>
            <span><a href="admin_contact.php">Contacto</a></span>
            <span><a href="admin_head.php">Head</a></span>
            <span><a href="admin_footer.php">Footer</a></span>
        </nav>
    </header>

    <div class="contenido-head">

        <div class="form_wrap">

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" class="form-contact" method="post" enctype="multipart/form-data">
                <h2>Contenido Head</h2>
                <div class="user_info">
                    <label for="text">Agrega el html del header</label>
                    <textarea id="text" name="text" placeholder="Agregar algun comentario"><?php echo $values[0]["description"]; ?></textarea>
                    <button name="submit" type="submit" value="" id="submit">Guardar</button>
                </div>
            </form>

        </div>

    </div>

    <footer>
        <?php echo $footer[0]["description"];?>
    </footer>

</body>

</html>
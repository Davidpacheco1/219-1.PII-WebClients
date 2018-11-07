<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>WebClients-Admin</title>

    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin_estilos.css">
    <link rel="stylesheet" href="../css/admin_services.css">

</head>
<?php
require_once('../api/Classes/Sections.php');
$sections = new Sections();
$values =  $sections->getSectionByLocation("service");
$footer =  $sections->getSectionByLocation("footer");
$current = 1;
$post = $_POST;
$values[] = [ "description" => "", "img" => "", "id" => -1];
if(isset($_POST['current'])){
    $current = $post['current'];
}
if(isset($_POST['siguiente'])){
    if($current+1 <= count($values))
        $current++;
}

if(isset($_POST['back'])){
    if($current-1 > 0)
        $current--;
}
if(isset($_POST['guardar'])){
    $description = $post['text'];
    $img = $post['img'];
    $title = "";
    $id = $values[$current -1 ]["id"];
    if($id == -1){
        $response = $sections->insert("service",$img, $description, $title);
    }else{
        $response = $sections->updateSectionById($id, "service",$img, $description, $title);
    }
    $values =  $sections->getSectionByLocation("service");
    $values[] = [ "description" => "", "img" => "", "id" => -1];
}
if(isset($_POST['delete'])){
    $id = $values[$current -1 ]["id"];
    $response = $sections->delete($id );
    $values =  $sections->getSectionByLocation("service");
    $values[] = [ "description" => "", "img" => "", "id" => -1];
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

    <div class="contenido-services">

        <div class="form_wrap">

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" class="form-contact" method="post" enctype="multipart/form-data">
                <h2>Contenido Servicios <?php echo  $current."/".(count($values) - 1);?></h2>
                <div class="user_info">
                    <input hidden name="current" value="<?php echo $current;?>"></p>
                    <label for="name">Cambiar Imagen</label>
                    <input type="text" id="file" name="img" placeholder="Escriba el link de la imagen" value="<?php echo $values[$current-1]["img"];?>">
                    <label for="text">Cambia Texto</label>
                    <textarea id="text" name="text" placeholder="Escriba un nuevo texto"><?php echo $values[$current-1]["description"];?></textarea>
                    <button name="back" type="submit" value="" id="back">Atras</button>
                    <button name="siguiente" type="submit" value="" id="siguiente">Siguiente</button>
                    <button name="guardar" type="submit" value="" id="guardar">Guardar</button>
                    <button name="delete" type="submit" value="" id="eliminar">Eliminar</button>
                </div>
            </form>

        </div>

    </div>

    <footer>
    <?php echo $footer[0]["description"];?>
    </footer>

</body>

</html>

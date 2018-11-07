<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>WebClients</title>

    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/about.css">

</head>
<?php
require_once('../api/Classes/Sections.php');
$sections = new Sections();
$values =  $sections->getSectionByLocation("about");
$header =  $sections->getSectionByLocation("header");
$footer =  $sections->getSectionByLocation("footer");
?>

<body>
    <header>
        <?php echo $header[0]["description"];?>
    </header>
    <div class="contenido-about">
        <div class="img">
            <img src="<?php echo $values[0]["img"]; ?>" alt="Imagen Home">
        </div>
        <div class="txt">
            <div class="titulo">
                <h1><?php echo $values[0]["title"]; ?></h1>
            </div>
            <div class="contenido">
                <?php echo $values[0]["description"]; ?>
            </div>
        </div>
    </div>

    <footer>
         <?php echo $footer[0]["description"];?>
    </footer>

</body>

</html>

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
require_once('../api/Classes/Sections.php');
$sections = new Sections();
$footer =  $sections->getSectionByLocation("footer");
$values =  $sections->getSectionByLocation("service");
$header =  $sections->getSectionByLocation("header");
?>
<body>

   <header>
        <?php echo $header[0]["description"];?>
    </header>

    <div class="Contenido-Services">
        <?php for($i = 0; $i < count($values); $i++){?>
            <div class="<?php echo "divimg";?>">
                <a href="https://www.templatemonster.com/es/product-mockups/" target="_blank"><img src="<?php echo $values[$i]["img"]; ?>" alt="Servicio uno"></a>
                <p><?php echo $values[$i]["description"]; ?></p>
            </div>
        <?php }?>
    </div>

    <footer>
       
    <?php echo $footer[0]["description"];?>
    </footer>

</body>

</html>
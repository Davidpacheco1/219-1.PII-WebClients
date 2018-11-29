<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>WebClients-Admin</title>

    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin_estilos.css">
    <link rel="stylesheet" href="../css/admin_contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<?php
require_once('../api/Classes/CommentManager.php'); 
$commentManager = new CommentManager();
$result = $commentManager->readComments();

require_once('../api/Classes/Sections.php');
$sections = new Sections();
$footer =  $sections->getSectionByLocation("footer");

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

    <div class="contenido-contact">

        <div class="form_wrap">

            <form action="/" class="form-contact">
                <h2>Contenido Contacto</h2>

                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Comentarios</th>
                    </tr>
                    <?php for($i = 0; $i < count($result); $i++){?>
                    <tr>
                        <td> <?php echo $result[$i]["name"]; ?></td>
                        <td> <?php echo $result[$i]["email"]; ?></td>
                        <td><?php echo $result[$i]["comment"]; ?></td>
                    </tr>
                    <?php }?>
                    
                </table>

            </form>

        </div>

    </div>

    <footer>
        <?php echo $footer[0]["description"];?>
    </footer>

    <script>
    $( document ).ready(function() {
        $( "tr" ).dblclick(function() {
            alert("No se puede editar la fila")
        });
    });
    </script>

</body>

</html>

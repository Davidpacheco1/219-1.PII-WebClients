<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>WebClients-Admin</title>
    <!--Librerias externas-->
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin_estilos.css">
    <link rel="stylesheet" href="../css/admin_login.css">

</head>
<?php
require_once('../api/Classes/Admin.php'); 
require_once('../api/Classes/Login.php'); 
$values = $_POST;
$message = "";
$name = "";
$password = "";
if(isset($_POST['submit'])){
    $name = $values['name'];
    $password = $values['password'];
    $admin = new Admin($name, $password);
    $login = new Login($admin);
    if(!$login->isValid()){
        $message = "Credenciales incorrectas";
    }else{
        header("Location: "."/219-1.PII.WebClients/html/admin_inicio.php");
    }
}
?>
<body>

    <header>
    
        <nav class="barra-menu">
            <div><img src="../img/logo.png" alt="Logo"></div>
        </nav>
    </header>

    <div class="contenido-login">
      <div class="form_wrap">
      
       <section class="info-contact">
           <section class="info-title">
               <span class="fa fa-user-circle"></span>
               <h2>Portal<br>Administrador</h2>
           </section>
       </section>
       
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" class="form-contact" method="post">
            <h2>Inicio de Sesión</h2>
            <div class="user_info">
                
                <label for="user">Usuario *</label>
                <input type="user" id="user" name="name" placeholder="tucorreo@email.com" value="<?php echo $name;?>">
                
                <label for="password" >Contraseña *</label>
                <input type="password" pattern=".{6,}" id="password" name="password" placeholder="Introduce tu Contraseña">
                <p><?php echo $message;?></p>
                <button type="submit"  id="submit" name="submit">Iniciar Sesión</button>
            </div>
        </form>
        
        </div>
        </div>

    <footer>
        <p class="elaboro">Elaborado por WebClients Developers &#169; 2018</p>
    </footer>

</body>

</html>

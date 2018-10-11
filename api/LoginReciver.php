<?php
require_once('Admin.php'); 
require_once('Login.php'); 
$values = $_POST;
$name = $values['name'];
$password = $values['password'];
$admin = new Admin($name, $password);
$login = new Login($admin);
var_dump($login->isValid());


?>
<?php

require_once('Objects/Sections.php');
$values = $_POST;
$id = $values['id'];
$location = $values['location'];
$img = $values['img'];
$description = $values['description'];
$title = $values['title'];
$sections = new Sections();
var_dump($sections->updateSectionById($id,$location, $img, $description,$title));


?>
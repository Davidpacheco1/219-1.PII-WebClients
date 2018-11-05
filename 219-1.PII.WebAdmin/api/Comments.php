<?php
require_once('Objects/Comment.php'); 
require_once('Query.php');
$query = new Query();
$result = $query->select('comments',[], [],[]);
$comments = array();
foreach ($result as $row){
    $comment = new Comment($row[1], $row[2],$row[3]);
    array_push($comments, $comment);
}
var_dump($comments);

?>
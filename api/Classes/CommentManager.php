<?php

require_once(realpath(dirname(__FILE__) . '/..') .'/Query.php'); 
class CommentManager{

    public function readComments(){
        $query = new Query();
        $result = $query->select('comments',[], [],[]);
        return $result;
    }

    public function insertComment($email, $name, $comment){
        $query = new Query();
        $response = $query->insert('comments',"(email,name,comment)","('$email', '$name', '$comment')");
        return $response;
    }
}

?>
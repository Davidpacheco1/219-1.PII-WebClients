<?php
class Comment{
    public $email = "";
    public $name = "";
    public $comment = "";
    public function Comment($name,$email, $comment){
        $this->name = $name;
        $this->email = $email;
        $this->comment = $comment;
    }

}



?>
<?php
require_once('Admin.php'); 
require_once('Query.php'); 
class Login{
    public $admin;
    public function Login($admin){
        $this->admin = $admin;
    }

    public function isValid(){
        $query = new Query();
        $result = $query->select('admins',[], ['user','password'],[$this->admin->name,$this->admin->password]);
        if(count($result) > 0){
            return true;
        }else{
            return false;
        }
    }
}
?>
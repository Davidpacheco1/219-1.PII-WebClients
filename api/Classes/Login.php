<?php
require_once(realpath(dirname(__FILE__) . '/..') .'/Classes/Admin.php'); 
require_once(realpath(dirname(__FILE__) . '/..') .'/Query.php'); 
class Login{
    public $admin;
    public function Login($admin){
        $this->admin = $admin;
    }

    public function isValid(){
        $query = new Query();
        $result = $query->select('admins',[], ['user','password'],[$this->admin->name,$this->admin->password]);
        if(is_array($result) && count($result) > 0){
            return true;
        }else{
            return false;
        }
    }
}
?>
<?php
require_once('MVC/models/Login.php');

class LoginController{
   var $LoginModel;

    public function __construct(){
        $this->LoginModel = new Login();
    }

    public function admin(){
        require_once('MVC/views/index.php');
    }

}
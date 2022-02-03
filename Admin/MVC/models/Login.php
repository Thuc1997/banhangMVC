<?php
require_once('conection.php');
class Login{
var $conn;

 function __construct(){
    $conn_obj = new conection();
    $this->conn = $conn_obj->conn;
}



}
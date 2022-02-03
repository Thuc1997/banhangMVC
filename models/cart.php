<?php

require_once('model.php');

class cart extends model{

    function detail_sp($id){
         $query = "SELECT * FROM sanpham WHERE maSP = $id ";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
    
}
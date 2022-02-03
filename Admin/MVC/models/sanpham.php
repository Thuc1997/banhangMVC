<?php
require_once('model.php');
class sanpham extends model{

    var $table = "sanpham";
    var $contens = "maSP";

    function khuyenmai(){
        $query = "SELECT * FROM khuyenmai";
        require("result.php");
        return $data;
    }

    function loaisp(){
        $query = "SELECT * FROM loaisanpham";
        require("result.php");
        return $data;
    }

    function danhmuc(){
        $query = "SELECT * FROM danhmuc";
        require("result.php");
        return $data;
    }
    function trangthai($id){
        $query = "SELECT * FROM sanpham WHERE trangthai = $id  ORDER BY maSP DESC";
        require("result.php");
        return $data;
    }

}
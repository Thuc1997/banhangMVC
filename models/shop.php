<?php

require_once('model.php');

class shop extends model{
    
    function loaisp($a,$b){
        $query = "SELECT * FROM loaisanpham WHERE maDM = 1 LIMIT $a,$b";
        require("result.php");
        return $data;
    }

    function sanpham_all(){
        $query = "SELECT * FROM sanpham";
        require("result.php");
        return $data;
    }

    function chitiet_loai($loai,$sp){
        $query = "SELECT * FROM loaisanpham WHERE tenLSP ='$loai' AND maDM ='$sp'";
        require("result.php");
        return $data;
    }

    function chitiet($id,$sp){
        $query = "SELECT * FROM sanpham WHERE maLSP ='$id' AND maDM='$sp'";
        require("result.php");
        return $data;
    }

    function danhmuctitle($id){
        $query = "SELECT * FROM danhmuc WHERE maDM='$id'";
        require("result.php");
        return $data;
    }


}
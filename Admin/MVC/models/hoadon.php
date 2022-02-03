<?php
require_once('model.php');

class hoadon extends model{
    var $table = "hoadon";
    var $contens = "maHD";

    function trangthai($id){
        $query = "SELECT * FROM hoadon WHERE trangthai = $id  ORDER BY maHD DESC";
        require("result.php");
        return $data;
    }

    function chitiethoadon($id){
        $query = "SELECT ct.*, s.tenSP AS Ten from chitiethoadon AS ct, sanpham AS s WHERE ct.MaSP = s.MaSP AND ct.MaHD = $id ";
        require("result.php");    
        return $data;
    }

}
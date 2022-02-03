<?php

require_once('conection.php');
class model{
     private $tbl_sanpham = 'sanpham';   
     private $tbl_khuyenmai='khuyenmai';

    var $conn;
    function __construct(){
        $connObj = new conection();
        $this->conn = $connObj->conn;
        
    }

    function danhmuc(){
        $query = "SELECT * FROM danhmuc";
        require("result.php");
        return $data;
    }
    function danhmuc1(){
        $query = "SELECT * FROM danhmuc LIMIT 6";
        require("result.php");
        return $data;
    }

    function chitietdanhmuc($id){
         $query = "SELECT d.tenDM as Ten, l.* FROM danhmuc as d,loaisanpham as l WHERE d.maDM = l.maDM AND d.maDM = $id";   
         require("result.php");
         return $data;
    }
    function loaisanphan($id){
         $query ="SELECT d.tenDM as Ten, l.* FROM danhmuc as d, loaisanpham as l WHERE d.maDM = l.maDM AND d.maDM = $id";
    }

    function sanpham_danhmuc($a,$b,$danhmuc){
        $query = "SELECT * FROM sanpham WHERE trangthai=1 AND maDM = $danhmuc ORDER BY thoigian DESC LIMIT $a,$b";
        require("result.php");
         return $data;
    }
    function sanpham_new($a,$b){
        $query = "SELECT * FROM sanpham WHERE trangthai=1 ORDER BY maSP DESC LIMIT $a,$b";
        require("result.php");
         return $data;
    }

    function banner($a,$b){
        $query = "SELECT * FROM banner WHERE trangthai=1 LIMIT $a,$b";
        require("result.php");
        return $data;
    }

    function giamgia($phan,$giacu){
        if($phan >0){
            $toi = $giacu *((100-$phan)/100);
        }  
        return $toi;
    }

    function check_makm1($makm){
        $query="SELECT * FROM khuyenmai WHERE makm = $makm and trangthai=1";
        require("result.php");
        return $data;
    }

    function get_hoadon($manguoidung){
        $query="SELECT * FROM hoadon WHERE maND = $manguoidung ORDER BY ngaylap DESC LIMIT 1";
        require("result.php");
        return $data;
    }

    function get_chitiethoadon($mahoadon){
        $query="SELECT * FROM chitiethoadon WHERE maHD = $mahoadon ";
        require("result.php");
        return $data;
    }

}
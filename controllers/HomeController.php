<?php

require_once('models/home.php');
class HomeController{

    var $homeModel;
    public function __construct(){
        $this->homeModel = new home();
    }

    function List(){
        ///danh muc san pham
        $data_danhmuc = $this->homeModel->danhmuc();
        $data_chitietDM = array();
        for($i=1; $i <=count($data_danhmuc);$i++){
            $data_chitietDM[$i] = $this->homeModel->chitietdanhmuc($i);
        }
        ///danh muc bo suu tap
        $data_danhmuc1 = $this->homeModel->danhmuc1();
        $data_chitietDM1 = array();

        for($i=1; $i <=count($data_danhmuc1);$i++){
            $data_chitietDM1[$i] = $this->homeModel->chitietdanhmuc($i);
        }
        ///banner
         $data_banner = $this->homeModel->banner(0,5);
         $new_pro = $this->homeModel->sanpham_new(0,8);
         
         
        
    
        require_once('views/index.php');
    }



}
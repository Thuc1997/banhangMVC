<?php

require_once('models/shop.php');
class shopController{

    var $shopModel;
    public function __construct(){
        $this->shopModel = new shop();
    }

    function List(){
        $data_danhmuc = $this->shopModel->danhmuc();
        $data_chitietDM = array();
        for($i = 1; $i <= count($data_danhmuc); $i++){
            $data_chitietDM[$i] = $this->shopModel->chitietdanhmuc($i);
        }

        $data_loaisp = $this->shopModel->loaisp(0,8);
        $data = $this->shopModel->sanpham_all();
        $dataa = $this->shopModel->danhmuctitle($_GET['sp']);

        if(isset($_GET['sp']) and isset($_GET['loai'])){
            $data_loai = $this->shopModel->chitiet_loai($_GET['loai'],$_GET['sp']);
            if($data_loai != null){
               $data = $this->shopModel->chitiet($data_loai[0]['maLSP'],$_GET['sp']);
            }
        }else{
            if(isset($_GET['sp'])){
                $data = $this->shopModel->sanpham_danhmuc(0,9,$_GET['sp']);
            }
            
        }
        require_once('views/index.php');
        
    }

}
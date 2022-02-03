<?php

require_once('models/chitiet.php');
class chitietController{

    var $chitietModel;
    public function __construct(){
        $this->chitietModel = new chitiet();
    }

    function List(){
            $data_danhmuc = $this->chitietModel->danhmuc();
            $data_chitietDM = array();

            for($i = 1; $i <=count($data_danhmuc);$i++){
                $data_chitietDM[$i] = $this->chitietModel->chitietdanhmuc($i);
            }
             $id = $_GET['id'];
             $data = $this->chitietModel->detail_sp($id);
             $th = explode(' ',$data['tenSP']);
             $kq = array_pop($th);

             if($data!=null){
                $data_lq = $this->chitietModel->sanpham_danhmuc(0,4,$data['maDM']);
                $data_hot = $this->chitietModel->sanpham_danhmuc(0,8,$data['maDM']);
             }
             ///phan tram giam gia       

             $toi = $this->chitietModel->giamgia($data['phantram'],$data['giacu']);
  

        require_once('views/index.php');
        
    }

}
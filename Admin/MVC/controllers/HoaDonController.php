<?php
require_once('MVC/models/hoadon.php');

class HoaDonController{
var $hoadonModel;

public function __construct(){
    $this->hoadonModel = new hoadon();
}

function list(){
    $data = array();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if ($id > 1) {
            $id = 0;
        }
        $data = $this->hoadonModel->trangthai($id);
    } else {
        $data = $this->hoadonModel->All();
    }
    require_once('MVC/views/index.php');
}
function delete(){
    if (isset($_GET['id'])){
        $this->hoadonModel->delete($_GET['id']);
    }
}

function xetduyet(){
    $data = array(
        'maHD' => $_GET['id'],
        'trangthai' => 1,
    );
    $this->hoadonModel->update($data);
}

function chitiet(){
    $id = isset($_GET['id']) ? $_GET['id'] : 1;
    $data = $this->hoadonModel->chitiethoadon($id);
    require_once("MVC/views/index.php");
}

}
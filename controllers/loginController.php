<?php
require_once('models/login.php');

class loginController{

    var $loginModel;
    public function __construct(){
        $this->loginModel = new login();
    }

    function login(){
        $data_danhmuc = $this->loginModel->danhmuc();
        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->loginModel->chitietdanhmuc($i);
        }
        require_once('views/index.php');
    }

    function login_action(){
        $taikhoan = $_POST['tkk'];
        $matkhau = md5($_POST['mkk']);
        if (strpos($taikhoan, "'") != false) {
            $taikhoan = str_replace("'", "\'", $taikhoan);
        }
        $data = array(
            'taikhoan' => $taikhoan,
            'matkhau' => $matkhau,
        );
        $this->loginModel->login_1($data);
    }

    function account(){
        $data_danhmuc = $this->loginModel->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->loginModel->chitietdanhmuc($i);
        }
        $data = $this->loginModel->account();
 
        require_once('views/index.php');
    }


    function dangxuat(){
        $this->loginModel->logout();
    }

}


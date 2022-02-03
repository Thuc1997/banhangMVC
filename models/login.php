<?php
require_once('model.php');

class login extends model{
    var $conn;

    function __construct(){
        $conn_obj = new conection();
        $this->conn = $conn_obj->conn;
    }

    function login_1($data){
        $query = "SELECT * FROM nguoidung WHERE taikhoan ='".$data['taikhoan']."' AND matkhau = '".$data['matkhau']."' AND trangthai=1";
        $login = $this->conn->query($query)->fetch_assoc();

        if($login !== null){
            if($login['maquyen'] == 1){
                $_SESSION['isLogin_Admin1'] = true;
                $_SESSION['login1'] = $login;
            }else{
                if($login['maquyen'] == 2){
                $_SESSION['isLogin_Nhanvien1'] = true;
                $_SESSION['login1'] = $login;
                }else{
                     if($login['maquyen'] == 3){
                    $_SESSION['isLogin1'] = true;
                    $_SESSION['login1'] = $login;
                }
                }
            }
            setcookie('msg1', 'Đăng nhập thành công', time() + 5);
            header('Location: ?act=taikhoan&xuli=account');

        }else{
            setcookie('msg2', 'Sai tên tài khoản hoặc mật khẩu', time() + 5);
            header('Location: ?act=taikhoan');
        }

    }

    function logout(){
        if(isset($_SESSION['isLogin_Admin1'])){
            unset($_SESSION['isLogin_Admin1']);
            unset($_SESSION['login1']);
        }
        if(isset($_SESSION['isLogin_Nhanvien1'])){
            unset($_SESSION['isLogin_Nhanvien1']);
            unset($_SESSION['login1']);
        }
        if(isset($_SESSION['isLogin1'])){
            unset($_SESSION['isLogin1']);
            unset($_SESSION['login1']);
        }
        header('location: ?act=home');
    }

    function account(){
        $id = $_SESSION['login1']['maND'];
        return $this->conn->query("SELECT * FROM nguoidung where maND = $id")->fetch_assoc();
    }



}
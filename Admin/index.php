<?php
session_start();

if(isset($_SESSION['isLogin_Admin1']) && $_SESSION['isLogin_Admin1'] == true){
    $mod = isset($_GET['mod']) ? $_GET['mod']: "login";
    $act = isset($_GET['act']) ? $_GET['act']: "admin";
    switch ($mod) {
        case 'login': 
            require_once('MVC/controllers/LoginController.php');
            $controller_obj = new LoginController();
            switch($act){
                case 'admin':
                    $controller_obj->admin();
                    break;
                default:
                    $controller_obj->admin();    
                    break;
            }
        break;
        
        case 'hoadon':
                require_once('MVC/controllers/HoaDonController.php');
                $controller_obj = new HoaDonController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'chitiet':
                        $controller_obj->chitiet();
                        break;
                    case 'delete':
                        $controller_obj->delete();
                        break;
                    case 'xetduyet':
                        $controller_obj->xetduyet();
                        break;         
                    default:
                        $controller_obj->list();
                        break;
                }
        break;    
        
        case 'sanpham':
            require_once('MVC/controllers/SanPhamController.php');
            $controller_obj = new SanPhamController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                case 'an':
                    $controller_obj->an();
                    break;
                case 'hien':
                    $controller_obj->hien();
                    break;        
                default:
                    $controller_obj->list();
                    break;
            }
            break;


         default:
            header('location: ?mod=login');   
    }
}


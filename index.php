<?php 
session_start();
ob_start();

$mod = isset($_GET['act'])?$_GET['act']:"home";

switch($mod){
    case 'home':
         require_once('controllers/HomeController.php');
         $controller_obj = new HomeController();
         $controller_obj->List();
         break;
    case 'shop':
         require_once('controllers/shopController.php');
         $controller_obj = new shopController();
         $controller_obj->List();
         break;
    case 'tintuc':
         require_once('controllers/tintucController.php');
         $controller_obj = new tintucController();
         $controller_obj->List();
         break; 
    case 'detail':
         require_once('controllers/chitietController.php');
         $controller_obj = new chitietController();
         $controller_obj->List();
         break;
    case 'cart':
          $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
          require_once('controllers/cartController.php');
          $controller_obj = new cartController();
          switch ($act) {
              case 'list':
                  $controller_obj->list_cart();
                  break;
              case 'update':
                  $controller_obj->update_cart();
                  break;
              case 'add':
                  $controller_obj->add_cart();
                  break;
              case 'delete':
                  $controller_obj->delete_cart();
                  break;
              default:
                  $controller_obj->list_cart();
                  break;
          }
          break;

          case 'checkout':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            require_once('controllers/checkoutController.php');
            $controller_obj = new checkoutController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'save':
                    $controller_obj->save();
                    break;
                case 'order_complete':
                    $controller_obj->order_complete();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;

          case 'taikhoan':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "taikhoan";
            require_once('controllers/loginController.php');
            $controller_obj = new loginController();
            
            if ((isset($_SESSION['isLogin1']) && $_SESSION['isLogin1'] == true)) {
                switch ($act) {
                    case 'dangxuat':
                    $controller_obj->dangxuat();
                    break;
    
                    case 'account':
                    $controller_obj->account();
                    break;
    
                    case 'update_tt':
                    $controller_obj->update();
                    break;
    
                    case'doimk':                 
                    $controller_obj->mk_account();
                    break;
    
                    case 'update_mk':
                    $controller_obj->doimk();
                    break;
    
                     case'myorder':                 
                    $controller_obj->myorder();
    
                    break;
    
                    case'hoadon':                            
                      $controller_obj->myorder_hoadon();          
                    break;
                
                    default:
                        header('location: ?act=error');
                        break;
                }
              
            } else {
                if ((isset($_SESSION['isLogin_Admin1']) && $_SESSION['isLogin_Admin1'] == true) || (isset($_SESSION['isLogin_Nhanvien1']) && $_SESSION['isLogin_Nhanvien1'] == true)) {
                    switch ($act) {
                        case 'dangxuat':
                        $controller_obj->dangxuat();
                        break;
                        
                        case 'account':
                        $controller_obj->account();
                        break;
    
                        case 'update_tt':
                        $controller_obj->update();
                        break;
    
                        case'doimk':                 
                        $controller_obj->mk_account();
                        break;
    
                        case 'update_mk':
                        $controller_obj->doimk();
                        break;
                         case'myorder':                 
                    $controller_obj->myorder();
    
                    break;
    
                     case'hoadon':                            
                      $controller_obj->myorder_hoadon();          
                    break;
    
    
                        default:
                            header('location: ?act=error');
                            break;
                    }
                } else {
                    switch ($act) {
                        case 'login':
                            $controller_obj->login();
                            break;
                        case 'dangnhap':
                            $controller_obj->login_action();
                            break;
                        case 'dangky':
                            $controller_obj->dangky();
                            break;
                        default:
                            $controller_obj->login();
                            break;
                    }
                  
                }
            }
            break;
    default:
         require_once('controllers/HomeController.php');
         $controller_obj = new Homecontroller();
         $controller_obj->List();
         break;


}
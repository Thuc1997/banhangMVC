<?php 

$act = isset($_GET['act'])?$_GET['act']:"home";
switch($act){
    case 'home':
         require_once('home.php');
         break;
    case 'shop':
         require_once('shop.php');
         break;
    case 'tintuc':
         require_once('tintuc.php');
         break; 
    case 'detail':
         require_once('chitiet.php');
         break;
    case 'cart':
         require_once('cart.php');
         break;
     
    case "checkout":
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            switch ($act) {
                case 'list':
                    require_once("checkout.php");
                    break;
                case 'order_complete':
                    require_once("orderComplete.php");
                    break;
                default:
                    require_once("checkout.php");
                    break;
    }
        break;     

     case "taikhoan":
          $act = isset($_GET['xuli']) ? $_GET['xuli'] : "login";
          if (isset($_SESSION['isLogin1']) && $_SESSION['isLogin1'] == true) {
              switch ($act) {
  
                  case 'login':
                  require_once("dangnhap.php");
                  break;
  
                  case 'account':
                  require_once("myAcount.php");
                  break;
  
                  case 'doimk':
                  require_once("login/doimk.php");   
                  break; 
  
                  case 'myorder':
                  require_once("login/myorder.php");      
                  break; 
  
                   case 'hoadon':
                        
                  require_once("login/chitiethoadon.php");                 
                  break;
                 
                  default:
                  require_once("dangnhap.php");
                  break;
              } break;
             
          } else {
              if ((isset($_SESSION['isLogin_Admin1']) && $_SESSION['isLogin_Admin1'] == true) || (isset($_SESSION['isLogin_Nhanvien1']) && $_SESSION['isLogin_Nhanvien1'] == true)) {
                  switch ($act) {
                      case 'login':
                      require_once("dangnhap.php");
                      break;
  
                      case 'account':
                      require_once("myAcount.php");
                      break;
  
                      case 'doimk':
                      require_once("login/doimk.php");
                      break; 
  
                      case 'myorder':
                      require_once("login/myorder.php");
                      break;
  
                       case 'hoadon':
                        
                      require_once("login/chitiethoadon.php");                 
                       break;
                     
                      default:
                      require_once("dangnhap.php");
                      break;
                  } break;
              } else {
                  switch ($act) {
                      case 'login':
                          require_once("dangnhap.php");
                          break;
                      default:
                          require_once("dangnhap.php");
                          break;
                  }
              } break;
          }
          break;

          default:
          require_once('404.php');
          break;


}
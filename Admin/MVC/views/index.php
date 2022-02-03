<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trang quản trị</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="public/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="public/css/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="public/css/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="public/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="public/css/daterangepicker.css">
  <!-- summernote -->

  <!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="public/image/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <?php require_once('header.php')?>
  <?php require_once('sidebar.php')?>
    <?php
      if (isset($_SESSION['isLogin_Admin1']) && $_SESSION['isLogin_Admin1'] == true) {
        $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
        $act = isset($_GET['act']) ? $_GET['act'] : "admin";
        switch ($mod) {
            case 'login':
                switch ($act) {
                  case 'admin':
                    require_once('MVC/views/main.php');
                    break;
                  default:
                    require_once('MVC/views/main.php');
                    break;
                }
            break; 
            case 'hoadon':
              switch ($act) {
                case 'list':
                  require_once('MVC/views/hoadon.php');
                  break;
                case 'chitiet':
                  require_once('MVC/views/cthoadon.php');
                  break;  
                default:
                  require_once('MVC/views/hoadon.php');
                  break;
              }
              break;
            case 'sanpham':
                switch ($act) {
                  case 'list':
                    require_once('MVC/views/sanpham.php');
                    break;
                  case 'add':
                    require_once('MVC/views/add_sanpham.php');
                    break;
                  case 'edit':
                    require_once('MVC/views/edit_sanpham.php');
                    break;
                  default:
                    require_once('MVC/views/sanpham.php');
                    break;
                }
            break;
        }
      }else {
        if (isset($_SESSION['isLogin_Nhanvien1']) && $_SESSION['isLogin_Nhanvien1'] == true){
        $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
        $act = isset($_GET['act']) ? $_GET['act'] : "admin";
        switch ($mod) {
            case 'login':
                switch ($act) {
                  case 'admin':
                    require_once('MVC/views/main.php');
                    break;
                  default:
                    require_once('MVC/views/main.php');
                    break;
                }
            break; 
            case 'hoadon':
              switch ($act) {
                case 'list':
                  require_once('MVC/views/hoadon.php');
                  break;
                case 'chitiet':
                  require_once('MVC/views/cthoadon.php');
                  break;  
                default:
                  require_once('MVC/views/hoadon.php');
                  break;
              }
              break;
            case 'sanpham':
                switch ($act) {
                  case 'list':
                    require_once('MVC/views/sanpham.php');
                    break;
                  case 'add':
                    require_once('MVC/views/add_sanpham.php');
                    break;
                  case 'edit':
                    require_once('MVC/views/edit_sanpham.php');
                    break;
                  default:
                    require_once('MVC/views/sanpham.php');
                    break;
                }
            break;
        }     
      }
    }  
    ?>
  <?php require_once('fotter.php')?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="public/js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="public/js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
});
</script>
<!-- Bootstrap 4 -->
<script src="public/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="public/js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="public/js/sparkline.js"></script>
<!-- JQVMap -->
<script src="public/js/jquery.vmap.min.js"></script>
<script src="public/js/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="public/js/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="public/js/moment.min.js"></script>
<script src="public/js/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="public/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="public/js/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="public/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="public/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="public/js/dashboard.js"></script>
<!-- ck edittor -->



</body>
</html>

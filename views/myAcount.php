<div class="loginn my-3">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-12 order-1">
                <div class="left-main">
                    <ul class="mb-0">
                        <li class="bg-primary"><p class="mb-0">Thông tin</p> </li>
                  
                     <?php 
   
                        ?>
                        <?php if(isset($_SESSION['isLogin_Admin1']) || isset($_SESSION['isLogin_Nhanvien1'])){ ?>
                           
                                  <li><a href="admin/?mod=login">Trang quản trị</a></li>
                        
                            <?php }?>
                            <li><a href="">Thong tin ca nhan</a></li>
                  
                        <li><a href="">Đơn hàng của tôi</a></li>
                        <li><a href="">Đổi mật khẩu</a></li>
                        <li><a href="?act=taikhoan&xuli=dangxuat">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-9 col-12 order-0">
                <div class="more">
                    <div class="rightmain1">
                        <span>THÔNG TIN TÀI KHOẢN</span>                      
                    </div>
                    <div class="form mt-4">
                            <!-- than o dây -->
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="loginn my-3">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-12 order-1">
                <div class="left-main">
                    <ul class="mb-0">
                        <li class="bg-primary"><a>Tài khoản</a></li>
                        <li><a href="">Đăng nhập</a></li>
                        <li><a href="">Đăng kí</a></li>
                        <li><a href="">Quyên mật khẩu</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-9 col-12 order-0">
                <div class="more">
                    <div class="rightmain">
                            <span>ĐĂNG NHẬP HỆ THỐNG</span>                       
                    </div>
                      
                    <div class="form mt-4">
                        <form action="?act=taikhoan&xuli=dangnhap" method="POST">
                            <label for="">Tài khoản</label>
                            <input type="text" name="tkk"><br>
                            <label for="">Mật khẩu</label>
                            <input type="password" name="mkk"><br>
                            <input type="submit" name="sub" value="Đăng nhập" class="zoo bg-primary px-4 py-1 text-white border-0">
                        </form>

                        <?php if (isset($_COOKIE['msg2'])) { ?>
                            <span class="text-danger"><?= $_COOKIE['msg2'] ?></span>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
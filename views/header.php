<!-- header của trang web -->
<div class="header">
                <div class="header_top pt-2 pb-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-sm-5">
                                <div class="row d-flex align-items-center">
                                        <div class="col d-md-none bar">
                                            <i class="fas fa-bars fonticon"></i>
                                        </div>
                                        <div class="col-6 d-flex align-items-center"> 
                                            <a href="?act=home" class="logo">
                                                <img src="./public/image/logo.png" alt="">
                                            </a>
                                        </div>
                                        <a class="col d-md-none" href="tel://0968712490">
                                            <i class="fas fa-phone-alt fonticon"></i>
                                        </a>
                                        <a class="col d-md-none shopping">
                                             <i class="fas fa-shopping-bag fonticon"></i>
                                             <!-- <div class="numshop">0</div> -->
                                        </a>
                                        <?php if(isset($_SESSION['login1'])) { ?>  
                                            <a class="col d-md-none" href="?act=taikhoan&xuli=account">
                                                <i class="fas fa-user fonticon"></i>
                                            </a>
                                        <?php }else{ ?>   
                                            <a class="col d-md-none" href="?act=taikhoan">
                                                <i class="fas fa-user fonticon"></i>
                                            </a>
                                        <?php } ?>
                                        <div class="col-6 d-none d-sm-block">
                                            <div class="box-search">
                                                <img src="./public/image/icons8-search.svg" alt="">
                                                <input type="text" placeholder="Tìm sản phẩm" class="search">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-sm-7 d-none d-sm-block">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="" class="icon_hed">
                                            <i class="fas fa-phone-alt icon_hed1"></i>
                                            &nbsp;
                                            0968 712 490
                                        </a>
                                    </div>
                                    <div class="col-4">

                                     <?php if(isset($_SESSION['login1'])) { ?>  
                                            <a href="?act=taikhoan&xuli=account" class="icon_hed">
                                                <i class="fas fa-user icon_hed1"></i>
                                                &nbsp;
                                                <?=$_SESSION['login1']['taikhoan'] ?> 
                                            </a>
                                    <?php }else{ ?>
                                        <a href="?act=taikhoan" class="icon_hed">
                                                <i class="fas fa-user icon_hed1"></i>
                                                &nbsp;
                                                tài khoản
                                        </a>
                                    <?php } ?>
                                    </div>
                                    <div class="col-4">
                                        <a href="?act=cart" class="icon_hed">
                                                <?php
                                                    $numberCart=0;
                                                    if(isset($_SESSION['addcart'])){
                                                        foreach ($_SESSION['addcart'] as $value) {
                                                            $numberCart++;
                                                    
                                                         }
                                                    }

                                                ?>
                                            <i class="fas fa-shopping-bag icon_hed1"></i>
                                            &nbsp;

                                            <span id="numberCart"><?=$numberCart?></span>                             
                                            sản phẩm
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header_bottom d-none d-sm-block">
                    <div class="container">
                            <ul class="title_produca">
                             <?php $i = 1; foreach ($data_chitietDM as $row ) { ?>
                                <li class="px-xl-3 px-sm-0 px-0">
                                    <a href="?act=shop&sp=<?= $i?>">
                                        <img src="./public/image/<?= $data_danhmuc[$i-1]['anhDM'] ?>" alt=""><br>
                                        <span class="textt"><?= $data_danhmuc[$i-1]['tenDM'] ?></span>
                                   </a>
                                    <ul class="title_producain">
                                        <?php foreach ($row as $value) { ?>
                                            <li><a href="?act=shop&sp=<?= $value['maDM'] ?>&loai=<?= $value['tenLSP'] ?>"><i class="fas fa-caret-right"></i>&ensp;<?= $value['tenLSP'] ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <?php $i++; } ?>
                            </ul>
                    </div>
                </div>
                <div class="nav_menu">
                        <ul>
                            <?php $i = 1; foreach ($data_chitietDM as $row ) { ?>
                                <li><a href="?act=shop&sp=<?= $i?>"><?= $data_danhmuc[$i-1]['tenDM'] ?><i class="right_icon fas fa-chevron-down"></i></a>
                                    <ul>
                                        <?php foreach ($row as $value) { ?>
                                            <li><a href="?act=shop&sp=<?= $value['maDM'] ?>&loai=<?= $value['tenLSP'] ?>"><?= $value['tenLSP'] ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php $i++; } ?>
                        </ul>
                </div>
        </div>
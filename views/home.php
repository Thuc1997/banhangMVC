<div class="slider">
                <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                        <!-- Slides -->
                            <?php $i=1; foreach ($data_banner as  $value) { ?>
                                <div class="swiper-slide"><a href="javascript:void(0)"><img src="./public/image/<?=$value['imgSL']?>"></a></div>
                            <?php } ?>
                        </div>
                        <!-- If we need pagination -->
                        <!-- <div class="swiper-pagination"></div> -->
                    
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                </div>
        </div>
        <div class="produca">
             <div class="container">
                    <div class="pro_title text-center pt-5 pb-2">
                        <h3>bộ sưu tập</h3>
                   </div>

                    <div class="pro">
                         <div class="row">
                         <?php $i = 1; foreach ($data_chitietDM1 as $row ){ ?>
                            <div class="col-xl-4 col-sm-5 col-6 mt-3">
                                <a href="?act=shop&sp=<?= $i?>" class="link-pro"><img src="./public/image/<?= $data_danhmuc[$i-1]['anhST'] ?>" alt="" class="width100"></a>
                            </div>
                            <?php $i++;} ?>
                        </div>
                    </div>
             </div>
        </div>
        <div class="produca_new">
            <div class="container">
                    <div class="pro_title text-center pt-5 pb-2">
                        <h3>sản phẩm <b>mới</b></h3>
                    </div>
                    <div class="row">
                    <?php $i=1; foreach ($new_pro as  $moi) {   
                            if($moi['phantram'] >0){
                                $toi = $moi['giacu'] *((100-$moi['phantram'])/100);
                            }
                        ?>
                        
                            <div class="col-xl-3 col-sm-4 col-6">
                                    <a href="?act=detail&id=<?=$moi['maSP'] ?>" class="link-pro1"><img src="./public/image/<?=$moi['hinhanh1']?>" alt="" class="width100"></a>
                                    <div class="percent"><?=$moi['phantram']?>%</div>
                                    <div class="titlee_proo">
                                        <a href="?act=detail&id=<?=$moi['maSP'] ?>"><?=$moi['tenSP']?></a>
                                    </div>
                                    <div class="price">
                                        <span><?=number_format($moi['giacu'])?><sup>đ</sup></span>

                                        <b class="text-danger"><?=number_format($toi)?><sup>đ</sup></b>
                                    </div>
                                    <div class="wpmau">
                                        <span>
                                            <img src="./public/image/<?=$moi['hinhanh1']?>" alt="">
                                        </span>
                                    </div>
                            </div>
                    <?php } ?>
                   </div>
                   <div class="more text-center mt-4">
                       <a href="javascript:void(0)" class="bg-primary">xem thêm các mẫu mới</a>   
                   </div>
            </div>
        </div>
        <div class="believe_new">
                <div class="container">
                    <div class="pro_title text-center pt-5 pb-2">
                        <h3>tin thời trang</h3>
                   </div>
                        <div class="row mt-2">
                            <div class="col-xl-7 col-12 mb-4">
                                    <div class="left-tin">
                                        <a href=""><img src="./public/image/tin1.jpg" class="w-sm-25"></a>
                                            <div class="link-tin mt-3">
                                                <a href="" class="mt-6">TOP 10 SHOP ĐẦM ĐẸP CHO PHÁI ĐẸP TẠI SÀI GÒN</a>
                                            </div>
                                    </div>
                            </div>
                            <div class="col-xl-5 col-12">
                                    <div class="right-tin">
                                         <div class="item-new mb-3">
                                                <a href=""><img src="./public/image/new1.png" class="w-100"></a>
                                                <div class="right-text ml-2">
                                                    <a href="" class="">TOP 5 XƯỞNG MAY QUẦN ÁO THỜI TRANG CHẤT LƯỢNG 2022</a><br>
                                                        <div class="text-tin mt-3">
                                                             <span class="mt-3 d-none d-sm-block">Nhắc đến mặt hàng quần áo và thời trang thì có lẽ ..</span>
                                                        </div>
                                                </div>
                                         </div>
                                         <div class="item-new mb-3">
                                                <a href=""><img src="./public/image/new1.png" class="w-100"></a>
                                                <div class="right-text ml-2">
                                                    <a href="" class="">TOP 5 XƯỞNG MAY QUẦN ÁO THỜI TRANG CHẤT LƯỢNG 2022</a><br>
                                                    <div class="text-tin mt-3">
                                                        <span class="mt-3 d-none d-sm-block">Nhắc đến mặt hàng quần áo và thời trang thì có lẽ ..</span>
                                                   </div>
                                                </div>
                                         </div>
                                         <div class="item-new mb-3">
                                                 <a href=""><img src="./public/image/new1.png" class="w-100"></a>
                                                <div class="right-text ml-2">
                                                    <a href="" class="">TOP 5 XƯỞNG MAY QUẦN ÁO THỜI TRANG CHẤT LƯỢNG 2022</a><br>
                                                    <div class="text-tin mt-3">
                                                        <span class="mt-3 d-none d-sm-block">Nhắc đến mặt hàng quần áo và thời trang thì có lẽ ..</span>
                                                   </div>
                                                </div>
                                         </div>
                                         <div class="mt-3">
                                            <a href="" class="">Xem thêm tin thời trang khác</a>
                                         </div>       
                                    </div>
                            </div>
                        </div>
                </div>
        </div>
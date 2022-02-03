<!-- chi tiết -->
      
<div class="producact mt-4">
    <div class="container">
            <div class="row">
           
                     <div class="col-xl-5 col-sm-8">
                                <div class="show" href="./public/image/<?=$data['hinhanh1']?>">
                                    <?php if ($data['hinhanh1'] != null) { ?>   
                                       <img src="./public/image/<?=$data['hinhanh1']?>" id="show-img" style="width: 100%;">
                                    <?php } ?>
                               </div>
                    </div>
                    <div class="col-xl-2 col-sm-4">
                      <!-- Secondary carousel image thumbnail gallery -->
                      <div class="small-img">
                           
                                 <div class="small-container">
                                    <img src="./public/image/next-icon.png" class="icon-left" alt="" id="prev-img">
                                         <div id="small-img-roll">
                                           <img src="./public/image/<?=$data['hinhanh1']?>" class="show-small-img mb-2" alt="">
                                           <img src="./public/image/<?=$data['hinhanh2']?>" class="show-small-img mb-2" alt="">
                                           <?php if ($data['hinhanh3'] != null){ ?> 
                                           <img src="./public/image/<?=$data['hinhanh3']?>" class="show-small-img mb-2" alt="">
                                           <?php } ?>
                                           <?php if ($data['hinhanh4'] != null){ ?> 
                                           <img src="./public/image/<?=$data['hinhanh4']?>" class="show-small-img mb-2" alt="">
                                           <?php } ?>
                                           <?php if ($data['hinhanh5'] != null){ ?> 
                                           <img src="./public/image/<?=$data['hinhanh5']?>" class="show-small-img mb-2" alt="">
                                           <?php } ?>
                                           <?php if ($data['hinhanh6'] != null){ ?>   
                                           <img src="./public/image/<?=$data['hinhanh6']?>" class="show-small-img mb-2" alt="">
                                            <?php } ?>


                                         </div>
                                     <img src="./public/image/next-icon.png" class="icon-right" alt="" id="next-img">
                                 </div>            
                      </div>
                    
                </div>
            <div class="col-xl-5 col-sm-12 titlemain">
                      
                              <h5><?=$data['tenSP']?></h5>
                              <span class="maso">MSP: <?=$kq?></span>
                              <div class="pricee">
                                  <span class="pricecu"><?=number_format($data['giacu'])?><sup>đ</sup></span>
                                  <span class="pricemoi"><?=number_format($toi)?><sup>đ</sup></span><br>
                                  <span class="giamgia text-danger">-<?=$data['phantram']?>%</span><br>
                              </div>
                              <div class="mausac">
                                  <p class="title_sp">Màu sắc:</p>
                                    <span class="itemc">
                                      
                                            <input class="active" type="button" value="<?=$data['mau1']?>">
                                          
                                        <?php if ($data['mau2'] != null) { ?>
                                            <input class="" type="button" value="<?=$data['mau2']?>">
                                        <?php } ?>
                                        <?php if ($data['mau3'] != null) { ?>
                                            <input class="" type="button" value="<?=$data['mau3']?>">
                                        <?php } ?>
                                        <?php if ($data['mau4'] != null) { ?>
                                            <input class="" type="button" value="<?=$data['mau4']?>">
                                        <?php } ?>
                                    </span>
                                       
                              </div>
                              <div class="size">
                                  <p class="title_sp">Size:</p>
                                    <span class="itemc"> 
                                            <input class="active" type="button" value="<?=$data['size1']?>"> 
                                            <?php if ($data['size2'] != null){ ?>                            
                                            <input class="" type="button" value="<?=$data['size2']?>"> 
                                            <?php } ?>                              
                                            <?php if ($data['size3'] != null){ ?> 
                                                    <input class="" type="button" value="<?=$data['size3']?>">
                                            <?php } ?>
                                            <?php if ($data['size4'] != null){ ?> 
                                                <input class="" type="button" value="<?=$data['size4']?>">
                                            <?php } ?>
                                    </span>
                              </div>
                              <div class="soluong">
                                  <p class="title_sp">Số lượng:</p>
                                    <div class="buttons_added">
                                        <input class="minus is-form" type="button" value="-">
                                        <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1" id="num">
                                        <input class="plus is-form" type="button" value="+">
                                    </div>
                              </div>
                         
                              <div class="d-flex mt-3">
                                    <div class="col-xl-6">
                                        <button type="button" class="btn btn-success width100">Mua Hàng</button>
                                    </div>   
                                    <div class="col-xl-6">
                                        <button type="submit" id="<?=$data['maSP']?>" class="btn btn-danger width100" onclick="addcart(<?= $data['maSP']?>)">Thêm vào giỏ hàng</button>
                                    </div>
                              </div> 
                            
                            
                              <div class="mota_app mt-4">

                                    <div class="mota_open"><i class="fa fa-angle-down drop"></i></div>
                                    <div class="mota">
                                        <nav class="mt-4">
                                            <ul class="mota_hed d-flex">
                                                    <li class="mota_title active">
                                                        <a class="mx-2 chitiet">Chi tiết</a>
                                                    </li>
                                                    <li class="mota_title baoquan">
                                                        <a class="mx-2 ">Bình luận</a>
                                                    </li>
                                                    <li class="mota_title thamkhaosize">
                                                        <a class="mx-2 ">Tham khảo size</a>
                                                    </li>
                                            </ul>
                                        </nav>
                                     
                                            <div class="mota_body mt-3">
                                                    <div class="mota_chitiet">
                                                        <p><?=$data['mota']?></p>
                                                    </div>
                                                    <div class="mota_baoquan">
                                                       
                                                    </div>
                                                    <div class="mota_size d-xl-none">
                                                    
                                                        <img src="./public/image/size.jpg" alt="" class="">
                                                    </div>

                                            </div>
                                    </div>
                            </div>

                    </div>
            </div>
    </div>
</div>


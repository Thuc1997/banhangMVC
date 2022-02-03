<!-- phần thân  -->
<div class="container"> 
    <div class="cart" id="listcart">
        <div class="headd my-3">
                <div class="rightmain1">
                        <span>GIỎ HÀNG CỦA TÔI</span>                      
                </div>
        </div>
           
         <table id="cart" class="table table-hover table-condensed mt-5"> 
          <thead> 
           <tr> 
            <th style="width:40%">TÊN SẢN PHẨM</th> 
            <th style="width:10%" class="text-center">GIÁ</th>
            <th style="width:10%" class="text-center">SIZE</th>
            <th style="width:10%" class="text-center">MÀU SẮC</th>
            <th style="width:10%" class="text-center">SỐ LƯỢNG</th> 
            <th style="width:15%" class="text-center">THÀNH TIỀN</th> 
            <th style="width:5%"></th> 
           </tr> 
          </thead> 
          <tbody>

                                 <?php
                                        if (isset($_SESSION['addcart'])) {
                                            foreach ($_SESSION['addcart'] as $value) {  
                                                if($value['phantram'] >0){
                                                    $toi = $value['giacu'] *((100-$value['phantram'])/100);
                                                } 

                                ?>
                    <tr> 
                        <td data-th="Product"> 
                            <div class="row"> 
                            <div class="col-sm-2 hidden-xs"><img src="./public/image/<?=$value['hinhanh1']?>" alt="Sản phẩm 1" class="img-responsive" width="60">
                            </div> 
                            <div class="col-sm-10"> 
                            <p><?=$value['tenSP']?><p> 
                            </div> 
                            </div> 
                        </td> 
                        <td data-th="Price"  class="text-center"><?=number_format($toi)?><sup> đ</sup></td>
                        <td data-th="Price"  class="text-center"><?=$value['size']?></td> 
                        <td data-th="Price"  class="text-center"><?=$value['loai']?></td>

                        <td data-th="Quantity"  class="text-center">
                            <span><?= $value['soluong']?></span>                                      
                        </td> 
                        <td data-th="Subtotal" class="text-center"><?=number_format($value['ThanhTien'])?><sup> đ</sup></td> 
                        <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm" onclick="deleteCart(<?= $value['maSP'] ?>)"><i class="far fa-trash-alt"></i></button> 
                        </td> 
                    </tr>
                <?php }} ?>

          </tbody>
         </table>

            <div class="thanhtoann mb-4">
                        <div class="pricce text-right">
                            <span id="cart1">Thanh toán :<b class="text-primary"> <?=number_format($count)?><sup> vnđ</sup></b></span>
                        </div>
                        <?php if(isset($_SESSION['addcart'])){?>
                        <div class="btn-ttt text-right">
                            <a href="?act=home" class="btn-tv">Tiếp tục mua hàng</a>
                            <a href="?act=checkout" class="btn-tt">Tiến hành thanh toán</a>
                        </div> 
                        <?php } ?>                       
            </div>  
           

        </div>
</div>   

<!-- phần thân  -->
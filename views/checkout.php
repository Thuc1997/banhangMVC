<!-- main -->
<div class="loginn my-3">
    <div class="container">
        
        <div class="rightmain1">
            <span>THANH TOÁN</span>                      
        </div>
        <div class="row">
            <div class="col-xl-6 col-12 mt-3 py-2">
                <span>1. ĐỊA CHỈ THANH TOÁN VÀ GIAO HÀNG</span>

                <?php if (isset($_SESSION['login1'])) { ?>
                        <?php $data= $_SESSION['login1']?>
        <form id="checkout-container" action="?act=checkout&xuli=save"  method="POST">
                <div class="tontai">
                    <div class="container">
                        <div class="row">
                        <div class="col-25">
                            <label class="labell" for="fname">Họ và tên</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="hoten" name="HoTen"  placeholder="Tên của bạn" value="<?=$data['hoten']?>">
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label class="labell" for="fname">Số điện thoại</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="Phone" placeholder="Số điện thoại" value="<?=$data['SDT']?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label class="labell" for="fname">Email</label>
                            </div>
                            <div class="col-75">
                                <input id="fname"  name="Email" type="email" placeholder="Email" value="<?=$data['Email']?>">
                            </div>
                        </div>

                        <!-- <div class="row">
                            <div class="col-25">
                            <label class="labell" for="country">Tỉnh / Thành phố</label>
                            </div>
                            <div class="col-75">
                                
                            <select name="calc_shipping_provinces" required="" >
                                 <option value="">Chọn Tỉnh Thành phố</option>
                            </select>
                            <input class="billing_address_1" name="DiaChi" type="hidden" value="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label class="labell" for="country">Quận / Huyện</label>
                            </div>
                            <div class="col-75">

                            <select name="calc_shipping_district" required="">
                                <option value="">Chọn Quận Huyện</option>
                            </select>
                            <input class="billing_address_2" name="DiaChi" type="hidden" value="">
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-25">
                        <label class="labell" for="country">Xã / Phường</label>
                        </div>
                        <div class="col-75">

                        <select class="form-select form-select-sm" id="ward" aria-label=".form-select-sm" name="country">
                            <option value="" selected>Chọn phường xã</option>
                            <option value="Cam thượng" selected>Cam thượng</option>
                            <option value="Đường lâm" selected>Đường lâm</option>
                            <option value="Văn minh" selected>Văn minh</option>
                            <option value="Thăng thắc" selected>Thăng thắc</option>
                            <option value="Bài nha" selected>Bài nha</option>
                        </select>

                        </div>
                        </div> -->
        
                        <div class="row">
                            <div class="col-25">
                                <label class="labell" for="fname">Địa chỉ</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="DiaChi"  placeholder="Địa chỉ" value="<?=$data['diachi']?>">
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-25">
                            <label class="labell" for="subject">Ghi chú đơn hàng</label>
                        </div>
                        <div class="col-75">
                            <textarea id="subject" name="GhiChu" placeholder="Viết gì đó..." style="height:100px"></textarea>
                        </div>
                        </div>
                        
                        </div>
                    </div>
                </div>

            <?php } else{ ?>

                <div class="tontai">
                    <div class="container">
                        <div class="row">
                        <div class="col-25">
                            <label class="labell" for="fname">Họ và tên</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="hoten" name="HoTen" placeholder="Tên của bạn">
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label class="labell" for="fname">Số điện thoại</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="Phone" placeholder="Số điện thoại">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label class="labell" for="fname">Email</label>
                            </div>
                            <div class="col-75">
                                <input name="Email" type="email" id="fname" placeholder="Email">
                            </div>
                        </div>

                        <!-- <div class="row">
                            <div class="col-25">
                            <label class="labell" for="country">Tỉnh / Thành phố</label>
                            </div>
                            <div class="col-75">
                                <select name="calc_shipping_provinces" required="">
                                    <option value="">Chọn Tỉnh Thành phố</option>
                                </select>
                                <input class="billing_address_1" name="DiaChi" type="hidden" value="">
                            </div>
                        </div> -->

                        <!-- <div class="row">
                            <div class="col-25">
                            <label class="labell" for="country">Quận / Huyện</label>
                            </div>
                            <div class="col-75">
                                <select name="calc_shipping_district" required="">
                                    <option value="">Chọn Quận Huyện</option>
                                </select>
                                <input class="billing_address_2" name="DiaChi" type="hidden" value="">
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-25">
                        <label class="labell" for="country">Xã / Phường</label>
                        </div>
                        <div class="col-75">
                            <select class="form-select form-select-sm" id="ward" aria-label=".form-select-sm" name="country">
                                <option value="" selected>Chọn phường xã</option>
                            </select>
                        </div>
                        </div> -->
        
                        <div class="row">
                            <div class="col-25">
                                <label class="labell" for="fname">Địa chỉ</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="DiaChi"  placeholder="Địa chỉ">
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-25">
                            <label class="labell" for="subject">Ghi chú đơn hàng</label>
                        </div>
                        <div class="col-75">
                            <textarea id="subject" name="GhiChu" placeholder="Viết gì đó..." name="gc" style="height:100px"></textarea>
                        </div>
                        </div>
                        
                        </div>
                    </div>
                </div>

                <?php } ?>

<script>
   
   function checkmaKM(){                 
            makm=$('#makm').val();
                if(makm!=''){
                var url='./controllers/checkoutController.php';
                    $.ajax({       
                    type: "POST",
                    url: './views/xuli.php',                                      
                    data:
                    {'makm':makm,},
                    success: function(dataResult){
                        var msg = $.parseJSON(dataResult);
                            if(msg.statusCode==200){   
                                var gtkm=msg.value;            
                                    var s=$('#xnxx4').text();
                                var i=s.replace(/,/g,"");
                                    var z=parseInt(i);
                                var k=z-parseInt(gtkm);        
                                    var g=formatNumber(k)                
                                          $('#xnxx4').text(g);
                                            $('#tongtienhang').val(k);
                                
                                        var gtfm=formatNumber(gtkm);
                                         $('#message').html("Bạn được giảm giá: " + gtfm + " vnđ");
                                         $('#checkmakm').attr('disabled','disabled');
                                
                                        }else if(msg.statusCode==201){
                                             $('#message').html("Mã khuyến mãi không hợp lệ!");
                                         }
                                           }, 
                                        error:function(dataResult){}      
                                   });
                                   }else{
                                     $('#message').html("Vui lòng nhập mã giảm giá!");
                                        }
                                }
                                $(document).ready(function() {

                                $('#country').change(function(){
                                   var k=($('#country :selected').text());
                                   $('#pttt').val(k);
                                });
                            });

</script>
            <div class="col-xl-6 col-12 mt-3 py-2">
                <span>2. THANH TOÁN VÀ VẬN CHUYỂN</span>
                <div class="container">
                    <div class="row">
                        <div class="col-25">
                        <label class="labell" for="country">Vận chuyển</label>
                        </div>
                            <div class="col-75">
                                    <select id="country" name="country">
                                        <option value="">--Chọn phương thức vận chuyển--</option>
                                        <option value="90000">Vận chuyển nhanh</option>
                                        <option value="25000">Vận chuyển chậm</option>
                                </select>
                                <input type="hidden" name="pttt" id="pttt" value="">
     
                            </div>
                
                    </div>
                    <div class="row justify-content-end">
                                    <input type="button" value="Chọn lại" name="chonlai" id='buttonreset'>
                        </div>

                    <div class="row">
                        <div class="col-25">
                            <label class="labell" for="fname">Mã giảm giá</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="makm" name="makhuyenmai" placeholder="Nhập mã giảm giá">
                        </div>
                
                    </div>
                    <div class="row justify-content-end">
                        <input type="button" value="Sử dụng" name="sudung" onclick="checkmaKM()" id='checkmakm'>
                    </div>
                    <div class="mess mt-1">
                        <span>Vận chuyển :</span>
                        <span id="tienship">0</span>
                    </div>
                    <span id="message"></span>
                        <div class="tongg d-flex justify-content-between my-3 py-1">
                            <span>Tổng thanh toán :</span>
                            <div class="priceee d-flex align-items-baseline">
                                 <h5 id="xnxx4" class="vndd1 text-danger"><?=number_format($count )?></h5>
                                 <sup class="vndd text-danger">&nbsp;vnđ</sup>
                            </div>
                          
                            <input type="hidden" id="tongtienhang" name="tongtien" value="">
                        </div>
                        <?php if (isset($_COOKIE['msg'])) { ?>
                                <span><?= $_COOKIE['msg'] ?></span>
                         <?php } ?>
                    <div class="row">
              
                        <input type="submit" value="Đặt hàng" name="dathang" id="dathang"> 
                    
                   
                          

                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<!-- main -->

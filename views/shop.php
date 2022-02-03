   <!-- danh muc -->
   
        <div class="produca_new mb-3">
            <div class="container">             
                    <div class="pro_title text-center pt-5 pb-2">
                        <?php     

                            if(isset($_GET['sp']) and isset($_GET['loai'])) {?>                  
                                    <h2><?=$_GET['loai']?></h2>
                          <?php }else { ?>
                                 <h2><?=$dataa[0]['tenDM']?></h2>
                          <?php }?>                        
                    </div>
                  
        <div class="row my-4">
            <div class="col-xl-3 col-sm-4 col-6">
                <div class="dropdown">
                        <select name="one" class="dropdown-select">
                          <option value="0">sắp xếp</option>
                          <option value="1">Option #1</option>
                          <option value="2">Option #2</option>
                          <option value="3">Option #3</option>
                        </select>             
                 </div>
            </div>     

            <div class="col-xl-3 col-sm-4 col-6">
                <div class="dropdown">
                    <select name="one" class="dropdown-select">
                      <option value="0">mức giá</option>
                      <option value="1">Option #1</option>
                      <option value="2">Option #2</option>
                      <option value="3">Option #3</option>
                    </select>             
                 </div>
            </div>

            <div class="col-xl-3 col-sm-4 col-6 d-none d-sm-block">
                 <div class="dropdown">
                    <select name="one" class="dropdown-select">
                      <option value="0">màu sắc</option>
                      <option value="1">Option #1</option>
                      <option value="2">Option #2</option>
                      <option value="3">Option #3</option>
                    </select>             
                 </div>
            </div>

            <div class="col-xl-3 col-sm-4 col-6 d-none d-sm-block">
                 <div class="dropdown">
                    <select name="one" class="dropdown-select">
                      <option value="0">kích thước</option>
                      <option value="1">Option #1</option>
                      <option value="2">Option #2</option>
                      <option value="3">Option #3</option>
                    </select>             
                 </div>
            </div>
        </div>

                    <div class="row">
                      <?php
                        if(isset($data) and $data != null){
                          foreach($data as $value){
                            if($value['phantram'] >0){
                              $toi = $value['giacu'] *((100-$value['phantram'])/100);
                          }
                        ?>
                            <div class="col-xl-3 col-sm-4 col-6 boxx mb-3">
                                         <a href="?act=detail&id=<?=$value['maSP'] ?>" class="link-pro1"><img src="./public/image/<?=$value['hinhanh1']?>" alt="" class="width100"></a>                                
                                    <div class="percent"><?=$value['phantram']?>%</div>
                                    <div class="titlee_proo">
                                        <a href="?act=detail&id=<?=$value['maSP'] ?>"><?=$value['tenSP']?></a>
                                    </div>
                                    <div class="price">
                                        <span><?=number_format($value['giacu'])?><sup>đ</sup></span>
                                        <b class="text-danger"><?=number_format($toi)?><sup>đ</sup></b>
                                    </div>
                                    <div class="wpmau">
                                        <span>
                                            <img src="./public/image/sp1.jpg" alt="">
                                        </span>
                                    </div>
                                      <!-- <a href="#" data-name="Orange" data-price="20000" class="add-to-cart"><i class="fas fa-shopping-cart"></i></a>  -->
                            </div>    
                            <?php }}
                            else{
                              
                            echo '<p> KHÔNG CÓ DỮ LIỆU </p>';}?>         
                   </div>
            </div>
        </div>



<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Thêm sản phẩm</h1>
          </div><!-- /.col -->  
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>

    <!-- /.content-header -->
<div class="mx-2">
     <form action="?mod=sanpham&act=store" method="POST" role="form" enctype="multipart/form-data">  
                    <div class="form-row">  
                    <div class="col-md-6">  
                    <span for="exampleFormControlSelect1">Danh mục</span>
                        <select class="form-control" id="exampleFormControlSelect1" name="MaDM">
                            <?php foreach($data_dm as $dm){?>
                               <option value="<?=$dm['maDM']?>"><?=$dm['tenDM']?></option>
                            <?php }?>
                        </select>
                    </div>    
                        <div class="col-md-6">  
                            <span>Màu sắc 1</span>  
                            <input type="text" placeholder="Chưa nhập" class="form-control" name="Mau1"/>  
                        </div>  
                    </div>  

                    <div class="form-row">
                    <div class="col-md-6">  
                    <span for="exampleFormControlSelect1">Loại sản phẩm</span>
                        <select class="form-control" id="exampleFormControlSelect1" name="MaLSP">
                        <?php foreach($data_lsp as $lsp){?>
                            <option value="<?=$lsp['maLSP']?>"><?=$lsp['tenLSP']?></option>
                        <?php }?>
                        </select>
                    </div>    
                        <div class="col-md-6">  
                            <span>Màu sắc 2</span>  
                            <input type="text" placeholder="Chưa nhập" class="form-control" name="Mau2"/> 
                        </div>  
                    </div> 

                    <div class="form-row">
                        <div class="col-md-6">  
                                <span>Tên sản phẩm</span>  
                                <input type="text" placeholder="Chưa nhập" class="form-control" name="TenSP"/>  
                        </div>  

                        <div class="col-md-6">  
                             <span>Màu sắc 3</span>  
                            <input type="text" placeholder="Chưa nhập" class="form-control" name="Mau3"/> 
                        </div>  
                    </div> 
                    
                    <div class="form-row">          
                        <div class="col-md-6">  
                                <span>Đơn giá</span>  
                                <input type="text" placeholder="Chưa nhập" class="form-control" name="DonGia"/>  
                        </div>  
                 
                    <div class="col-md-6">  
                             <span>Màu sắc 4</span>  
                            <input type="text" placeholder="Chưa nhập" class="form-control" name="Mau4"/> 
                    </div>  
                    </div> 

                    <div class="form-row">
                        <div class="col-md-6">  
                                <span>Số lượng</span>  
                                <input type="text" placeholder="Chưa nhập" class="form-control" name="SoLuong"/>  
                        </div>  

                        <div class="col-md-6">  
                                <span>Size 1</span>  
                                <input type="text" placeholder="Chưa nhập" class="form-control" name="Size1"/> 
                        </div>  
                    </div> 

                    <div class="form-row">
                        <div class="col-md-6">  
                            <div class="form-group">
                                <span for="exampleFormControlFile1">Hình ảnh 1</span>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="HinhAnh1">
                            </div>
                        </div>  

                        <div class="col-md-6">  
                        <span>Size 2</span>  
                                <input type="text" placeholder="Chưa nhập" class="form-control" name="Size2"/> 
                        </div>  
                    </div> 

                    <div class="form-row">
                        <div class="col-md-6">  
                            <div class="form-group">
                                <span for="exampleFormControlFile1">Hình ảnh 2</span>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="HinhAnh2">
                            </div>
                        </div>  

                        <div class="col-md-6">  
                                <span>Size 3</span>  
                                <input type="text" placeholder="Chưa nhập" class="form-control" name="Size3"/> 
                        </div>  
                    </div> 

                    <div class="form-row">
                        <div class="col-md-6">  
                            <div class="form-group">
                                <span for="exampleFormControlFile1">Hình ảnh 3</span>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="HinhAnh3">
                            </div>
                        </div>  

                        <div class="col-md-6">  
                                 <span>Size 4</span>  
                                <input type="text" placeholder="Chưa nhập" class="form-control" name="Size4"/> 
                        </div>  
                    </div> 

                    <div class="form-row">
                        <div class="col-md-6">  
                            <div class="form-group">
                                <span for="exampleFormControlFile1">Hình ảnh 4</span>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="HinhAnh4">
                            </div>
                        </div>  

                        <div class="col-md-6">  
                            <span for="exampleFormControlSelect1">Mã khuyến mại</span>
                            <select class="form-control" id="exampleFormControlSelect1" name="MaKM">
                                <option>Khuyến mại tết</option>
                            </select>
                        </div>  
                    </div> 

                    <div class="form-row">
                        <div class="col-md-6">  
                            <div class="form-group">
                                <span for="exampleFormControlFile1">Hình ảnh 5</span>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="HinhAnh5">
                            </div>
                        </div>  

                        <div class="col-md-6">  
                            <span>Loại sale</span>  
                            <input type="text" placeholder="Chưa nhập" class="form-control" name="LoaiSale"/>  
                        </div>  
                    </div> 

                    <div class="form-row">
                        <div class="col-md-6">  
                            <div class="form-group">
                                <span for="exampleFormControlFile1">Hình ảnh 6</span>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="HinhAnh6">
                            </div>
                            <div class="form-group">
                            <span>Phần trăm giảm giá</span>  
                            <input type="text" placeholder="Chưa nhập" class="form-control" name="Giamgia"/>  
                            </div> 
                            <div class="form-group">
                                <input type="checkbox" id="" placeholder="" value="1" name="TrangThai">&nbsp;<em>(Check cho phép hiện thị sản phẩm)</em>
                            </div>  
                        </div> 

                        <div class="col-md-6">  
                            <span for="">Mô tả</span>
                            <div class="form-group">
                            <textarea class="form-control" id="summernote" placeholder="" name="MoTa"></textarea>
                            </div>
                        </div>  
                    </div> 

                    <div style="margin-top:15px;">  
                        <button type="submit" class="btn btn-primary rounded-0">Create</button>  
                    </div>  
    </form>  
<script>
    $(document).ready(function() {
      $('#summernote').summernote();    
    });
</script>

    </div>    
</div>              
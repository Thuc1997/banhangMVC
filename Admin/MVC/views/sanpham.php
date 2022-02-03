<div class="content-wrapper">

  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sản phẩm</h1>
          </div><!-- /.col -->
    
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

 <div class="duyet mb-2">
    <div class="left_duyet ml-3">
        <a href="?mod=sanpham&act=add" class="btn btn-primary">Thêm sản phẩm +</a>
    </div>
    <div class="right_duyet">

    </div>
 </div>
 <!-- thong bao-->

<?php if (isset($_COOKIE['duyet'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?=$_COOKIE['duyet'] ?>
    </div>
<?php } ?>

<?php if (isset($_COOKIE['themsp'])) { ?>
    <div class="alert alert-warning">
      <strong>Thông báo</strong> <?= $_COOKIE['themsp'] ?>
    </div>
<?php } ?>

  <?php if (isset($_COOKIE['msgg'])) { ?>
    <div class="alert alert-success">
      <strong>Thông báo</strong> <?= $_COOKIE['msgg'] ?>
    </div>
<?php } ?>
 <!-- /thong bao -->
<table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá bán</th>
                        <th>Giảm Giá</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
            <?php foreach($data as $sp){ ?>
                    <tr>
                        <td><?=$sp['maSP']?></td>
                        <td class="p-0 text-center"><img src="../public/image/<?=$sp['hinhanh1']?>" alt="" style="width:40px;"></td>
                        <td><?=$sp['tenSP']?></td>
                        <td><?=number_format($sp['giacu'])?></td>
                        <td><?=$sp['phantram'].'%'?></td>
                        <td>
                            <?php if($sp['trangthai']==1){
                                echo "Hiện";
                            }else{
                                echo "Ẩn";
                            }?>
                        </td>
                        <td><?=$sp['thoigian']?></td>
                        <td>
                        <?php if($sp['trangthai']==0){?>
                            <a href="?mod=sanpham&act=hien&id=<?=$sp['maSP']?>" class="p-1 bg-primary" title="Hiện"><i class="fas fa-eye-slash"></i></a>&ensp;
                        <?php }else{?>
                          <a href="?mod=sanpham&act=an&id=<?=$sp['maSP']?>" class="p-1 bg-primary" title="ẩn"><i class="fas fa-eye"></i></i></a>&ensp;
                          <?php }?>
                            <a href="?mod=sanpham&act=edit&id=<?=$sp['maSP']?>" class="p-1 bg-primary" title="sửa"><i class="fas fa-wrench"></i></a>&ensp;
                            <a href="?mod=sanpham&act=delete&id=<?=$sp['maSP']?>" class="p-1 px-2 bg-danger" title="Xóa" onclick="return confirm('Bạn có thật sự muốn xóa ?');"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
             <?php } ?>
                </tbody>
            </table>

</div>          
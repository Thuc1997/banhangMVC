<div class="content-wrapper">

  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Đơn hàng</h1>
          </div><!-- /.col -->
    
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

 <div class="duyet mb-2">
    <div class="left_duyet ml-3">
        <a href="?mod=hoadon&id=1" class="btn btn-primary">đã duyệt</a>
        <a href="?mod=hoadon&id=0" class="btn btn-danger">chưa duyệt</a>
    </div>
    <div class="right_duyet">

    </div>
 </div>
 <!-- thong bao-->
 <?php if (isset($_COOKIE['msgg'])) { ?>
    <div class="alert alert-success">
      <strong>Thông báo</strong> <?= $_COOKIE['msgg'] ?>
    </div>
<?php } ?>

<?php if (isset($_COOKIE['duyet'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?=$_COOKIE['duyet'] ?>
    </div>
<?php } ?>
 <!-- /thong bao -->
<table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Tên</th>
                        <th>Địa chỉ</th>
                        <th>sđt</th>
                        <th>Ngày đặt</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $dt){ ?>
                    <tr>
                        <td><?=$dt['maHD']?></td>
                        <td><?=$dt['nguoinhan']?></td>
                        <td><?=$dt['diachi']?></td>
                        <td><?=$dt['sdt'] ?></td>
                        <td><?=$dt['ngaylap']?></td>
                        <td><?=number_format($dt['tongtien'])?></td>
                        <td>
                          <?php if($dt['trangthai']==0){
                                      echo 'Chưa duyệt';
                                  }else{
                                      echo 'Đã duyệt';
                                  }
                            ?>
                        <td>
                        <?php if($dt['trangthai']==0){?>
                            <a href="?mod=hoadon&act=xetduyet&id=<?=$dt['maHD']?>" class="p-1 bg-primary" title="Duyệt đơn hàng"><i class="fas fa-check"></i></a>&ensp;
                        <?php }?>
                            <a href="?mod=hoadon&act=chitiet&id=<?=$dt['maHD'] ?>" class="p-1 bg-primary" title="Chi tiết"><i class="far fa-eye"></i></a>&ensp;
                            <a href="?mod=hoadon&act=delete&id=<?=$dt['maHD']?>" class="p-1 px-2 bg-danger" title="Xóa" onclick="return confirm('Bạn có thật sự muốn xóa ?');"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

</div>          
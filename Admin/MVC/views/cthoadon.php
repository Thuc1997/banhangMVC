<div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Chi tiết đơn hàng</h1>
          </div><!-- /.col -->
    
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

 <!-- /thong bao -->
<table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Màu sắc</th>
                        <th>Size</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>

                <tbody>
          <?php foreach ($data as $da) { ?>

                    <tr>
                        <td><?=$da['maHD']?></td>
                        <td><?=$da['tensp']?></td>
                        <td><?=number_format($da['dongia'])?></td>
                        <td><?=$da['mau']?></td>
                        <td><?=$da['size']?></td>
                        <td><?=$da['soluong']?></td>
                        <td><?=number_format($da['thanhtien'])?></td>
                    </tr>
          <?php } ?>

                </tbody>
            </table>

</div>          
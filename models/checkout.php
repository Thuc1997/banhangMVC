<?php
require_once('model.php');
class checkout extends model{
    
    function save($data){
    
        $f = "";
        $v = "";
    foreach ($data as $key => $value) {
        $f .= $key . ",";
        $v .= "'" . $value . "',";
    }
    $f = trim($f, ",");
    $v = trim($v, ",");
    $query = "INSERT INTO hoadon($f) VALUES ($v);";
    $status = $this->conn->query($query);
    $query_mahd = "SELECT maHD FROM hoadon ORDER BY ngaylap DESC LIMIT 1";
    $data_mahd = $this->conn->query($query_mahd)->fetch_assoc();
    
    if(isset($_SESSION['addcart'])){
        foreach ($_SESSION['addcart'] as $value) {
            
            $MaSP =$value['maSP'];

            $SoLuong = $value['soluong'];
    
            $DonGia = $value['giacu'];
    
             $Loai = "'".$value['loai']."'";
    
              $Size = "'".$value['size']."'";
    
            $TenSP = "'".$value['tenSP']."'";
    
            $HinhAnh = "'".$value['hinhanh1']."'";
    
            $ThanhTien = $value['ThanhTien'];
    
            $MaHD = $data_mahd['maHD'];

            $query_ct = "INSERT INTO `chitiethoadon`(`maHD`, `maSP`, `soluong`, `dongia`,`mau`,`size`, `hinhanh`, `tensp`, `thanhtien`) VALUES ($MaHD,$MaSP,$SoLuong,$DonGia,$Loai,$Size,$HinhAnh,$TenSP,$ThanhTien)";
            $status_ct = $this->conn->query($query_ct);

            }
        }  
        if ($status == true and $status_ct == true) {
            unset($_SESSION['addcart']);
            setcookie('msg', 'Đặt đơn hàng thành công', time() + 2);
            header('location: ?act=checkout&xuli=order_complete');
    
        } else {
            setcookie('msg', 'Đặt hàng không thành công', time() + 2);
            header('location: ?act=checkout');
        }

    }

}

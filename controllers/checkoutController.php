<?php

class checkoutController{

   var $checkoutModel;

    public function __construct(){
        require_once('models/checkout.php');
        $this->checkoutModel = new checkout();
    }

    function list(){

        if(isset($_SESSION['login1'])){
            $data_danhmuc = $this->checkoutModel->danhmuc();
            $data_chitietDM = array();

            for ($i = 1; $i <= count($data_danhmuc); $i++) {
                $data_chitietDM[$i] = $this->checkoutModel->chitietdanhmuc($i);
            }

            $count = 0;
            if (isset($_SESSION['addcart'])) {
                foreach ($_SESSION['addcart'] as $value) {
                    $count += $value['ThanhTien'];
                }
            }

            require_once('views/index.php');
        }else{
            header('location: ?act=taikhoan');
        }
    }

    function save(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');

            $count = 0;
            $tongtien=$_POST['tongtien'];
        
            if (isset($_SESSION['addcart'])) {
                foreach ($_SESSION['addcart'] as $value) {
                    $count += $value['ThanhTien'];
                }
            }
    
            $data = array(
                'maND' => $_SESSION['login1']['maND'],
                'ngaylap' => $ThoiGian,
                'nguoinhan' =>$_POST['HoTen'],
                'sdt' => $_POST['Phone'],
                'email'=> $_POST['Email'],
                'diachi' => $_POST['DiaChi'],
                'phuongthuctt'=>$_POST['pttt'],
                'ghichu'=>$_POST['GhiChu'],
                'tongtien' => $_POST['tongtien'],
                'trangthai'  =>  '0',
            );

        
         $this->checkoutModel->save($data);

    }

    function order_complete(){
        $data_danhmuc = $this->checkoutModel->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->checkoutModel->chitietdanhmuc($i);
        }
       
        $manguoidung=$_SESSION['login1']['maND'];

        $data= $this->checkoutModel->get_hoadon($manguoidung);
        
         if($data!=null){
            foreach ($data as $value1);                       
            $mahoadon=$value1['maHD'];
            $data_chitiethd=$this->checkoutModel->get_chitiethoadon($mahoadon);
         }
        require_once('views/index.php');
    }


}
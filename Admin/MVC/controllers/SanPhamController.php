<?php
require_once('MVC/models/sanpham.php');

class SanPhamController{

var $sanphamModel;
    public function __construct(){
        $this->sanphamModel = new sanpham();
    }

    public function list(){
        $data = $this->sanphamModel->All();
        require_once('MVC/views/index.php');
    }
    public function add(){
        $data_km = $this->sanphamModel->khuyenmai();
        $data_lsp = $this->sanphamModel->loaisp();
        $data_dm = $this->sanphamModel->danhmuc();
        require_once('MVC/views/index.php');
    }

    public function store(){
        $target_dir = "../public/image/";  // thư mục chứa file upload

        $HinhAnh1 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh1"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh1"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh1 =   basename($_FILES["HinhAnh1"]["name"]);
        }

        $HinhAnh2 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh2"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh2"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh2 =   basename($_FILES["HinhAnh2"]["name"]);
        }

        $HinhAnh3 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh3"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh3"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh3 =   basename($_FILES["HinhAnh3"]["name"]);
        }

         $HinhAnh4 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh4"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh4"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh4 =   basename($_FILES["HinhAnh4"]["name"]);
        }

         $HinhAnh5 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh5"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh5"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh5 =   basename($_FILES["HinhAnh5"]["name"]);
        }

         $HinhAnh6 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh6"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh6"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh6 =   basename($_FILES["HinhAnh6"]["name"]);
        }

        $TrangThai = 0;
        if (isset($_POST['TrangThai'])) {
            $TrangThai = $_POST['TrangThai'];
        }

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'maLSP' =>    $_POST['MaLSP'],
            'tenSP'  =>   $_POST['TenSP'],
            'maDM' => $_POST['MaDM'],
            'giacu' => $_POST['DonGia'],
            'soluong' => $_POST['SoLuong'],
            'hinhanh1' => $HinhAnh1,
            'hinhanh2' => $HinhAnh2,
            'hinhanh3' => $HinhAnh3,
            'hinhanh4' => $HinhAnh4,
            'hinhanh5' => $HinhAnh5,
            'hinhanh6' => $HinhAnh6,
            'phantram'=>$_POST['Giamgia'],
            'mau1'=>$_POST['Mau1'],
            'mau2'=>$_POST['Mau2'],
            'mau3'=>$_POST['Mau3'],
            'mau4'=>$_POST['Mau4'],
            'size1'=>$_POST['Size1'],
            'size2'=>$_POST['Size2'],
            'size3'=>$_POST['Size3'],
            'size4'=>$_POST['Size4'],
            'makm' =>$_POST['MaKM'],
            'LoaiSeo'=>$_POST['LoaiSale'],
            'trangthai' => $TrangThai,
            'mota' =>  $_POST['MoTa'],
            'thoigian' => $ThoiGian,
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->sanphamModel->store($data);
    }
    public function delete(){
        $id = $_GET['id'];
        $this->sanphamModel->delete($id);
    }

    function hien(){
        $data = array(
            'maSP' => $_GET['id'],
            'trangthai' => 1,
        );
        $this->sanphamModel->update($data);
    }
    function an(){
        $data = array(
            'maSP' => $_GET['id'],
            'trangthai' =>0,
        );
        $this->sanphamModel->update($data);
    }

    public function edit(){
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data_km = $this->sanphamModel->khuyenmai();
        $data_lsp = $this->sanphamModel->loaisp();
        $data_dm = $this->sanphamModel->danhmuc();
        $data = $this->sanphamModel->find($id);
        require_once('MVC/views/index.php');
    }

    function update(){

        $target_dir = "../public/image/";  // thư mục chứa file upload

        $HinhAnh1 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh1"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh1"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh1 =   basename($_FILES["HinhAnh1"]["name"]);
        }

        $HinhAnh2 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh2"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh2"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh2 =   basename($_FILES["HinhAnh2"]["name"]);
        }

        $HinhAnh3 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh3"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh3"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh3 =   basename($_FILES["HinhAnh3"]["name"]);
        }

         $HinhAnh4 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh4"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh4"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh4 =   basename($_FILES["HinhAnh4"]["name"]);
        }

         $HinhAnh5 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh5"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh5"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh5 =   basename($_FILES["HinhAnh5"]["name"]);
        }

         $HinhAnh6 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh6"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh6"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh6 =   basename($_FILES["HinhAnh6"]["name"]);
        }

        $TrangThai = 0;
        if (isset($_POST['TrangThai'])) {
            $TrangThai = $_POST['TrangThai'];
        }

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'maSP'=>$_POST['MaSP'],
            'maLSP' =>    $_POST['MaLSP'],
            'tenSP'  =>   $_POST['TenSP'],
            'maDM' => $_POST['MaDM'],
            'giacu' => $_POST['DonGia'],
            'soluong' => $_POST['SoLuong'],
            'hinhanh1' => $HinhAnh1,
            'hinhanh2' => $HinhAnh2,
            'hinhanh3' => $HinhAnh3,
            'hinhanh4' => $HinhAnh4,
            'hinhanh5' => $HinhAnh5,
            'hinhanh6' => $HinhAnh6,
            'phantram'=>$_POST['Giamgia'],
            'mau1'=>$_POST['Mau1'],
            'mau2'=>$_POST['Mau2'],
            'mau3'=>$_POST['Mau3'],
            'mau4'=>$_POST['Mau4'],
            'size1'=>$_POST['Size1'],
            'size2'=>$_POST['Size2'],
            'size3'=>$_POST['Size3'],
            'size4'=>$_POST['Size4'],
            'makm' =>$_POST['MaKM'],
            'LoaiSeo'=>$_POST['LoaiSale'],
            'trangthai' => $TrangThai,
            'mota' =>  $_POST['MoTa'],
            'thoigian' => $ThoiGian,
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }

        if ($HinhAnh1 == "") {
            unset($data['hinhanh1']);
        }
        if ($HinhAnh2 == "") {
            unset($data['hinhanh2']);
        }
        if ($HinhAnh3 == "") {
            unset($data['hinhanh3']);
        }
         if ($HinhAnh4 == "") {
            unset($data['hinhanh4']);
        }
        if ($HinhAnh5 == "") {
            unset($data['hinhanh5']);
        }
        if ($HinhAnh6 == "") {
            unset($data['hinhanh6']);
        }


        $this->sanphamModel->update($data);
    }

}
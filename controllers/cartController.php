<?php

require_once('models/cart.php');

class cartController{
    var $cartModel;

    public function __construct(){
        $this->cartModel = new cart();
    }

    function list_cart(){
        $data_danhmuc = $this->cartModel->danhmuc();
        $data_chitietDM = array();

        for($i = 1 ; $i <= count($data_danhmuc);$i++){
            $data_chitietDM[$i] = $this->cartModel->chitietdanhmuc($i);
        }


        $count = 0;
        if (isset($_SESSION['addcart'])) {
            foreach ($_SESSION['addcart'] as $value) {
                $count += $value['ThanhTien'];
            }
        }

        require_once('views/index.php');
    }

    function add_cart(){

        if(isset($_POST['id'])&& isset($_POST["num"])){
        
            $id=$_POST["id"];
            $loai=$_POST["loai"];
            $size=$_POST["size"];
            $num=$_POST["num"];
            $data = $this->cartModel->detail_sp($id);
            $toi = $data['giacu'] *((100-$data['phantram'])/100);
            $count = 0;
           
            if(!isset($_SESSION['addcart'])){
                $cart=array();
                $cart[$id]=array(
                    'maSP'=>$data['maSP'] ,  
                    'tenSP' => $data['tenSP'],
                    'giacu' => $data['giacu'],
                    'phantram'=> $data['phantram'],
                    'soluong' => $num,
                    'loai' => $loai,
                    'size' => $size,
                    'hinhanh1' => $data['hinhanh1'],
                    'ThanhTien' =>(int)$toi*$num,
                );
            }
            else{
                $cart=$_SESSION['addcart'];
                if(array_key_exists($id, $cart)){
                if($cart[$id]['loai']==$loai && $cart[$id]['size']==$size){
                $cart[$id]=array(
                    'maSP'=>$data['maSP'] ,
                'tenSP' => $data['tenSP'],
                'giacu' => $data['giacu'],
                'phantram'=> $data['phantram'],
                'soluong' => (int)$cart[$id]['soluong'] + $num,
                $s=(int)$cart[$id]['soluong'] + $num,
                'loai' => $cart[$id]['loai'],
                'size' => $cart[$id]['size'],
                'ThanhTien' => (int)$toi*$s,
                'hinhanh1' => $data['hinhanh1'],);

                    }else{
                        $cart[$id]=array(
                        'maSP'=>$data['maSP'] ,
                        'tenSP' => $data['tenSP'],
                        'giacu' => $data['giacu'],
                        'phantram'=> $data['phantram'],
                        'soluong' => $num,
                        'loai' => $loai,
                        'size' => $size,
                        'ThanhTien' => (int)$toi*$num,
                        'hinhanh1' => $data['hinhanh1'],
                    );
        }
                            }else{
                                
                                    $cart[$id]=array(
                                        'maSP'=>$data['maSP'] ,
                                    'tenSP' => $data['tenSP'],
                                    'giacu' => $data['giacu'],
                                    'phantram'=> $data['phantram'],
                                    'soluong' => $num,
                                    'loai' => $loai,
                                    'size' => $size,
                                    'ThanhTien' => (int)$toi*$num,
                                    'hinhanh1' => $data['hinhanh1'],
                                );
                                }
         

    } 
    $_SESSION['addcart']=$cart;
    $numberCart=0;
    foreach ($_SESSION['addcart'] as $value) {
        $count += $value['ThanhTien'];
        $numberCart += (int)$value['soluong'];
       
     }

    echo $numberCart;
}
   
}
         
function update_cart(){
 
    if(isset($_POST['id']) && isset($_POST['num'])){
        $num=$_POST['num'];
        $id=$_POST['id'];

        
        $cart=$_SESSION['addcart'];
        if(array_key_exists($id,$cart)){
            $toi1 = $cart[$id]['giacu'] *((100-$cart[$id]['phantram'])/100);

            if($num > 0){
            $cart[$id]=array(
                'maSP'=>$cart[$id]['maSP'] ,
            'tenSP' => $cart[$id]['tenSP'],
            'giacu' => $cart[$id]['giacu'],
            'soluong' => $num,
            'phantram'=> $cart[$id]['phantram'],
            'loai' => $cart[$id]['loai'],
            'size' =>  $cart[$id]['size'],
            'ThanhTien' => (int)$toi1*$num,
            'hinhanh1' => $cart[$id]['hinhanh1'],
            
        );
        }else{
            unset($cart[$id]);
        }
            $_SESSION['addcart']=$cart;
        }
    }
    
}

}


    




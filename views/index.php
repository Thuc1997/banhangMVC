
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./public/css/appp.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
</head>
<body>

<div class="app">
        <?php require_once('header.php') ?>

        <?php require_once('dieuhuong.php') ?>

        <?php require_once('footer.php') ?>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="./public/js/_jquery.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> 
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/than.js"></script>
    <script src="./public/js/zoom.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="hb0CzdVC"></script>

    <script src='./public/js/tinhthanh.js'></script>
    <script src="./public/js/appp.js"></script>
    <script src="./public/js/vanchuyen.js"></script>
    
    <script>
          function addcart(id){           
            loai=$('.mausac .itemc .active').val();
            size=$('.size .itemc .active').val();
            num= $('#num').val();
                var data = {
                    'id':id,
                    'loai':loai,
                    'size':size,
                    'num':num
                }
            $.ajax({
                url: '<?php  require_once('controllers/cartController.php');
                 $controller_obj = new cartController();
                 $controller_obj->add_cart();?>',
                type: 'POST',
                data: data,
                success: function(reponse){
                    alert('Thêm sản phẩm thành công!');    
                }

            });    
            };

            function deleteCart(id){
                $.post('<?php  require_once('controllers/cartController.php');
                $controller_obj = new cartController();
                $controller_obj->update_cart(); ?>',{'id':id,'num':0,},function(data){
                    $('#listcart').load("?act=cart #listcart");               
                });
            }
            
            var menuu = document.querySelectorAll('.nav_menu>ul>li>a');
            for(var i=0; i< menuu.length; i++){
                menuu[i].setAttribute('href','javascript:void(0)');
            }
            var shopping = document.querySelector('.shopping');
            shopping.href = "?act=cart";



    </script>
</body>
</html>



